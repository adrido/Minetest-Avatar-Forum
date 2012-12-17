<?php
$path="files";
$zip = new ZipArchive;
$zip->open('zipball.zip', ZipArchive::CREATE);
if (false !== ($dir = opendir($path)))
     {
         while (false !== ($file = readdir($dir)))
         {
             if ($file != '.' && $file != '..')
             {
                       $zip->addFile($path.DIRECTORY_SEPARATOR.$file);
             }
         }
     }
     else
     {
         die('Can\'t read dir');
     }
$zip->close();

header("location: zipball.zip");
?>