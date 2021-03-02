<?php

namespace Farm;

class Animal
{
	protected $id;

	function __construct($newId)
	{
		$this->id = $newId;
	}
}