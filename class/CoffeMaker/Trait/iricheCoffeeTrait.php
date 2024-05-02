<?php
/*
	#le trait prend le dessus sur la classe parent
	#le trait s'incline devant la maj de la classe fille
	#le trait prend en charge private, protected et public
	#en cas de private ou protected il faut faire appel à l'encapcilation $this avec une une methode comme geteur au sein de la classe en cours

*/
namespace Class\CoffeMaker\Trait;

trait IricheCoffeeTrait
{
	public function makeIriche():string
	{
		return static::class ." fais un Iriche";
	}
}