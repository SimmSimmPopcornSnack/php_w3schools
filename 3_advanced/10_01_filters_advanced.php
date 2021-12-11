<?php
// $int = 122;
// $int = 262;
$int = -4;
$min = 1;
$max = 200;

if(filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$min, "max_range"=>$max))) !== false) {
    echo "int and within the range";
} else {
    echo "not int or outside the range";
}
?>
