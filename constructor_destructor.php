<?php
class ClassName {
    //Varibles are called properties and functions are called methods here
    public $public_property = 2;
    static $static_property = 4;

    function __construct() {
    	echo $this -> public_property;
    	echo '<br />';
    	echo self :: $static_property++;
    }

    function __destruct() {
    	echo self :: $static_property--;
    }

}

$bmw = new ClassName();
$bmw1 = new ClassName();
$bmw2 = new ClassName();
