<?php
class Cars {
    //Varibles are called properties and functions are called methods here
    public $public_property = 2;
    private $private_property = 4;
    protected $protected_property = 6;

    function car_detail() {
    	echo $this -> public_property;
	    echo $this -> private_property;
	    echo $this -> protected_property;
    }

}

$bmw = new Cars();
echo $bmw -> public_property;
//echo $bmw -> private_property;
//echo $bmw -> protected_property;

$bmw -> car_detail();