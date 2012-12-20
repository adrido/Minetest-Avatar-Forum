<?php
// Load scripts
require_once "image_upload.php";

// Temporary Message
$message="The uploaded is being edited to support 3d. All uploads will not work at the moment";

// Load  posted information
$public=$_POST['public'];
$public=($public=="on");
$name=$_POST['name'];
$desc=$_POST['desc'];
$tags=$_POST['tags'];
$sub=$_POST['submitted'];
$type=3-($_POST['s2d']=="on");

if ($sub=="")
   return;

if (is_numeric($type)==false){
   $message="Something went wrong. Variable \$type non-numeric error.";
   return;
}

// Check all required textures are given
$insf=false;  //insufficient textures to make skin

if ($_FILES["front"]["type"]=="")
   $insf=true;

if ($_FILES["back"]["type"]=="" && $type==2)
   $insf=true;

if ($insf==true){
  $message="You need to upload textures for the Skin";
   return;
}

// Check public information

if ($public==true && $name==""){
    $message="You need to give your Avatar Textures a name!";
    return;
}

// Check all is good with extensions
if (($_FILES["front"]["type"] != "image/png")){
  $message="'".$_FILES["front"]["type"]."' is a invalid format. Only PNG files are allowed. ";
  return;
}

if ($type==2 && ($_FILES["back"]["type"] != "image/png")){
  $message="'".$_FILES["back"]["type"]."' is a invalid format. Only PNG files are allowed. ";
  return;
}

// Upload the textures

$front_dest=upload_skin($name,"front",$public,"");
$back_dest="";
if ($type==2)
  $back_dest=upload_skin($name,"back",$public,"_back");

if (strstr($front_dest,"Error")){
  $message=$front_dest;
  return;
}

if ($public==false){
    header("location: change.php?t=$type&f=files/$front_dest&b=files/$back_dest");
  }else{
        $name= mysql_real_escape_string ($name);
        $desc= mysql_real_escape_string ($desc);
        $front_dest= mysql_real_escape_string ($front_dest);
        $tags= mysql_real_escape_string ($tags);
        $owner= mysql_real_escape_string ($forum_user['username']);
        mysql_query("INSERT INTO cha (name, description, file, owner, tags, type) VALUES ('$name', '$desc', '$front_dest', '$owner', '$tags', $type)",$handle);
        $the_id=mysql_insert_id($handle);
        header("location: viewcha.php?id=$the_id");
  }

?>