<?php
echo strrev("Hello world!"); // outputs !dlrow olleH
echo "<br>";
echo strrev("こんにちは"); // garbled output, no mb_strrev for multi-byte character
?>

