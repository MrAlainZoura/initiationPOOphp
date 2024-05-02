<?php

/*

#la class ou ellement abstrait ne doit pas etre instancie

#creer une class fille qui va heriter de class abstrait et qu'on va instancier a la place de la classe abstrait

*/

namespace Class;

class Pegeot extends Vehicule
{
	public function marque():string
 	{
 		return "Je roule en $this->marque qui est une voiture francaise";
 	}
}