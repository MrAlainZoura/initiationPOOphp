<?php
/*

#interface te permet de definir les fonctions qui seront implementées dans les classes sans les developper
#le developpement de ces fonctions se fera dans les classes de leur implementation
#au niveau de l'interface on definit les methodes/fonction et constante en public
#on ne definit pas de proprietes
#une interface peut etendre d'une autre interface avec extends par consequent l'implementation de methodes doit se faire pour les deux interfaces/ selon le nombre d'interface

*/
namespace Class\interface;

interface downloadPDF
{
	//public function __construct();
	public function downloaderPDF(?int $size=null):string;
}