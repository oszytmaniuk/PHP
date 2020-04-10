<?php

class Train{
    private $_id;
    private $_departure_time;
    private $_arrive_time;
    private $_delay;

    //Constractor

    public function __construct($id, $depTime, $arrTime)
    {
        $this->setId($id);
        $this->_departure_time = strtotime($depTime);
        $this->_arrive_time = strtotime($arrTime);
        $this->_delay = 0;

    }      


    //SETTERS

    public function setId($id){
        if(is_int($id)){
        $this->_id = $id;
    }}

    public function setDelay($delay){
        $this->_delay = $delay;

    }

    //GETTERS
    public function getDelay(){
        return $this->_delay;
    }
    public function getId(){
        return $this->_id;
    }
    public function getArrTime(){
        return $this->_arrive_time;
    }
    public function getDepTime(){
        return $this->_departure_time;
    }

    //creatign a getTime():
    public function getTime()
  {
    if ($this->_delay != 0) {
      return '<p style="color:red" >' .  date('H:i:s', $this->_departure_time) . $this->_delay . '</p>';
    } else {
      return date('H:i:s', $this->_departure_time);
    }
  }

}