<?php

/*
    INHERITANCE 

    It's reprensenting a relationship between objects.
    It takes the form of a parent/child relationship.

    The child can use methods/properties defined in the parent.
    The main purpose of inheritance is reusability.

    Many children can inherit the same parent.
    A class can't inherit from many classes (only one).

    -- D.R.Y. : Don't Repeat Yourself --

*/

class Pet {

    protected $_name;
    private $_breed;
    private $_hairColor;

    public function setName($name) {
        $this->_name = $name . '(parent)';
    }

}


class Dog extends Pet {

    public function setName($name) {
        //parent::setName($name);
        // this refers to the object
        $this->_name = $name  . '(child)';
    }

    public function bark() {
        echo "Wooooooof ! ";
    }

}

class Cat extends Pet {

    public function meow() {
        echo "Meooowwwww ! ";
    }

}

