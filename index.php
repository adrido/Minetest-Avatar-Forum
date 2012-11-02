<?php
include "scripts/setup.php";

$page_title="Welcome";

include "scripts/pageheader.php";
?>

<?php
if ($forum_user['username']=="Guest"){
  echo "<h1>Welcome</h1>";
  echo "Log in to the Minetest forum to set and upload your avatars!<br />\n Until then, you can still <a href=\"gallery.php\">look around</a>";
  die("");
}

echo "<h1>Hello, ".$forum_user['username']."</h1>\n";

if (file_exists("files/".$forum_user['cha_front'].".png")){
echo "<img src=\"files/".$forum_user['cha_front'].".png\" width=64 height=128 /> ";
}else{
echo "<img src=\"files/default_green.png\" width=64 height=128 /> ";
}
if (file_exists("files/".$forum_user['cha_back'].".png")){
echo "<img src=\"files/".$forum_user['cha_back'].".png\" width=64 height=128 />";
}else{
echo "<img src=\"files/default_green_back.png\" width=64 height=128 />";
}
?>
<p>
<a href="gallery.php">Avatar from Gallery</a><br /><br />
<a href="upload.php">Upload an Avatar</a>
</p>

<fieldset>
<legend>Notice</legend>
You will not be able to change your character texture on servers which do not have the mod by PilzAdam installed.<br />
In those servers, all players will have the same character texture.<br />
<br />
When you are on a server that has the mod installed, type <i>/register [your forum name]</i> to claim your avatar
</fieldset>


