## PHP 7.2.0 FEATURES

PHP development team has introduced new features and improvements by releasing a new version of php 7.2.0.

Let's take a look at several major features of php 7.2.0.!

1. New object type
2. Abstract method overriding
3. Parameter type widening
4. trailing comma for grouped namespaces
5. Enhancements to the EXIF extension
6. Libsodium extension
7. Password hashing with Argon2

Kindly take a note that some features are deprecated in PHP 7.2.0 version.

Below are the few deprecated methods in php 7.2.0.

1. __autoload() method
2. png2wbmp() and jpeg2wbmp() functions
3. create_function() function.

Let's deep dive into the php 7.2.0 features.

To illustrate, consider few examples to perceive more knowledge of php 7.2 features.!

### New object type

PHP has introduced a new type Object, which can be used for (contravariant) parameter typing and (covariant) return typing of any objects.

In the example below getCarName() function is using Object type parameter and returning name and model from the Car class object.

    class Car{
    
        public $name = 'Bentley';
        public $model = 'Continental GT';
    }
    
    function getCarName(Object $arg){ // Object type is used as parameter type
            
        $message = "The Car is ".$arg->name.$arg->model; 
        
        return $message;
    }

    $car = new Car(); 
    echo getCarName($car);
    
    Output:-
    
    The car is Bantley Continental GT.

### Abstract method overriding

In the earlier version of php, it was not possible to override abstract methods 
when it extends another abstract class. now, php has facilitated us to override abstract methods when it extends another abstract class..!

    abstract class Calculator{
        
        abstract function calculateSum(int $a, int $b);
    }
    
    abstract class Phone extends Calculator{
        
        abstract function calculateSum($a,$b) :float;
    }

### Parameter type widening

In addition to this, we may omit parameter types from the overriden methods and even from interfaces implementations.

As an evidence,look at the example below. Here,we have declared parameter type in the calculateProductPrice() method of the Product interface.The Customer class implements the Product interfce. As you can see, parameter type is omitted in the calculateProductPrice() method of Customer class. Infact, the value of $productPrice is integer instead of float and still it works.! 

Note:- In the previous versions, it would throw a fatal error that calculateProductPrice($price, $quanity) must be compatible with Product::calculateProductPrice(float $productPrice, int $quanity) for the same example. 

    interface Product
    {
        public function calculateProductPrice(float $productPrice, int $quanity);
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
    
    echo "total price is: ". $customer->calculateProductPrice(100,5);

    output:-

    total price is: 500

### Trailing comma for grouped namespaces

It has become more facile to write group-use Syntax as we can use trailing comma from now for grouped namespaces such as trait and interface implementation etc.

	use Foo\Bar\{
	    Foo,
	    Bar,
	    Baz,
	};

### Enhancements to the EXIF extension

Furthermore, it will be a piece of cake to work with image metadata as The EXIF extension has been updated to support a much larger range of formats. This means that their format specific tags are now properly translated when parsing images with the exif_read_data() function. 

The following new formats are now supported:

- Samsung
- DJI
- Panasonic
- Sony
- Pentax
- Minolta
- Sigma/Foveon
- AGFA
- Kyocera
- Ricoh
- Epson

### Libsodium Extension

The modern Sodium cryptography library has now become a core extension in PHP. 

- Sodium is a new, easy-to-use software library for encryption, decryption, signatures, password hashing and more. 

- It is a portable, cross-compilable, installable, packageable fork of NaCl, with a compatible API, and an extended API to improve usability even further.

- It's goal is to provide all of the core operations needed to build higher-level cryptographic tools.

### Password hashing with Argon2

 The password hashing API has been enhanced with the Argon2 hash which is a modern algorithm for securely hashing passwords. Argon2 comes in two distinct flavors, Argon2i and Argon2d.  Unlike Bcrypt, which just takes a single cost factor, Argon2 is parameterized by three distinct factors.

 password hashing API has exposed following constants:

	PASSWORD_ARGON2I
	PASSWORD_ARGON2_DEFAULT_MEMORY_COST
	PASSWORD_ARGON2_DEFAULT_TIME_COST
	PASSWORD_ARGON2_DEFAULT_THREADS

 	// Argon2i with default cost factors
	password_hash('password', PASSWORD_ARGON2I);

### Core Improvements

In excession to this, php 7.2 has extended string types of PDO, provided support for extended operations in LDAP, introduced new features in PCRE and many more changes are done.

# php-7-2-features
