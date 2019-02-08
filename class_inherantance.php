<?php
class Cars {
    //Varibles are called properties and functions are called methods here
    var $wheels = 4;
    function gretting () {
    	return 'Cars';
    }
}
$bmw = new Cars();

class Tracks extends Cars {
	var $wheels = 10;
	var $carrier = '5 Ton'; 
    function gretting () {
    	return 'Tracks';
    }
}

$tacoma = new Tracks();

echo $tacoma -> wheels;
echo '<br />';
echo $tacoma -> carrier;