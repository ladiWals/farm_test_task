<?php

// Класс курицы

require_once(__DIR__ . '/Animal.php');

class Hen extends Animal
{

	public function product()
	{
		$eggCount = rand(0, 1);
		echo "Hen ID={$this->id} laid {$eggCount} egg" . PHP_EOL;
		return ['eggs', $eggCount];
	}
	
}