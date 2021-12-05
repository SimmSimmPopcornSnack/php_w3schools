<?php
$buf = readfile("02_webdictionary.txt");
echo nl2br($buf); // this doesn't help outputting with newline characters
?>
