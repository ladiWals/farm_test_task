<?php

// Класс коровы

namespace Farm;

class Cow extends Animal
{

	public function product()
	{
		$litersCount = rand(8, 12);
		echo "Cow ID={$this->id} gave {$litersCount} liters of milk" . 	PHP_EOL;
		return ['milk', $litersCount];
	}

}