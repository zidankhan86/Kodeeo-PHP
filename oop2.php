
<?php

use Animal as GlobalAnimal;

abstract class Animal {
    protected $name;
    
    public function __construct($name) {
        $this->name = $name;
    }
    
    public function speak() {
        echo "The " . static::class . " says something. \n";
    }
    
    abstract public function move();
}

class Dog extends Animal {
    public function move() {
        echo $this->name . " runs. \n";
    }
}

class Cat extends Animal {
    public function move() {
        echo $this->name . " jumps. \n";
    }
}


