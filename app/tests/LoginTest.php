<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class LoginTest extends TestCase {

	use DatabaseTransactions;

	public function test_login()
	{
		$this->visit('login')
		     ->type('elahiabdul007@gmail.com', 'email')
		     ->type('demo', 'password')
		     ->press('Login')
		     ->see('contacts');


	}
}
