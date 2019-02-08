<?php
class Cars {
    //Varibles are called properties and functions are called methods here
    var $wheel_count = 4;
    var $door_count = 4;
    function car_detail () {
    	return 'This car has ' . $this -> wheel_count . ' wheels.';
    }
}

$bmw = new Cars();
$mercedes = new Cars();

echo $bmw -> wheel_count = 10;
echo '<br />';
echo $mercedes -> wheel_count;
echo '<br />';

echo $mercedes -> car_detail ();
echo '<br />';
echo $bmw -> car_detail ();