<?php
function SQLerror($title,$text){
  echo "<h1>$title</h1>";
  die($text);
}

session_start();

$serverpath="http://multa.bugs3.com/minetest/website/avatar";
$sql_url="mysql.serversfree.com"; // The URL to the MySql Server
$sql_user="u372522788_admin"; // The username for the MySql Server
$sql_pass="password"; // The password for the MySql Server
$sql_db="u372522788_minetest"; // Database for the MySql Server

$handle = mysql_pconnect($sql_url,$sql_user,$sql_pass) or SQLerror("MySQL Database", "Error connecting to the MySQL database");

if (!$handle || $handle==0)
SQLerror("MySQL Database", "Error connecting to the MySQL database");

mysql_select_db($sql_db,$handle) or die("Error Switching DB");

define('FORUM_QUIET_VISIT', 1);
define('FORUM_TURN_OFF_MAINT', 1);
define('FORUM_DISABLE_CSRF_CONFIRM', 1);
define('FORUM_ROOT', '../forum/');
require FORUM_ROOT.'include/common.php';

function require_login($forum_user){
if ($forum_user['username']=="Guest"){
	header("location: ".FORUM_ROOT."login.html");
}
}

?>
