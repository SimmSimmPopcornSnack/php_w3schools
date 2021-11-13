<?php
echo strlen("Hello world!"); // retuns 12
echo "<br>";
echo strlen("こんにちは"); // retuns 15, looks like retunrs 3xletters
echo "<br>";
echo mb_strlen("こんにちは"); // retuns 5
echo "<br>";
echo strlen("しろ"); // retuns 6, looks like retunrs 3xletters
echo "<br>";
echo mb_strlen("しろ"); // retuns 2
?>
