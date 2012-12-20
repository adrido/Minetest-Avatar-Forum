<?php
echo "<table width=\"100%\">";
$query= mysql_real_escape_string ($query);

if ($mode=="tags"){
  if ($type==2)
  $qu_str="SELECT * FROM cha WHERE type=2 AND tags LIKE '%$query%'";
  else if ($type==3)
    $qu_str="SELECT * FROM cha WHERE type=3 AND tags LIKE '%$query%'";
  else
   $qu_str="SELECT * FROM cha WHERE tags LIKE '%$query%'";
}else if ($mode=="user"){
   $qu_str="SELECT * FROM cha WHERE owner='$query'";
}else if ($mode=="sb"){
   $qu_str="SELECT * FROM cha WHERE tags LIKE '%$query%' OR name LIKE '%$query%'";
}


$res = mysql_query($qu_str,$handle) or SQLerror("MySQL Query Error","Error on searching database.mods.tags for '$query'");

$alternate=0;
// Get projects loop
$is_result=false;

while ($hash = mysql_fetch_assoc($res)){

      $is_result=true;
  
      if ($alternate==0){
         $bgcolor="#FFFFFF";
         echo "\n<tr>\n";
      }

      // Owner name from id (by Phitherek_)
      // End of Phitherek_' s code

      $image="images/topicicon_read.jpg";

      $alternate=$alternate+1;
      
      if ($alternate>10){
        $alternate=1;
        echo "\n</tr><tr>\n";
      }
      
      echo "<td width=32><a href=\"viewcha.php?id={$hash['id']}\" title=\"{$hash['name']} by {$hash['owner']}\"><img width=32 height=64 src=\"files/{$hash['file']}.png\"></a></td><td width=32><a href=\"viewcha.php?id={$hash['id']}\" title=\"{$hash['name']} by {$hash['owner']}\"><img width=32 height=64 src=\"files/{$hash['file']}_back.png\"></a>";
}

while($alternate<11){
        $alternate=$alternate+1;
        echo "\n</td><td width=70>\n";
}

if ($is_result==false){
echo "<tr><td colspan=10><center><i>no search results found</i></center></td></tr>";
}

echo "</table>";
?>
