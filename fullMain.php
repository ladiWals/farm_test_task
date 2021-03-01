<?php

// Всё-в-одном файл

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

class Hen
{
	private $id;

	function __construct($newId)
	{
		$this->id = $newId;
	}

	public function product()
	{
		$eggCount = rand(0, 1);
		echo "Hen ID={$this->id} laid {$eggCount} egg" . PHP_EOL;
		return ['eggs', $eggCount];
	}
}

class Barn
{
	private $animals = [];
	private $products = [
		'milk' => 0,
		'eggs' => 0,
	];

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

// Создаю новый хлев
$bobsBarn = new Barn;

// Добавляю животных
$bobsBarn->addAnimals('Cow', 10);
$bobsBarn->addAnimals('Hen', 20);

// Собираю продукцию
$bobsBarn->getProducts();

// Общий отчёт по добыче
$bobsBarn->report();