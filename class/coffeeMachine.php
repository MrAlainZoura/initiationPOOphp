<?php

/*

#pour interdir l'extension d'une classe comme ses element on utilise le mot cle 'final' devant le nom de la classe ou élément

*/


namespace Class;

class CoffeeMachine
{
	protected int $tasse;
	public function __construct(int $tasse)
	{
		$this->tasse=$tasse;
	}

	public function select( string $selection){
		$result= match ($selection) {
			'espresso' => $this->makeEspresso(),
			default=>'error',
		};

		return $result;
	}

	protected function makeEspresso(){
		for ($i=1; $i <$this->tasse; $i++) {
			echo "Votre caffée espresso numero $i est prêt <br>";
		}
	}
}