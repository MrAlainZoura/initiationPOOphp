<?php
namespace Class\CoffeMaker\Trait;

trait EspresoCoffeeTrait
{
	public function makeEspreso():string
	{
		return static::class ." fais un espresso";
	}
}