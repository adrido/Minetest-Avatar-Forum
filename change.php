<?php
include "scripts/setup.php";

$user=$forum_user['username'];

$set="";

$front=$_GET['f'];

if ($front){
  $front= mysql_real_escape_string ($front);
  $set="cha_front='".$front."'";
}

$back=$_GET['b'];

if ($back){
  $back = mysql_real_escape_string ($back);
  
  if ($set!="")
     $set.=", ";

  $set.="cha_back='$back'";
}

echo "UPDATE punbb_users SET $set WHERE username='$user'";

if ($set!=""){

$res = $forum_db->query("UPDATE punbb_users SET $set WHERE username='$user'") or SQLerror("MySQL Query Error","Error on setting punbb_users.cha_front and cha_back");

}

header("location: index.php");
?>