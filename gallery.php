<?php
include "scripts/setup.php";

$page_title="Gallery";

include "scripts/pageheader.php";

echo "<h1>Gallery</h1>";

$query = $_GET['id'];
$mode = $_GET['mode'];
if (!$mode)
$mode="tags";

include "scripts/gallery.php";

?>
