<?php

class Ammend_Users_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
        // Add name columns to users table
        Schema::table('users', function($table)
        {
            $table->string('profile_pic', 128);
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
        Schema::table('users', function($table)
        {
            $table->drop_column('profile_pic');
        });
	}
}