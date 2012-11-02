<?php
include "scripts/setup.php";

require_login($forum_user);

$page_title="Upload a Texture";

$message="";

include "scripts/upload.php";

include "scripts/pageheader.php";


?>
<font color="#0000FF"><i><?php echo $message;?></i></font>

<script type="text/javascript">
function prepareForm() {
	if (!document.getElementById) {
		return false;
	}
	var form = document.getElementById('myForm');
}
function togglePrivInfo() {
	toggle('gallery_data');
}
function toggle(id) {
	var element = document.getElementById(id);
	var display = (element.style.display === 'none') ? '' : 'none';
	element.style.display = display;
}
prepareForm();
</script>


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
<input type="checkbox" name="public" id="public" onClick="javascript:togglePrivInfo()">Add to the Public Gallery
</p>

<p>
<fieldset id="gallery_data" style="display: none;">
<legend>Public Gallery Settings</legend>
Name of Character pack: <input type="text" name="name" /><br />
Tags: <input type="text" name="tags" /><br /><br />
Description: <a href="help_markup.php" target="_blank">Supports a Markup format</a><br />
<textarea name="desc" cols=100 rows=7>
</textarea>
</fieldset>
</p>

<input type="submit" value="Upload">
</form>

<?php
include "scripts/pagefooter.php";
?>
