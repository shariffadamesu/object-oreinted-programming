<?php

// Functional Programming Example
function calculateSquare($num) {
    return $num * $num;
}

echo "Functional Programming Example: " . calculateSquare(5) . "\n";


// Procedural Programming Example
function calculateSquareProcedural($num) {
    return $num * $num;
}

echo "Procedural Programming Example: " . calculateSquareProcedural(5) . "\n";


// Object-Oriented Programming Example
class Calculator {
    private $num;

    public function __construct($num) {
        $this->num = $num;
    }

    public function calculateSquare() {
        return $this->num * $this->num;
    }
}




num2.
  +----------------------------------+
|         Object (Instance)        |
| +------------------------------+ |
| |         Properties           | |
| |                              | |
| |  - Property 1                | |
| |  - Property 2                | |
| |  - ...                       | |
| +------------------------------+ |
|                                  |
| +------------------------------+ |
| |        Methods (Functions)   | |
| |                              | |
| |  - Method 1                  | |
| |  - Method 2                  | |
| |  - ...                       | |
| +------------------------------+ |
+----------------------------------+
                ^
                |
+---------------|------------------+
|               v                  |
|           Class                  |
| +------------------------------+ |
| |       Properties             | |
| |                              | |
| |  - Property 1                | |
| |  - Property 2                | |
| |  - ...                       | |
| +------------------------------+ |
|                                  |
| +------------------------------+ |
| |        Methods (Functions)   | |
| |                              | |
| |  - Method 1                  | |
| |  - Method 2                  | |
| |  - ...                       | |
| +------------------------------+ |
+----------------------------------+

  num3..
  <?php

class Fruit {
    private $name;
    private $color;

    // Method to set the name of the fruit
    public function set_name($name) {
        $this->name = $name;
    }

    // Method to get the name of the fruit
    public function get_name() {
        return $this->name;
    }

    // Method to set the color of the fruit
    public function set_color($color) {
        $this->color = $color;
    }

    // Method to get the color of the fruit
    public function get_color() {
        return $this->color;
    }
}

// Instantiating the Fruit class with four different fruits
$apple = new Fruit();
$apple->set_name("Apple");
$apple->set_color("Red");

$banana = new Fruit();
$banana->set_name("Banana");
$banana->set_color("Yellow");

$orange = new Fruit();
$orange->set_name("Orange");
$orange->set_color("Orange");

$mango = new Fruit();
$mango->set_name("Mango");
$mango->set_color("Yellow");

// Printing the name and color of each fruit
echo "Name: " . $apple->get_name() . ", Color: " . $apple->get_color() . "\n";
echo "Name: " . $banana->get_name() . ", Color: " . $banana->get_color() . "\n";
echo "Name: " . $orange->get_name() . ", Color: " . $orange->get_color() . "\n";
echo "Name: " . $mango->get_name() . ", Color: " . $mango->get_color() . "\n";

?>

$calculator = new Calculator(5);
echo "Object-Oriented Programming Example: " . $calculator->
