<?php

namespace Flowers;

class Flower {

    private $_fname;
    private $_fprice;


    public function __construct($fname, $fprice)
    {
        $this->_fname = $fname;
        $this->_fprice = $fprice;
    }

    public function getFlower(){
        return $this->_fname;
    }

    public function getPrice(){
        return $this->_fprice;
    }

}