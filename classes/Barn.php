<?php

// Класс хлева

class Barn
{
	private $animals = [];
	private $products = [];

	public function addAnimals($kind, $quantity) 
	{
		for($i = 0; $i < $quantity; $i++) {
			$this->animals[] = new $kind(count($this->animals) + 1);
		}
		echo "{$quantity} {$kind}s were added to the Barn!<br>";
	}

	public function getProducts() 
	{
		foreach($this->animals as $animal) {
			$get = $animal->product();
			$this->products[$get[0]] += $get[1];
		}
	}

	public function report()
	{
		echo "<br>Report:<br>";
		foreach($this->products as $product => $count) {
			echo "$product: $count<br>";
		}
	}
}