<?php

class Create_Organizations_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
        // Create table and add columns
        Schema::create('organizations', function($table)
        {
            $table->increments('id');
            $table->string('name', 255);
            $table->string('description', 255);
            $table->string('url', 255);
            $table->string('logo', 255);
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
        Schema::drop('organizations');
	}

}