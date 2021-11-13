<?php
$age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);
$ages["Peter"]=35;
$ages["Ben"]=37;
$ages["Joe"]=43;
var_dump( $age === $ages);
print "<br>";
echo "Peter is " . $age["Peter"] . " years old.<br>";

foreach($age as $x => $x_value) {
    echo "Key = " . $x . ", Value = " . $x_value;
    echo "<br>";
}
?>
