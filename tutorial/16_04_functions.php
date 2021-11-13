<?php
function addNumbers(int $a, int $b) {
    return $a + $b;
}
echo addNumbers(5, "5 days"); // complains "5 days" is not integer in PHP8
?>
