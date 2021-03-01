<?php

// Класс коровы

require_once(__DIR__ . '/Animal.php');

class Cow extends Animal
{

	public function product()
	{
		$litersCount = rand(8, 12);
		echo "Cow ID={$this->id} gave {$litersCount} liters of milk" . 	PHP_EOL;
		return ['milk', $litersCount];
	}
	
}