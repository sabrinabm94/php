<?php
abstract class Animal {
	public $name;
	public $color;
	public function describe() {
		return $this->name . ' is ' . $this->color;
	}
	abstract public function makeSound();
}
class Duck extends Animal {
	public function describe() {
		return parent::describe();
	}
	public function makeSound() {
		return 'Quake';
	}
}
class Dog extends Animal {
	public function describe() {
		return parent::describe();
	}
	public function makeSound() {
		return 'Bark';
	}
}

$animal = new Duck();
$animal = new Dog();
$animal->name = 'Ben';
$animal->color = 'Yellow';
echo $animal->describe();
echo $animal->makeSound();

$animal = new Dog();
$animal->name = 'Larry';
$animal->color = 'Black';
echo $animal->describe();
echo $animal->makeSound();
?>