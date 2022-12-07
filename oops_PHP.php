<?php
class Fruit {
    public $name;
    public $color;
    public $taste;
    function set_name($name){
        $this->name = $name;
    }
    function get_name(){
        return $this->name;
    }
    function set_color($color){
        $this->color = $color;
    }
    function get_color(){
        return $this->color;
    }
    function set_taste($taste){
        $this->taste = $taste;
    }
    function get_taste(){
        return $this->taste;
    }
}

$apple = new Fruit();
$apple->set_name('Apple');
$apple->set_color('Red');
$apple->set_taste('Sweet');
$banana = new Fruit();
$banana->set_name("Banana");
$banana->set_color('Yellow');
$banana->set_taste('Too_Sweet');
$orange = new Fruit();
$orange->set_name('Orange');
$orange->set_color('Saffron');
$orange->set_taste("Sour");

echo $apple->get_name() ." ". $apple->get_color()." ". $apple->get_taste();
echo "<br/>";
echo $banana->get_name()." ".$banana->get_color()." ". $banana->get_taste();
echo "<br/>";
echo $orange->get_name()." ".$orange->get_color()." ". $orange->get_taste();
echo "<br/><br/>";
var_dump($apple instanceof Fruit);
echo "<br/>";
print_r($apple instanceof Fruit);
echo "<br/>".$apple instanceof Fruit;
?>