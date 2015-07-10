<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedContactsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		
		   DB::table('contacts')->insert(array(
        'name'     => 'Abdul',
        'email' => 'elahiabdul007@gmail.com',
        'Phone'    => '9841581916',
        'userid' => '1',
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
