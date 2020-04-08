<?php

class User{
    protected $_name;
    protected $_email;
    protected $_age;

    //constructor:
    public function __construct($name, $email, $age)
    {
        $this->_name = $name;
        $this->_email = $email;
        $this->_age = $age;
    }

}