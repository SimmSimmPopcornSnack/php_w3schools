<?php
$int = 100;
// $int = "hello";
// $int = 0;
// if(filter_var($int, FILTER_VALIDATE_INT) || filter_var($int, FILTER_VALIDATE_INT) == 0) {
if(filter_var($int, FILTER_VALIDATE_INT) !== false) { // best solution, always works even for $int = 0
    echo ("Integer is valid");
} else {
    echo("Integer is invalid");
}

$result1 = filter_var(100, FILTER_VALIDATE_INT);
$result2 = filter_var(0, FILTER_VALIDATE_INT);
$result3 = filter_var("100", FILTER_VALIDATE_INT);
$result4 = filter_var("hi", FILTER_VALIDATE_INT);
$result5 = filter_var(true, FILTER_VALIDATE_INT);
$result6 = filter_var(false, FILTER_VALIDATE_INT);
$result7 = filter_var(3.14159, FILTER_VALIDATE_INT);
$result8 = filter_var(100.00, FILTER_VALIDATE_INT);

print($result1);echo "<br>"; // 100
print($result2);echo "<br>"; // 0
print($result3);echo "<br>"; // 100
print($result4);echo "<br>"; // false
print($result5);echo "<br>"; // 1
print($result6);echo "<br>"; // false
print($result7);echo "<br>"; // false
print($result8);echo "<br>"; // 100
echo "finished";
