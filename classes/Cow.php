<?php

// Класс коровы

class Cow
{
	private $id;

	public function getId()
	{
		return $this->id;
	}

	public function milk()
	{
		return rand(8, 12);
	}
}