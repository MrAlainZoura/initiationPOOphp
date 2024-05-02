<?php
/*

#la classe abstraite ne doit pas etre instanciee
#elle definit la signature de fonction qui sera developpee dans la classe fille
#elle peut ou ne pas definir les parametre d'une fonction
#mais si elle definit les parametres d'une fonction, les classes filles seront aussi obligees de le suivre 

*/
 namespace Class;

 abstract class Vehicule
 {
 	public function __construct( protected string $marque)
 	{}

 	abstract public function marque():string;
 }