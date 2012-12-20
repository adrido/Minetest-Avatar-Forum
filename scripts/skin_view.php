<?php
function skin_view($type,$front,$back){
if ($type==2){
  

// 2d Skin displayer
echo "<img src=\"$front\" width=64 height=128 alt=\"left\" /> ";
echo "<img src=\"$back\" width=64 height=128  alt=\"right\" />";


}else{
  
// 3d skin displayer
echo "<img src=\"$front\" width=128 height=64 alt=\"3d flat skin\" />";


}
}
?>