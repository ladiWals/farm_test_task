<?php

// Класс курицы

class Hen
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
		$eggCount = rand(0, 1);
		echo "Hen ID={$this->id} laid {$eggCount} egg" . PHP_EOL;
		return ['eggs', $eggCount];
	}
}