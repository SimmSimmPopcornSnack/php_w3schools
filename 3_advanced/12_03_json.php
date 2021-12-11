<?php
$jsonobj = '{"Peter":35,"Ben":37,"Joe":40}';
var_dump(json_decode($jsonobj));
print "<br>";
$obj = json_decode($jsonobj);
echo $obj->Peter . "<br>";
echo $obj->Ben . "<br>";
echo $obj->Joe . "<br>";

print "<br>";
foreach($obj as $key => $value) {
    echo $key . " => " . $value . "<br>";
}
print "<br>";
var_dump(json_decode($jsonobj, true));
print "<br>";
$arr = json_decode($jsonobj, true);
echo $arr["Peter"] . "<br>";
echo $arr["Ben"] . "<br>";
echo $arr["Joe"] . "<br>";
print "<br>";
foreach($arr as $key => $value) {
    echo $key . " => " . $value . "<br>";
}
?>
