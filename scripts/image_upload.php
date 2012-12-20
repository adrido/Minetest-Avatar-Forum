<?php
function upload_skin($name,$filen,$public,$side){
  global $forum_user;
  global $_FILES;
  $dest="";

  if ($public==true){
     $dest=$name;
  }else{
     $dest="player_".$forum_user['username'];
  }

  $dest.=$side;

if ($_FILES[$filen]["error"] > 0){
    return "Error: " . $_FILES[$filen]["error"];
}else{
    if (file_exists("files/".$dest.".png") && $public==true){
      return "<!--Error:-->An avatar already exists with that name";
    }else{
      move_uploaded_file($_FILES[$filen]["tmp_name"],"files/".$dest.".png");
    }
}

return $dest;
}
?>