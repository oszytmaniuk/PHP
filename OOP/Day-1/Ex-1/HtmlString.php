<?php

class HtmlString{
    //property
    private $string;


    //constractor
    public function __construct($string)
    {
        $this->string = $string;
    }
    //Setter
    public function setString($string)
    {
        $this->string = $string;
    }
    
    //Getter
    public function getString()
    {
        return $this->string;
    }

    //return bold string
    public function getBoldString()
    {
        return '<b>'.$this->getString().'</b>';
    }

    //return italic:
    public function getItalicString ()
    {
        return '<i>'.$this->getString().'<i>';
    }
    public function getItalicBoldString ()
    {
        return '<i>'.$this->getBoldString().'</i>';
    }
}