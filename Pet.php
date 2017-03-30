<?php

class Pet {

	public $species;
	public $weight;
	public $color;
	public $name;

	public function eat($message)
	{
		return $message . PHP_EOL;
	}

	public function move($message)
	{
		return $message . PHP_EOL;
	}

	public function sleep($message)
	{
		return $message . PHP_EOL;
	}
}