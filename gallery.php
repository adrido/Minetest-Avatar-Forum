<?php
include "scripts/setup.php";

$page_title="Gallery";

include "scripts/pageheader.php";

echo "<h1>Gallery</h1>";

$query = $_GET['id'];
$mode = $_GET['mode'];
$type = $_GET['type'];

if (!$type)
   if (!$query && !$mode){
       echo "<a href=\"gallery.php?type=2d\">2d Character (Sprite)</a><br /><br /><!--<a href=\"gallery.php?type=3d\">-->3d Character <i>currently unavailable</i></a>";
       include "scripts/pagefooter.php";
   }else
       $type="2d";
       

if (!$mode)
$mode="tags";

include "scripts/gallery.php";

include "scripts/pagefooter.php";

?>
