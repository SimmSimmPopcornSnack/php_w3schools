<?php
echo str_word_count("Hello world!"); // outputs 2
echo "<br>";
echo str_word_count("こんにちは"); // outputs 0, not recognize two byte letters?
echo "<br>";
echo mb_strlen("こんにちは"); // outputs 5
echo "<br>";
echo str_word_count("こんに ちは"); // outputs 0, not recognize two byte letters either?
echo "<br>";
echo mb_strlen("こんに ちは"); // outputs 6
?>
