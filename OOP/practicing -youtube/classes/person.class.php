<?php

class Person{
    //Properties
    private $_name;
    private $_eyeColor;
    private $_age;
    
    //static method:

    public static $drinkingAge = 21;
        //construct -> will start at the very beginning
    public function __construct($name, $eyeColor, $age)
    {
        $this->_name = $name;
        $this->_eyeColor = $eyeColor;
        $this->_age = $age;
    }

    //Methods
    public function setName($name){
        $this->_name = $name;
    }

    //
    public function getDA(){
        return self::$drinkingAge;
    }
 //setting a static method:
    public static function setDrinkingAge($newDA){
        self::$drinkingAge = $newDA;
    }
}