<?php
$xml = simplexml_load_file("node.xml") or die("Error: Cannot create object.");
echo $xml->to . "<br>";
echo $xml->from . "<br>";
echo $xml->heading . "<br>";
echo $xml->body;
?>
