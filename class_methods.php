<?php
class Cars {
    //Varibles are called properties and functions are called methods here
    function gretting () {

    }
}

$the_methods = get_class_methods('Cars');
$n = 1;
foreach ($the_methods as $method) {
	echo $n .'. '. $method . '<br />';
	$n++;
}