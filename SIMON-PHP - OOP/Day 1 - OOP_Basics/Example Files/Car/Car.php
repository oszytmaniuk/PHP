<?php

// Define a class 
class Car {
    // Declare properties
    private $color;
    public $manufacturer;
    public $category;

    // Constructor allow you to initialize certain porperties when creating an object
    public function __construct($c, $manufacturer, $category) {
        
        $this->setColor($c);
        // this keyword refers to the instance of the class (the object)
        $this->manufacturer = $manufacturer;
        $this->category = $category;
    } 

    // Declare methods
    public function makeSound() {
        echo 'Vroom Vroom';
    }

    // Setter (to set a property)
    public function setColor($newColor) {
        if(strlen($newColor)>=4)
            $this->color = $newColor;
    }

    // Getter (to get the value of a property)
    public function getColor() {
        return $this->color;
    }

    // toString method
    public function __toString() {
        return 'Car : ' .
        '<br>- Color : ' . $this->color .
        '<br>- Manufacturer : ' . $this->manufacturer .
        '<br>- Category : ' . $this->category; 
    }
}

?>