<?php
// Create class and define $name and $model
class Car{

	public $name = 'Bentley';
	public $model = 'Continental GT';
}

$car = new Car(); 

// this function uses Object type parameter and returning name and model from the Car class object.

function getCarName(Object $arg){
		
	$message = "Car is ".$arg->name.$arg->model;
	
	return $message;
}

echo getCarName($car);

?>
