<?php
$x = true; $y = false;
var_dump($x and $y); print "<br>"; // false
var_dump($x or $y); print "<br>"; // true
var_dump($x xor $y); print "<br>"; // true
var_dump($x && $y); print "<br>"; // false
var_dump($x || $y); print "<br>"; // true
var_dump(!$x); print "<br>"; // false
$x = "abc"; $y = "def";
print $x . $y . "<br>";
$x .= $y; print $x . "<br>";
?>
