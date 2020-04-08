<?php
include_once 'book.php';

class Author{
    protected $_name;
    protected $_gender;
    protected $_dofb;
    //protected $_book;


    //constructor:
    public function __construct($name, $gender, $dofb)
    {
        $this->_name = $name;
        $this->_gender = $gender;
        $this->_dofb = $dofb;
        //$this->_book = array();
    }

   



}