<?php
namespace Class\CoffeMaker;

abstract class CoffeeMaker
{
	public function makeCoffee():string
	{
		return static::class ." fais un caffée";
	}
}