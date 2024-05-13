<?php


abstract class Shape {
    
    abstract public function calculateArea();
}


class Circle extends Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function calculateArea() {
        return pi() * pow($this->radius, 2);
    }
}


class Rectangle extends Shape {
    private $
num2..
  <?php


namespace MyNamespace;


class MyClass {
    public function sayHello() {
        echo "Hello from MyClass!\n";
    }
}


function myFunction() {
    echo "Hello from myFunction!\n";
}


const MY_CONSTANT = "Hello from MyNamespace!\n";

echo "Usage outside the namespace:\n";
$object = new MyClass(); 
$object->sayHello(); 
myFunction(); 
echo MY_CONSTANT; 

echo "\nUsage within the namespace:\n";
$object = new \MyNamespace\MyClass();
$object->sayHello();
\MyNamespace\myFunction();
echo \MyNamespace\MY_CONSTANT;

?>
num 3..
<?php


class Animal {
  
    public function makeSound() {
        echo "Animal makes a generic sound.\n";
    }
}


class Dog extends Animal {
    
    public function makeSound() {
        echo "Dog barks.\n";
    }

    
    public function makeSoundWithArgument($sound = null) {
        if ($sound) {
            echo "Dog makes the sound: $sound.\n";
        } else {
            echo "Dog makes a generic sound.\n";
        }
    }
}


$dog = new Dog();


echo "Function Overriding:\n";
$dog->makeSound(); 
echo "\n";

echo "Function Overloading:\n";
$dog->makeSoundWithArgument(); 
$dog->makeSoundWithArgument("Woof");

?>
num4..
1.Steep Learning Curve: Understanding and mastering OOP concepts such as classes, objects, inheritance, polymorphism, and encapsulation can be challenging for beginners.

2.Performance Overhead: OOP can introduce performance overhead due to the abstraction layers involved, such as method dispatching and memory allocation for objects.

3.Memory Consumption: Objects in OOP tend to consume more memory than simple data structures, especially when dealing with large numbers of objects.
