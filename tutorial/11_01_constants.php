<?php
define("GREETING", "Welcome to W3Schools.com");
echo GREETING;
// define("GREETING", "Welcome to W3Schools.com", true); // error, cannot overwrite
// echo greeting;

// error, actually case-insensitive constant is no longer supported in PHP >= 7.3.0
// define("GREETING2", "Welcome to W3Schools.com", true);
// echo greeting2;

print "<br>";
define("cars", [
    "Alfa Romeo",
    "BMV",
    "Toyota"
]);
print cars[0];

?>
