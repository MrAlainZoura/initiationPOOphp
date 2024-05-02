<?php
namespace Class\ExceptionDir;
use Class\ExceptionDir\Exception\userNotVerifiedException;
use Class\ExceptionDir\Exception\userBaniException;

class Login
{
	public function __construct(protected User $user){}

	public function login():bool
	{
		if (!$this->user->isVerified())
		{
			throw new UserNotVerifiedException();
		}

		if (!$this->user->isBani())
		{
			throw new UserBaniException();
		}
		return true;
	}
}