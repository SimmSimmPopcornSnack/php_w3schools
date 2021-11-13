<?php
echo strpos("Hello world!", "world"); // returns 6
echo "<br>";
echo strpos("Hello world!", "Hello"); // returns 0
echo "<br>";
echo strpos("Hello world!", "hello"); // returns 0
echo "<br>";
var_dump( strpos("Hello world!", "hello")); // if not found, returns false
echo "<br>";
echo strpos("こんにちは", "ち"); // returns 9, agian 3x[actual position 3 starting from 0]?
echo "<br>";
echo mb_strpos("こんにちは", "ち"); // returns 9, agian 3x[actual position 3 starting from 0]?
echo "<br>";
?>
