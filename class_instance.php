<?php
class Cars {
    //Varibles are called properties and functions are called methods here
    function gretting () {
    	echo "Hello World";
    }
}

$bmw = new Cars();
$mercedes = new Cars();

$bmw -> gretting ();