<?php
// create Product Interface and function to calculate product price
interface Product
{
    public function calculateProductPrice(int $productPrice, int $quanity);
}

// customer class is implementing Product Interface and calculateProductPrice method 
// calculateProductPrice ommited the type int.
class Customer implements Product
{
	// type omitted for $price and $quantity		
    	public function calculateProductPrice($price,$quanity){ 
		$total = $price * $quanity ;
		return $total;
	}
} 

$customer = new Customer();

// here we have passed float value and will not throw fatal error
echo "total price is: ". $customer->calculateProductPrice(100.5,5);


?>
