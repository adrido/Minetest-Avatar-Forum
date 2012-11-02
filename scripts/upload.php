<?php

$sub=$_POST['submitted'];

if ($sub=="")
   return;

if ($_FILES["front"]["type"]=="" && $_FILES["back"]["type"]==""){
  $message="You need to upload two textures for the Avatar";
   return;
}

$public=$_POST['public'];
$public=($public=="on");

$name=$_POST['name'];
$desc=$_POST['desc'];

if ($public==true && $name==""){
    $message="You need to give your Avatar Textures a name!";
    return;
}

if (($_FILES["front"]["type"] == "image/png") && ($_FILES["back"]["type"] == "image/png")){
  $front_dest="";
  $back_dest="";

  if ($public==true){
     $front_dest=$name;
     $back_dest=$name."_back";
  }else{
     $front_dest="player_".$forum_user['username'];
     $back_dest="player_".$forum_user['username']."_back";
  }


if ($_FILES["front"]["error"] > 0){
    $message= "Error: " . $_FILES["front"]["error"];
    return;
}else{
    if (file_exists("files/".$front_dest.".png") && $public==true){
      $message="An avatar already exists with that name";
      return;
    }else{
      move_uploaded_file($_FILES["front"]["tmp_name"],"files/".$front_dest.".png");
    }
}

if ($_FILES["back"]["error"] > 0){
    $message= "Error: " . $_FILES["back"]["error"];
    return;
}else{
    if (file_exists("files/".$back_dest.".png") && $public==true){
      $message="An avatar already exists with that name";
      return;
    }else{
      move_uploaded_file($_FILES["back"]["tmp_name"],"files/".$back_dest.".png");
    }
}

  //$message="Uploaded";

  if ($public==false){
    header("location: change.php?f=$front_dest&b=$back_dest");
  }
}else{
  $message="'".$_FILES["front"]["type"]."' is a invalid format. Only PNG files are allowed. ";
}

?>