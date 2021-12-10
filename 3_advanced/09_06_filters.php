<?php
// $url = "https://www.w3schools.com"; // valid
// $url = "https:///www.w3schools.com"; // invalid
// $url = "https:///www.w3schools.//com"; // invalid
// remove all illegal characters
$url = filter_var($url, FILTER_SANITIZE_URL);
// validation
if(filter_var($url, FILTER_VALIDATE_URL) !== false) {
    echo "valid URL";
} else {
    echo "invalid URL";
}
