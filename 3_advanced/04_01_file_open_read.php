<?php
$myfile = fopen("02_webdictionary.txt", "r") or die("Unable to open file");
$buf = fread($myfile, filesize("02_webdictionary.txt"));
echo nl2br($buf);
fclose($myfile);
?>
