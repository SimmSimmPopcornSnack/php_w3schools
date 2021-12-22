<?php
class pi {
    public static $value = 3.14159;
    public function staticValue() {
        return self::$value;
    }
}
class x extends pi {
    public function xStatic() {
        return parent::$value;
    }
}
echo pi::$value . "<br>";
$pi = new pi();
echo $pi->staticValue() . "<br>";
echo x::$value . "<br>";
$x = new x();
echo $x->xStatic();
?>
