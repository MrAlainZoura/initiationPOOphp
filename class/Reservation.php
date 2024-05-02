<?php
namespace Class;
//use Class\enum\statut;


class Reservation
{

private static ?self $_instance=null;
//	public Statut $statut;

//	private static int $count=0;
	private function __construct(){
//		$this->statut="Statut::APPROVAL_PENDING";
//		self::$count++;
		echo'Nouvelle instance';
	}

//	public static function getCount():int{
//		return self::$count;
//	}

	 public static function getInstance():self
	 {
	 	if(is_null(self::$_instance)){
	 		self::$_instance=new self;
	 	}
	 	return self::$_instance;
	 }
}