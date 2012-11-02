<?php
include "scripts/setup.php";

$page_title="Upload a Texture";

$message="This page is in development - it does not work yet.";

include "scripts/upload.php";

include "scripts/pageheader.php";


?>
<font color="#FF0000"><i><?php echo $message;?></i></font>
<h1>Texture Upload</h1>
<form action="upload.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="submitted" value="yes">
<fieldset>
<legend>Character Textures</legend>
<i>Texture files must be 16x32 or to scale.</i><br />
Front: <input type="file" name="front" id="front"><br />
Back: <input type="file" name="back" id="back">
</fieldset>

<p>
<input type="checkbox" name="public">Add to the Public Gallery
</p>

<p>
<fieldset>
<legend>Only fill in if the above check box is ticked.</legend>
Name of Character pack: <input type="text" name="name" /><br />
Description:<br />
<textarea name="desc" cols=100 rows=7>
</textarea>
</fieldset>
</p>

<input type="submit" value="Upload">
</form>
