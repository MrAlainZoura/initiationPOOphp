<?php
namespace Class\CoffeMaker;

use Class\CoffeMaker\Trait\IricheCoffeeTrait;
use Class\CoffeMaker\Trait\EspresoCoffeeTrait;


class MultiCoffee extends CoffeeMaker
{
	use IricheCoffeeTrait;
	use EspresoCoffeeTrait;
}