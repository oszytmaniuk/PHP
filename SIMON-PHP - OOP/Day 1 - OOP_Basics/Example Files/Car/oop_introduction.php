<?php

/*

    Object Oriented Programming (OOP)
    OOP is a method/model of programmaing organized aroung real-world objects

    In programming, an object have the same definition as an object of the real world.

    For example, a car have several characteristics :
        - The name of the car
        - The color of the car
        - The name of the manufacturer
        ....
    
    A car can also do several actions :
        - Brake
        - Speed / Accelerate
        - Pull down the window ......


    In progamming, these characteristics we are calling them 'properties'.
    Action are called 'methods'
    !! Until now, you have learned how to program in a 'Procedural' way !!


    - A CLASS -

    In programming, a class is what defines an object.
    It's the blueprint / the mould.

    A class group/defines all the properties and methods of your object.
    A class is not an object !!

    SOME RULES / GOOD PRACTICES :
        - One class can be declare only once (with the same name)
        - One class = One file
        - The name of the file should be the name of the class
        - Capital letter for the first letter on each words :
            HelloWorld / Car / CoffeeMug

    */

    /*
        SCOPE : 
            'public' : specify that the property or method will be accessible from anywhere (in your code)

            'private' : specify that the property or method will only be accessible within the class.

        Encapsulation :
        
        This is to hide the details of the implementation and to expose only methods
    */
    
    // Include the class
    require_once 'Car.php';

    // Create an object : Instance of a class.
    $myCar = new Car('Red', 'Ferrari', 1);
    
    // Access a property of my object
    $myCar->makeSound();
    $myCar->category = 'sport';
    $myCar->setColor('Yellow');
    echo $myCar->getColor();

    echo $myCar;
    var_dump($myCar);

    // I can create as much objects(car) as I want 
    $anotherCar = new Car('Blue', 'BMW', 'SUV');
    var_dump($anotherCar);



