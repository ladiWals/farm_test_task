<?php

// Класс коровы

class Cow
{
	private $id;

	function __construct($newId)
	{
		$this->id = $newId;
	}

	public function getId()
	{
		return $this->id;
	}

	public function product()
	{
		$litersCount = rand(8, 12);
		echo "Cow ID={$this->id} gave {$litersCount} liters of milk<br>";
		return ['milk', $litersCount];
	}
}