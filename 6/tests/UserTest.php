<?php

use PHPUnit\Framework\TestCase;
use App\User;

class UserTest extends TestCase
{

	protected $user;

	public function setUp () : void
	{
		$this->user = new User;
	}

	public function test_i_can_register_name()
	{
		$this->user->setName("Italo");
		$this->assertEquals($this->user->getName(), "Italo");
	}

	public function test_i_can_register_lastname()
	{
		$this->user->setLastName("Morales");
		$this->assertEquals($this->user->getLastName(), "Morales");
	}

}