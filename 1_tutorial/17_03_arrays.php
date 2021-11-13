<?php
$cars = array (
    array("Volvo", 22, 10),
    array("BMW", 15, 13),
    array("Saab", 5, 2),
    array("Land Rover", 17, 15)
);
for($x = 0; $x < count($cars); ++$x) {
    echo $cars[$x][0].": In stock: ".$cars[$x][1].", sold: ".$cars[$x][2].".<br>";
}
print "<br>";
for($row = 0; $row < 4; ++$row) {
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";
    for($col = 0; $col < 3; ++$col) {
        echo "<li>".$cars[$row][$col]."</li>";
    }
    echo "</ul>";
}
?>
