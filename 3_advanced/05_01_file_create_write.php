<?php
$myfile = fopen("05_newfile.txt", "w") or die("Unable to create or open file");
$txt = "John Doe\n";
fwrite($myfile, $txt);
$txt = "Jane Doe\n";
fwrite($myfile, $txt);
fclose($myfile);
?>
