<?php
class ClassName {
    //Varibles are called properties and functions are called methods here
    
}
$my_classes = get_declared_classes();
$n = 1;
foreach ($my_classes as $class) {
	echo $n .'. '. $class . '<br />';
	$n++;
}