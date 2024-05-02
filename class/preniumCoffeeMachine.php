<?php

/*

#prenium class est une classe fille de la classe coffee machine

#attribut privatte, protected et public sont respectivement du bas niveau au haut niveau

#dans la classe fille on ne peut pas descendre à un attribut de bas niveau par rapport a la classe mere

#l'attribut private de la classe mere ne peut etre modifie dans la classe fille

#la classe fille doit utiliser l'attribut de meme niveau ou supperieur à celui de la classe mere

*/


namespace Class;

class PreniumCoffeeMachine extends CoffeeMachine
{
	//protected int $tasse=3;

	public function __construct(int $tasse)
	{
		//var_dump('nouvelle valeur de tasse');
		parent::__construct($tasse);
	}

	public function select( string $selection){
		$result= match ($selection) {
			'espresso' => $this->makeEspresso(),
			'vanilla' => $this->makeVanilla(),
			default=>'error',
		};

		return $result;
	}
 	
 	protected function makeVanilla()
 	{
 		for ($i=1; $i <$this->tasse; $i++) 
 		{
			echo "Votre caffée vanilla numero $i est prêt <br>";
		}
 	}
}