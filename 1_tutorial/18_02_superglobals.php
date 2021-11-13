<?php
echo $_SERVER['PHP_SELF'] . "<br>";
if(isset($_SERVER["GATEWAY_INTERFACE"])) { // GATEWAY_INTERFACE is but not always set
    echo $_SERVER['GATEWAY_INTERFACE'] . "<br>";
}
if(isset($_SERVER["SERVER_ADDR"])) { // SERVER_ADDR is but not always set
    echo $_SERVER['SERVER_ADDR'] . "<br>";
}
echo $_SERVER['SERVER_NAME'] . "<br>";
echo $_SERVER['SERVER_PROTOCOL'] . "<br>";
echo $_SERVER['SERVER_SOFTWARE'] . "<br>";
echo $_SERVER['REQUEST_METHOD'] . "<br>";
echo $_SERVER['REQUEST_TIME'] . "<br>";
if(isset($_SERVER["QUERY_STRING"])) { // if user does not add QUERY_STRING, QUERY_STRING is set
    echo $_SERVER['QUERY_STRING'] . "<br>";
}
echo $_SERVER["HTTP_ACCEPT"] . "<br>";
if(isset($_SERVER["HTTP_ACCEPT_CHARSET"])) { // HTTP_ACCEPT_CHARSET is but not always set
    echo $_SERVER["HTTP_ACCEPT_CHARSET"] . "<br>";
}
echo $_SERVER["HTTP_HOST"] . "<br>";
if(isset($_SERVER["HTTP_REFERER"])) { // HTTP_REFERER is set by user agent, but not always set
    echo $_SERVER["HTTP_REFERER"] . "<br>";
}
echo $_SERVER["HTTP_USER_AGENT"] . "<br>";
if(isset($_SERVER["HTTPS"])) { // HTTPS is not always set
    echo $_SERVER["HTTPS"] . "<br>";
}
echo $_SERVER["REMOTE_ADDR"] . "<br>";
if(isset($_SERVER["REMOTE_HOST"])) { // REMOTE_HOST is not always set
    echo $_SERVER["REMOTE_HOST"] . "<br>";
}
echo $_SERVER["REMOTE_PORT"] . "<br>";
echo $_SERVER["SCRIPT_FILENAME"] . "<br>";
echo $_SERVER["SCRIPT_NAME"] . "<br>";
if(isset($_SERVER["SCRIPT_URI"])) { // SCRIPT_URI is not always set
    echo $_SERVER["SCRIPT_URI"] . "<br>";
}
if(isset($_SERVER["SERVER_ADMIN"])) { // SERVER_ADMIN is not always set
    echo $_SERVER["SERVER_ADMIN"] . "<br>";
}
echo $_SERVER["SERVER_PORT"] . "<br>";
if(isset($_SERVER["SERVER_SIGNATURE"])) { // SERVER_SIGNATURE is not always set
    echo $_SERVER["SERVER_SIGNATURE"] . "<br>";
}
if(isset($_SERVER["PATH_TRANSLATED"])) { // PATH_TRANSLATED is not always set
    echo $_SERVER["PATH_TRANSLATED"] . "<br>";
}
?>
