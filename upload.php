<?php
include "scripts/setup.php";

$page_title="Upload a Texture";

include "scripts/pageheader.php";
?>
<h1>Texture Upload</h1>
<form action="upload.php" method="post">
<fieldset>
<legend>Character Textures</legend>
<i>Texture files must be 16x32 or to scale.</i><br />
Front: <input type="file" name="front"><br />
Back: <input type="file" name="front">
</fieldset>

<p>
<input type="checkbox" name="public">Add to the Public Gallery
</p>

<p>
<fieldset>
<legend>Only fill in if the above check box is ticked.</legend>
Name of Character pack: <input type="text" name="name" /><br />
Description:<br />
<textarea name="desc" cols=125 rows=7>
</textarea>
</fieldset>
</p>

<input type="submit" value="Upload">
</form>
