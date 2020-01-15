<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>ChickenMan</title>
</head>
<body>
    <? php
    //CLASSES
        class NewClass {
            //properties and methods go here
        }
    //Example

    class Fruit {
  // Properties
        public $name;
        public $color;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}

 
class MyClass
{
  public $prop1 = "I'm a class property!";
 
  public function setProperty($newval)
  {
      $this->prop1 = $newval;
  }
 
  public function getProperty()
  {
      return $this->prop1 . "<br />";
  }
}
 
// Create two objects
$obj = new MyClass;
$obj2 = new MyClass;
 
// Get the value of $prop1 from both objects
echo $obj->getProperty();
echo $obj2->getProperty();
 
// Set new values for both objects
$obj->setProperty("I'm a new property value!");
$obj2->setProperty("I belong to the second instance!");
 
// Output both objects' $prop1 value
echo $obj->getProperty();
echo $obj2->getProperty();

//Interfaces
interface paymentInterface
{
    public function payNow();
}
Class Paypal implements paymentInterface {
Public function payNow()  {}
}
Class Visa implements paymentInterface {
Public function payNow()  {}
}
Class Cash implements paymentInterface {
Public function payNow()  {}
}
Class BuyProduct {
   public function pay(PaymentInterface $paymentType)
   $paymentType->payNow();
}
}
$paymentType = new Cash();
$buyProduct = new BuyProduct();
$buyProduct->pay($paymentType);

//Traits

Trait Hello {
	public function hello() {
		echo "Hello";
	}
}
Trait World {
	public function world() {
		echo "World";
	}
}
class MyClass {
	use Hello, World;
}
$obj = new MyClass();
$obj -> hello();
$obj -> world();
/*
above, we declared two traits, Hello and World.
Then we created our class, MyClass
By using two traits in the class, all the methods in traits will be available in the class.
Therefore, it was possible to call $obj -> hello() and $obj -> world() methods.

*/
//INHERITANCE
class Person {
	public $name;
	public $age;
	public function __construct($name, $age) {
		$this -> name = $name;
		$this -> age = $age;
	}
	public function introduce() {
		echo "My name is {$this -> name}. My age is {$this -> age}";
	}
}
/* Tom is inherited from Person */
class Tom extends Person {
	# __construct() is inherited
	# introduce() is inherited
	public function sayHello() {
		echo "Hello, World <br>";
	}
}
$tom = new Tom('Tom', 29);
$tom -> sayHello();
$tom -> introduce();
</body>
</html>