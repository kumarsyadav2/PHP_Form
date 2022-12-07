<?php
class Fruit {
    public $name;
    public $color;
    function __construct($name, $color){
        $this->name = $name;
        $this->color = $color;
    }
    function __destruct(){
        echo "The fruit is {$this->name} and the color is {$this->color}.<br/>";
    }
}

$orange = new Fruit("Orange", "Saffron");
$banana = new Fruit("Banana", "Yellow");
$apple = new Fruit("Apple", "Red");
?>