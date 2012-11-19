<?php

class Create_Organization_User_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
        // Create table and add columns
        Schema::create('organization_user', function($table)
        {
            $table->increments('id');
            $table->integer('organization_id');
            $table->integer('user_id');
        });
    }

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
        // Drop profile_pic column
        Schema::drop('organization_user');
	}

}