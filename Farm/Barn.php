<?php

// Класс хлева

namespace Farm;

class Barn
{
	private $animals = [];
	private $products = [];

	// Добавляет животных в хлев
	public function addAnimals($kind, $quantity) 
	{
		// Проверю сущестоввание класса и является ли $quantity числом, если нет - кидаю исключения
		try {
			if (class_exists($kind) && gettype($quantity) == 'integer' && $quantity >= 0 && get_parent_class($kind) == 'Farm\\Animal') {
				for($i = 0; $i < $quantity; $i++) {
					$this->animals[] = new $kind(count($this->animals) + 1);
				}
				echo "{$quantity} {$kind}s were added to the Barn!" . PHP_EOL . PHP_EOL;
			} elseif ( !class_exists($kind) ) {
				throw new \InvalidArgumentException("class {$kind} do not exist!");
			} elseif (get_parent_class($kind) != 'Farm\\Animal') {
				throw new \InvalidArgumentException("class {$kind} not an Animal!");
			} elseif (gettype($quantity) != 'integer' || $quantity < 0) {
				throw new \InvalidArgumentException('Second argument to "addAnimals" must be a positive number!');
			}
		} catch (\Exception $e) {
			echo 'AddAnimalError: ' . $e->getMessage() . PHP_EOL;
			die();
		}
	}

	// Проходит по всем животным в хлеву и собирает продукцию
	public function getProducts() 
	{
		foreach($this->animals as $animal) {

			try {

				// Если у животного есть метод product()
				if (method_exists($animal, 'product')) {

					// Получаю продукцию с животного
					$get = $animal->product();

					// Если метод product() возвращает массив из строки и числа, то работает с ним. иначе - ошибка
					if (gettype($get) == 'array' && count($get) == 2 && gettype($get[0]) == 'string' && gettype($get[1]) == 'integer') {

						// Добавляю новый вид продукции в массив (если ещё не добавлен)
						if (empty($this->products[$get[0]])) {
							$this->products[$get[0]] = 0;
						}

						// Прибавляю число в массив продукции
						$this->products[$get[0]] += $get[1];
					} else {
						throw new \Exception("the product() method of class " . get_class($animal) . " return invalid value");
					}
				} else {
					throw new \Exception('class ' . get_class($animal) . " has no method 'product()'");
				}
			} catch (\Exception $e) {
				echo 'GetProductsError: ' . $e->getMessage() . PHP_EOL;
				die();
			}
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