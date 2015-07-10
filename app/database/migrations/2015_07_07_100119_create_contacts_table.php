<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		 Schema::create('contacts', function(Blueprint $table)
      {
          $table->increments('id');

          $table->string('name', 32);
          $table->string('email', 320);
          $table->string('Phone', 64);
		  $table->integer('userid');
           $table->timestamps();
      });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		 Schema::drop('contacts');
	}

}
