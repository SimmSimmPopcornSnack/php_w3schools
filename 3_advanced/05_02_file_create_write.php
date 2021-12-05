<?php
$myfile = fopen("05_newfile.txt", "w") or die("Unable to create or open file");
$txt = "Mickey Mouse\n";
fwrite($myfile, $txt);
$txt = "Minnie Mouse\n";
fwrite($myfile, $txt);
fclose($myfile);
?>
