<?php
// Question 1: Basic Class and Object
class Car {
    public $brand;
    public $color;

    public function __construct($brand, $color) {
        $this->brand = $brand;
        $this->color = $color;
    }

    public function getInfo() {
        return "Brand: {$this->brand}, Color: {$this->color}";
    }
}

// Create an object of Car
$car1 = new Car("Toyota", "Red");
echo $car1->getInfo();  // Output: Brand: Toyota, Color: Red

echo "<br>";

// Question 2: Inheritance
class ElectricCar extends Car {
    public $batteryRange;

    public function __construct($brand, $color, $batteryRange) {
        parent::__construct($brand, $color);
        $this->batteryRange = $batteryRange;
    }

    public function getInfo() {
        return parent::getInfo() . ", Battery Range: {$this->batteryRange} miles";
    }
}

// Create an object of ElectricCar
$eCar = new ElectricCar("Tesla", "Black", 300);
echo $eCar->getInfo();  // Output: Brand: Tesla, Color: Black, Battery Range: 300 miles

echo "<br>";

// Question 3: Static Methods and Properties
class User {
    public static $count = 0;

    public function __construct() {
        self::$count++;
    }

    public static function getUserCount() {
        return self::$count;
    }
}

// Create multiple User objects
$user1 = new User();
$user2 = new User();
$user3 = new User();

echo "Total Users: " . User::getUserCount();  // Output: Total Users: 3
?>
