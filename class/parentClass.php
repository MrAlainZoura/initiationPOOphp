<?php
/*

	late static binding 

*/
namespace Class;

class ParentClass
{
	protected static string $name="Classe Parent";

	public static function getName():string
	{
		//var_dump(get_class($this));
		//return $this->name; on n'a pas acces a $this lorsqu'on utilise le static

		//return self::$name; ICI la resolution vas limiter a la classe parent avec le static

		return static::$name;
	}

	public function factoryInstance():static
	{
		return new static;
		//va retourner l'instance de la classe parent et aussi enfant
	}
}