<?php
class ParentClass {
	protected $protectedProperty = 'Protected';
	private $privateProperty = 'Private';
	protected function protectedMethod() {
		echo $this -> protectedProperty;
	}
	private function privateMethod() {
		// cannot call this function 
		// from Child
	}
}
class Child extends ParentClass {
	public function doSomething() {
		$this -> protectedMethod();
		// invalid
		// $this -> privateMethod();
	}
}
$child = new Child();
$child -> doSomething();

// all of following are invalid (only public visibility is accessible from outside)
// echo $child -> protectedProperty;
// echo $child -> privateProperty;
// $child -> protectedMethod();
// $child -> privateMethod();