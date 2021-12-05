<?php
$myfile = fopen("02_webdictionary.txt", "r") or die("Unable to open file");
echo fgets($myfile);
fclose($myfile);
?>
