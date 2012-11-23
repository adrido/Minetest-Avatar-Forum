<?php
include "scripts/setup.php";

$page_title="Welcome";
$page_links="<a onClick=\"javascript:use_cha();\"><u>Select current Skin</u></a>";

include "scripts/pageheader.php";
?>

<script language="javascript">
function use_cha(){
  document.write("URL: "+document.getElementById("bro").contentWindow.location.href);
}
</script>

<iframe id="bro" width="100%" height="580" src="http://minecraftskins.com/">
</iframe>