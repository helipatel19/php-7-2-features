<?php

class Car{

	public $name = 'Bentley';
	public $model = 'Continental GT';
}

$b = new Car(); 

function getCarName(Object $arg){
		
	$message = "Car is ".$arg->name.$arg->model;
	
	return $message;
}

echo getCarName($b);

?>
