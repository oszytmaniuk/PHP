<?php
namespace Flowers;

class User{

    private $_email;
    private $_id;

    public function __construct($email, $id)
    {
        $this->_email = $email;
        $this->_id = $id;
    }

    public function getMail()
    {
        return $this->_email;
    }

    public function getId()
    {
        return $this->_id;
    }

}
