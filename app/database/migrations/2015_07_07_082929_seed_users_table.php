<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
        
        DB::table('users')->insert(array(
        'name'     => 'Abdul',
        'username' => 'Admin',
        'email'    => 'elahiabdul007@gmail.com',
        'password' => Hash::make('demo'),
    ));
        
        
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
