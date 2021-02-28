<?php

// Класс коровы

class Cow
{
	private $id;

	function __construct($newId)
	{
		$this->id = $newId;
	}

	public function product()
	{
		$litersCount = rand(8, 12);
		echo "Cow ID={$this->id} gave {$litersCount} liters of milk" . 	PHP_EOL;
		return ['milk', $litersCount];
	}
}