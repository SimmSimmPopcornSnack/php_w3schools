<?php
$xmlDoc = new DOMDocument();
$xmlDoc->load("node.xml");

$x = $xmlDoc->documentElement;
foreach($x->childNodes as $item) {
    print $item->nodeName . " = " . $item->nodeValue . "<br>";
}
?>
