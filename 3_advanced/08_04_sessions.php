<?php
session_start();
$_SESSION["favcolor"] = "yellow";
?>

<!DOCTYPE html>
<html>
    <body>
        <?php
        print_r($_SESSION);
        ?>
    </bodu>
</html>
