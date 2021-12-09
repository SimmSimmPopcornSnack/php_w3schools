<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <body>
        <?php
        echo "Favorite colour is " . $_SESSION["favcolor"] . ".<br>";
        echo "Favorite animal is " . $_SESSION["favanimal"] . ".<br>";
        ?>
    </body>
</html>
