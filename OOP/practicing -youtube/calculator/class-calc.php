<?php

class Calc{
    public $_operator;
    public $_num1;
    public $_num2;

    public function __construct(string $operator, int $num1, int $num2)
    {
        $this->_operator = $operator;
        $this->_num1 = $num1;
        $this->_num2 = $num2;

    }

    public function calculator(){
        switch ($this->_operator) {
            case 'add':
                $results = $this->_num1 + $this->_num2;
                return $results;
                break;  
            case 'sub':
                $results = $this->_num1 - $this->_num2;
                return $results;
                break;  
            case 'div':
                $results = $this->_num1 / $this->_num2;
                return $results;
                break;  
            case 'mul':
                $results = $this->_num1 * $this->_num2;
                return $results;
                break; 
            default:
            echo "Error";
            break; 
          
        }
    }
}