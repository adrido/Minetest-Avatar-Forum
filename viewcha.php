<?php
include "scripts/setup.php";

include "scripts/formatcode.php";

$id=$_GET['id'];

if (is_numeric($id)==false){
   SQLerror("Non Integer","Non integers are not allowed in the id field. <br /> <a href=\"index.php\">Back to home</a>");
}

$res = mysql_query("SELECT * FROM cha WHERE id=$id",$handle) or SQLerror("MySQL Query Error","Error on searching database.cha.id for '$id'");
$row = mysql_fetch_row($res) or SQLerror("Row Error","No results where found for a mod with the id $id");
$page_title="View Character - {$row[1]}";

$owner = $row[4];

include "scripts/pageheader.php";

$links="";

echo "<table width=\"900\"><tr><td>\n";
echo "<table width=\"900\" bgcolor=\"#FFFFBD\"><tr><td width=\"100\"><a href=\"change.php?id={$row[0]}\">Use This</a></td>\n";

echo "<td width=\"650\">\n";    // Download Link
echo "<h1 align=center>{$row[1]} - by {$row[4]}</h1></td>\n";  // Title and User Link

echo "</tr></table></td></tr>\n"; // Version

echo "<tr><td><table width=\"900\"><tr><td><div style=\"width:870px;text-wrap: suppress;\"><p>\n";

echo "<center><img width=64 height=128 src=\"files/{$row[3]}.png\">\n<img width=64 height=128 src=\"files/{$row[3]}_back.png\"></center>\n";

echo "</p><p>\n";

echo formatbb($row[2])."</p></div></td>\n"; // Description

echo "</table></td></tr>\n";

echo "<tr height=30 bgcolor=\"#FFFFBD\"><td style=\"text-align:right;\">$links&#32;&#32;&#32;&#32;</td></tr>\n";
?>
