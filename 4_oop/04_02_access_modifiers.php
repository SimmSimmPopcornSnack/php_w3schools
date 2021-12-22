<?php
class Fruit {
    public $name;
    public $color;
    public $weight;

    function set_name($n) {
        $this->name = $n;
    }
    protected function set_color($c) {
        $this->color = $c;
    }
    private function set_weight($w) {
        $this->weight = $w;
    }
}

$mango = new Fruit();
$mango->set_name("Mango"); // OK
$mango->set_color("yellow"); // ERROR
$mango->set_weight("300"); // ERROR
