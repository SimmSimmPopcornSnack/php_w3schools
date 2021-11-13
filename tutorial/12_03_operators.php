<?php
$x = 4; $y = 4.0;
var_dump($x == $y); print "<br>"; // true
var_dump($x === $y); print "<br>"; // false
var_dump($x != $y); print "<br>"; // false
var_dump($x <> $y); print "<br>"; // false
var_dump($x !== $y); print "<br>"; // true
var_dump($x > $y); print "<br>"; // false
var_dump($x < $y); print "<br>"; // false
var_dump($x >= $y); print "<br>"; // true
var_dump($x <= $y); print "<br>"; // true
var_dump($x <=> $y); print "<br>"; // 0
$x = 4; $y = 7.0;
var_dump($x <=> $y); print "<br>"; // -1
$x = 4; $y = 1.0;
var_dump($x <=> $y); print "<br>"; // 1
?>
