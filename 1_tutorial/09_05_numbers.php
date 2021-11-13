<?php
$x = 5465;
var_dump(is_numeric($x));
print "<br>";
print is_numeric($x);
print "<br>";
$x = "5465";
var_dump(is_numeric($x));
print "<br>";
$x = "54.65" + 100;
var_dump(is_numeric($x));
print "<br>";
$x = "Hello";
var_dump(is_numeric($x));
print "<br>";
?>
