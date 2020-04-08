<?php 

class HtmlString {
    // Property 
    private $_string;

    // Constructor
    public function __construct($string) {
        $this->_string = $string;
    }

    // Methods
    public function setString($string) {
        $this->_string = $string;
    }

    public function getString() {
        return $this->_string;
    }

    public function getBoldString() {
        return '<b>' . $this->getString() . '</b>';
    }

    public function getItalicString() {
        return '<i>' . $this->getString() . '</i>';
    }

    public function getItalicBoldString() {
        return '<i>' . $this->getBoldString() . '</i>';
    }


}