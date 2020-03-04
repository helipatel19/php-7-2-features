<?php
    
    // create Product interface and define calculateProductPrice to count product price
    interface Product
    {
        public function calculateProductPrice(float $productPrice, int $quanity);
    }

    // Customer class implementing Product interface and using calculateProductPrice method 
    // we have omitted parameter type
    class Customer implements Product
    {
        // type omitted for $price and $quantity
    
        public function calculateProductPrice($price,$quanity){ 
            $total = $price * $quanity ;
            return $total;
        }
    } 

    $customer = new Customer();
    
    echo "total price is: ". $customer->calculateProductPrice(100,5);

?>
