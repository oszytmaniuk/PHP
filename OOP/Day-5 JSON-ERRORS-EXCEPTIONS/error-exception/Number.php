<?php


class Number{

    private $_number;

    public function __construct($number)
    {
        $this->_number = $number;
    }

    public function getNumber()
    {
        return $this->_number;
    }
}