<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <body>
        <?php
        print_r($_SESSION);
        echo "<br>";
        session_unset();
        print_r($_SESSION);
        echo "<br>";
        session_destroy();
        print_r($_SESSION);
        ?>
    </body>
</html>
