<?php
 class Animal{
    protected $_legs;
    protected $_color;
    protected $_gender;
    protected $_name;


    public function __construct($legs, $color, $gender, $name)
    {
        $this->_legs=$legs;
        $this->_color=$color;
        $this->_gender=$gender;
        $this->_name=$name;
    }
 }

?>