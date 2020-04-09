<?php


class User implements JsonSerializable{
    private $_name;
    private $_email;


    public function __construct($name, $email)
    {
        $this->_name = $name;
        $this->_email = $email;
    }

    public function getName(){
        return $this->_name;
    }

    public function getEmail(){
        return $this->_email;
    }

    //defining what property to return
    public function jsonSerialize()
    {
        return[
            "name" => $this->_name,
            "email" => $this->_email
        ];
    }

}