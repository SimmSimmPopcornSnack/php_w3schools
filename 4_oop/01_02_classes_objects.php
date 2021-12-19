<?php
class Fruit {
    public $name;
}
$apple = new Fruit();
$apple->name = "Apple";

echo $apple->name . "<br>";
var_dump($apple instanceof Fruit);
?>
