<?php
class Cars {
    //Varibles are called properties and functions are called methods here
    public $public_property = 2;
    private $private_property = 4;
    protected $protected_property = 6;

    function get_values() {
	    echo $this -> private_property;
    }

    function set_values() {
	    $this -> private_property = 10;
    }

}

$bmw = new Cars();
$bmw -> set_values();
$bmw -> get_values();