<?php
function divide($numerator, $denominator) { // or dividend vs divisor
    if($denominator == 0) {
        throw new Exception("Division by zero");
    }
    return $numerator / $denominator;
}

try {
    echo divide(5, 0);
} catch (Exception $e) {
    echo "Unable division. ";
} finally {
    echo "Process completed.";
}
?>
