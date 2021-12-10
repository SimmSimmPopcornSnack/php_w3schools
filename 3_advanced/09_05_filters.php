<?php
// $email = "john.doe@example.com";
$email = "john.doe@example.com@com";

// remove all illegal characters from email
$email = filter_var($email, FILTER_SANITIZE_EMAIL);

// validate email address
if(filter_var($email, FILTER_VALIDATE_EMAIL) !== false) {
    echo "valid email address";
} else {
    echo "invalida email address";
}
