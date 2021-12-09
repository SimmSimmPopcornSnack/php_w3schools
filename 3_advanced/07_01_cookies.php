<?php
$cookie_name = "user";
$cookir_value = "John Doe";
setcookie($cookie_name, $cookir_value, time() + (24*60*60 * 30), "/");
?>

<html>
    <body>
        <?php
        if(!isset($_COOKIE[$cookie_name])) {
            echo "Cookie named '" . $cookie_name . "' is not set.";
        } else {
            echo "Cookie '" . $cookie_name . "' is set.<br>";
            echo "Value is " . $_COOKIE[$cookie_name];
        }
        ?>
    </body>
</html>
