<?php

class Create_Users_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		// Create table and add columns
        Schema::create('users', function($table)
        {
            $table->increments('id');
            $table->string('email', 128);
            $table->string('password', 64);
            $table->timestamps();
        });
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		// Drop table
        Schema::drop('users');
	}

}