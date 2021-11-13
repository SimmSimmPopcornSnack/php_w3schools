<?php
echo(abs(-6.7)) . "<br>";
echo sqrt(64) . "<br>";
echo round(0.6) . "<br>";
var_dump(round(0.6));
echo "<br>";
echo round(0.49) . "<br>";
var_dump(round(0.49));
echo "<br>";
echo rand(); // integer between 0 and getrandmax();
echo "<br>";
echo "getrandmax: " . getrandmax();
echo "<br>";
echo rand(10, 100); // integer between 10 and 100;
echo "<br>";
echo rand() / getrandmax(); // float between 0.0 and 1.0;
echo "<br>";
echo (int)1  /(int)3; // retunrs float even denominator and nominator are integeters;
?>
