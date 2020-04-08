<?php

class Bankacc {
    protected $_accnumber;
    protected $_amount;
    protected $_limit;


    //constructor:
    public function __construct($amount)
    {
        $this->_accnumber = 1234567;
        $this->_amount = $amount;
        $this->_limit = 1000;
    }

    //withdrawal:
    public function withdrawal($moneyout){
        if($this->_amount >= $moneyout && $moneyout<=$this->_limit){
            $newAmount=$this->_amount-$moneyout;
            $this->_amount = $newAmount;
            return 'Withdrowal time is: '.Log::display() . '<br>Withdrowal amount is: <b>'.$moneyout.' EUR</b><br><hr>';
        } else{
            return 'Withodrawal is not allowed -'.$this->_limit.' (limit) is less than '.$moneyout.'(moneyout).';
        }
    }

    //deposit:
    public function deposit($moneyin){
        $this->_amount+=$moneyin;
        return 'Deposit time is: '.Log::display() . '<br>Deposit amount is: <b>'.$moneyin.' EUR';
    }


}

