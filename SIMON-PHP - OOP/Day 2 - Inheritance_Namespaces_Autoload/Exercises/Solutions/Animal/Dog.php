<?php

require_once 'Animal.php';

//it's a concrete class and I have to implement ALL abstact methods from the parents!
class Dog extends Animal {
	
	public function talk() {
		return 'Woof Woof!';
	}

	
}