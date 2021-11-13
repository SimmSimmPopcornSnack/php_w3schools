<?php
$t = date("H");
echo "hour: $t<br>";

if ($t < "10") {
    echo "Have a good morning!";
} elseif ($t < "20") {
    echo "Have a nice day!";
} else {
    echo "Have a good night!";
}

?>
