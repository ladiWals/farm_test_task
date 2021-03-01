<?php

// Класс хлева

class Barn
{
	private $animals = [];
	private $products = [];

	// Добавляет животных в хлев
	public function addAnimals($kind, $quantity) 
	{
		for($i = 0; $i < $quantity; $i++) {
			$this->animals[] = new $kind(count($this->animals) + 1);
		}
		echo "{$quantity} {$kind}s were added to the Barn!" . PHP_EOL . PHP_EOL;
	}

	// Проходит по всем животным в хлеву и собирает продукцию
	public function getProducts() 
	{
		foreach($this->animals as $animal) {

			// Получаю продукцию с животного
			$get = $animal->product();

			// Добавляю число в массив продукции
			$this->products[$get[0]] += $get[1];
		}
	}

	// Выводит общий отчёт по продукции
	public function report()
	{
		echo PHP_EOL . "Report:" . PHP_EOL;
		foreach($this->products as $product => $count) {
			echo "$product: $count" . PHP_EOL;
		}
	}
}