<?php
$cars = ["Volvo", "BMW", "Toyota"];
// $cars = array("Volvo", "BMW", "Toyota"); // both are ok
print_r($cars); print("<br>");
sort($cars); // input and output are both $cars
print_r($cars); print("<br>");
rsort($cars); // input and output are both $cars
print_r($cars); print("<br>");
print "<br>";

// $numbers = [4, 6, 2, 22, 11];
$numbers = array(4, 6, 2, 22, 11);
print_r($numbers); print("<br>");
sort($numbers);
print_r($numbers); print("<br>");
rsort($numbers);
print_r($numbers); print("<br>");
print "<br>";

$age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);
print_r($age); print("<br>");
asort($age);
print_r($age); print("<br>");
arsort($age);
print_r($age); print("<br>");
ksort($age);
print_r($age); print("<br>");
krsort($age);
print_r($age); print("<br>");
?>
