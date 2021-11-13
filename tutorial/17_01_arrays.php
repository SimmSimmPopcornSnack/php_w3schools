<?php
$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . ", and" . $cars[2] . ".<br>";
echo count($cars) . "<br>";
$arrLength = count($cars);
for($x = 0; $x < $arrLength; ++$x) {
    echo $cars[$x];
    echo "<br>";
}

$trains[0] = "kawasaki";
$trains[1] = "mitsubishi";
$trains[2] = "hitachi";
$trains[3] = "siemens";
echo $trains[0] . ", " . $trains[1] . ", " . $trains[2] . ", and " . $trains[3] . "<br>";
?>
