<?php

class Client extends Bankacc{
    protected $_name;
    protected $_gender;
    protected $_address;

    public function __construct($name, $gender, $address)
    {
        parent:: __construct(2550);
        $this->_name = $name;
        $this->_gender=$gender;
        $this->_address = $address;
    }
}
