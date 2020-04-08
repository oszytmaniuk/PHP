<?php 

require_once 'Creature.php';
require_once 'interface.php';

class Human extends Creature implements ICreature{

	public function __construct($name, $sex, $color) {
		parent::__construct($name, $sex, $color);
	}

	public function work() {
		return $this->_name . ' is working !<br>';
	}

	public function talk() {
		return 'Hello, my name is ' . $this->_name . ', and Im a ' . $this->_sex . '<br>';
	}

	public function walk()
	{
		return 'I can walk <br>';
	}
}

 ?>