<?php
$myfile = fopen("02_webdictionary.txt", "r") or die("Unable to open file");
// output one line until en-of-file
while(!feof($myfile)) {
    echo fgets($myfile) . "<br>";
}
?>
