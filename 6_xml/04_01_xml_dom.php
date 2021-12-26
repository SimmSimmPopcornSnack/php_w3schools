<?php
$xmlDoc = new DOMDocument();
$xmlDoc->load("node.xml");
print $xmlDoc->saveXML();
?>
