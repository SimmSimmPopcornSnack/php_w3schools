<?php
$xml = simplexml_load_file("books.xml") or die("Error: Cannotcreate object");
foreach($xml->children() as $books) {
    echo $books->title . ", ";
    echo $books->author . ", ";
    echo $books->year . ", ";
    echo $books->prices . "<br>";
}
?>
