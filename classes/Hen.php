<?php

// Класс курицы

class Hen
{
	private $id;

	public function getId()
	{
		return $this->id;
	}

	public function egg()
	{
		return rand(0, 1);
	}
}