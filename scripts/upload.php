<?php
$front=$_GET['front'];
if (!$front)
   return;

$back=$_GET['back'];
if (!$back)
   return;
   
$public=$_GET['public'];
$public=($public=="public");

?>