<?php
// $ip = "127.0.0.1";
$ip = "127.0.0.700";
if(filter_var($ip, FILTER_VALIDATE_IP) !== false) {
    echo "valid IP address";
} else {
    echo "invalid IP address";
}
?>
