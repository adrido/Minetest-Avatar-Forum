<?php
include "scripts/setup.php";

$page_title="Welcome";

include "scripts/pageheader.php";
?>

<?php
if ($forum_user['username']=="Guest"){
  echo "<h1>Welcome</h1>";
  echo "Log in to the Minetest forum to set and upload your avatars!<br />\n Until then, you can still <a href=\"gallery.php\">look around</a>";
  include "scripts/pagefooter.php";
}

echo "<h1>Hello, ".$forum_user['username']."</h1>\n";

$def=false;
if ($forum_user['cha_back']!=""){
echo "<img src=\"".$forum_user['cha_front'].".png\" width=64 height=128 alt=\"left\" /> ";
}else{
echo "<img src=\"files/default_texture.png\" width=64 height=128 /> ";
$def=true;
}
if ($forum_user['cha_back']!=""){
echo "<img src=\"".$forum_user['cha_back'].".png\" width=64 height=128  alt=\"right\" />";
}else{
echo "<img src=\"files/default_texture_back.png\" width=64 height=128 />";
$def=true;
}

if ($def==true)
   echo "<br /><font size=2>No avatar selected.<br />\nDefault avatar from the server's texture pack will be used.</font>";
?>
<p>
<a href="gallery.php">Avatar from Gallery</a><br /><br />
<a href="upload.php">Upload an Avatar</a>
</p>

<script>
function hideNotice(){
  var element = document.getElementById("notice");
  var display ='none';
  element.style.display = display;
  }
</script>


<fieldset id="notice">
<legend>Notice</legend>
You will not be able to change your character texture on servers which do not have the mod by PilzAdam installed.<br />
In those servers, all players will have the same character texture, which is dependant on the texture pack installed<br />
<br />
The mod does not currently download the player's avatar, but it will do soon.
<!--When you are on a server that has the mod installed, type <i>/register [your forum name]</i> to claim your avatar-->
<br /><br />
<a onClick="javascript:hideNotice();"><u>Close</u></a>
</fieldset>

<?php
  include "scripts/pagefooter.php";
?>


