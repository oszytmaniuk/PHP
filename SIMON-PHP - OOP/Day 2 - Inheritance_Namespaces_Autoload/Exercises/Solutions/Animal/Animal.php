<?php 

// require_once 'Creature.php';
// require_once 'interface.php';


//i can abstract class from the abstracted class:
abstract class Animal extends Creature {
	protected $_legs;

	public function __construct($name, $sex, $color, $legs=4) {
		parent::__construct($name, $sex, $color);
		$this->_legs = $legs;
	}

	//it's already defined in the parent -> not neded here:
	/*public function talk() {
		return 'Animal can make noise.';
	}*/
	
}

 ?>