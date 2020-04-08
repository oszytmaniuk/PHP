<?php 

abstract class Creature {
	protected $_color;
	protected $_sex;
	protected $_name;

	public function __construct($name, $sex, $color) {
		$this->_name = $name;
		$this->_sex = $sex;
		$this->_color = $color;
	}

	//abstract public function work();

	abstract public function talk();


}

 ?>