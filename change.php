<?php
include "scripts/setup.php";

require_login($forum_user);

$user=$forum_user['username'];

$set="";

$type=$_GET['t'];

if (!$type || is_numeric($type)==false)
   SQLerror("Type required","you have not specifed a skin type");


$set="cha_type=$type";

$front=$_GET['f'];

if ($front){
  $front= mysql_real_escape_string ($front);
  $set.=", cha_front='".$front."'";
}

$back=$_GET['b'];

if ($back && $type==2){
  $back = mysql_real_escape_string ($back);
  $set.=", cha_back='$back'";
}

echo "UPDATE punbb_users SET $set WHERE username='$user'";

if ($set!=""){

$res = $forum_db->query("UPDATE users SET $set WHERE username='$user'") or SQLerror("MySQL Query Error","Error on setting punbb_users.cha_front and cha_back");

}

header("location: index.php");
?>