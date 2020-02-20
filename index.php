<?php

interface Product
{
    public function calculateProductPrice(int $productPrice, int $quanity);
}

class Customer implements Product
{
	// type omitted for $price and $quantity		
    public function calculateProductPrice($price,$quanity){ 
    	$total = $price * $quanity ;
    	return $total;
	}
} 

$customer = new Customer();

echo "total price is: ". $customer->calculateProductPrice(100.5,5);


?>
