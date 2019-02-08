<?php
class ClassName {
    //Varibles are called properties and functions are called methods here
    public $public_property = 2;
    private $private_property = 4;
    protected $protected_property = 6;

    static $static_property = 8;
    static $secend_property = 16;

    function public_method() {
    	echo $this -> public_property;
	    echo $this -> private_property;
	    echo $this -> protected_property;
    }

    static function static_method() {
    	//Need static_property
    	echo ClassName :: $static_property;
	    echo ClassName :: $secend_property;
    }

}

echo ClassName :: $static_property;
echo ClassName :: static_method();
$bmw = new ClassName();
echo $bmw -> public_property;
//echo $bmw -> private_property;
//echo $bmw -> protected_property;

//$bmw -> public_method();
