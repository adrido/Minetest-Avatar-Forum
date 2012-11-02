<?php
include "scripts/setup.php";

$page_title="Welcome";

include "scripts/pageheader.php";
?>

<?php
echo "<h1>Hello, ".$forum_user['username']."</h1>\n";

if (file_exists("files/player_".$forum_user['username'].".png")){
echo "<img src=\"files/player_".$forum_user['username'].".png\" width=64 height=128 />";
}else{
echo "<img src=\"files/default_green.png\" width=64 height=128 />";
}
if (file_exists("files/player_".$forum_user['username']."_back.png")){
echo "<img src=\"files/player_".$forum_user['username']."_back.png\" width=64 height=128 />";
}else{
echo "<img src=\"files/default_green_back.png\" width=64 height=128 />";
}
?>
<p>
<a href="gallery.php">Image from Gallery</a><br /><br />
<a href="upload.php">Upload an image</a>
</p>

<fieldset>
<legend>Notice</legend>
You will not be able to change your character texture on servers which do not have the mod by PilzAdam installed.<br />
In those servers, all players will have the same character texture.
</fieldset>


