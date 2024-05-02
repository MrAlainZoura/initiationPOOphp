<?php
namespace Class\ExceptionDir;

class User 
{
	public function __construct(public string $name, public string $password){}

	public function isVerified():bool
	{
		return true;
	}

	public function isBani():bool
	{
		return false;
	}
}