
<?php
class Person {
	public $name;
	public $age;
	public function __construct($name, $age) {
		$this -> name = $name;
		$this -> age = $age;
	}
	public function introduce() {
		echo "My name is {$this -> name}. My age is {$this -> age}";
	}
}
class Tom extends Person {
	public $school;
	public function __construct($name, $age, $school) {
		# $this -> name and $this -> age will be set by the parent's constructor
		parent::__construct($name, $age);
		$this -> school = $school;
	}
	public function introduce() {
		echo "My name is {$this -> name}. My age is {$this -> age}. My school is {$this -> school}";
	}
}
$tom = new Tom('Tom', 29, 'Foothill School');
$tom -> introduce();
