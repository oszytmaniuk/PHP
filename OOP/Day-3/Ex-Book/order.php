<?php

class Order {
    protected $_number;
    protected $_date;
    protected $_user;
    protected $_book;

    //constructor:
    public function __construct($_number, $_date)
    {
        $this->_number = $_number;
        $this->_date = $_date;
        $this->_user = array();
        $this->_book = array();

    }

}