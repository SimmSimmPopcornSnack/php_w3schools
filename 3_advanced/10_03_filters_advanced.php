<?php
// $url = "https://www.w3schools.com";
$url = "https://www.w3schools.com/?a=g";
if(filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) !== false) {
    echo "valid url with a query string";
} else {
    echo "invalida url or valid url without a query string";
}
