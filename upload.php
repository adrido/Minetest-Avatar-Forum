<?php
include "scripts/setup.php";

require_login($forum_user);

$page_title="Upload a Texture";

$message="";

include "scripts/upload.php";

include "scripts/pageheader.php";


?>
<font color="#FF0000"><i><?php echo $message;?></i></font>

<h1>Texture Upload</h1>
<form action="upload.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="submitted" value="yes">

<p>
<input type="checkbox" name="s2d" id="s2d" onClick="javascript:toggle2dInfo()">Is a 2d skin
</p>

<fieldset>
<legend>Character Textures</legend>


<i>Texture files must be 16x32 or to scale.</i>

<p>Front: <input type="file" name="front" id="front"><br />
<div id="back_pnl">Back: <input type="file" name="back" id="back"></div>
</fieldset>

<p>
<input type="checkbox" name="public" id="public" onClick="javascript:togglePrivInfo()">Add to the Public Gallery
</p>

<p>
<fieldset id="gallery_data" style="display: block;">
<legend>Public Gallery Settings</legend>
Name of Character pack: <input type="text" name="name" /><br />
Tags: <input type="text" name="tags" /><br /><br />
Description: <a href="help_markup.php" target="_blank">Supports a Markup format</a><br />
<textarea name="desc" cols=100 rows=7>
</textarea>

<p>
<font color="#FF0000"><b>Warning</b></font><br>
If you do not specify a license, then your skin will be treated as one with a <a href="http://sam.zoy.org/wtfpl/">WTFPL license</a>.
</p>
</fieldset>
</p>

<input type="submit" value="Upload">
</form>

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
function toggle2dInfo() {
	toggle('back_pnl');
}
function toggle(id) {
	var element = document.getElementById(id);
	var display = (element.style.display === 'none') ? '' : 'none';
	element.style.display = display;
}
prepareForm();
togglePrivInfo();
toggle2dInfo();
</script>

<?php
include "scripts/pagefooter.php";
?>
