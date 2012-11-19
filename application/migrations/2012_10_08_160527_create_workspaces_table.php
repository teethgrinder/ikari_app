<?php

class Create_Workspaces_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
    public function up()
    {
        // Create table and add columns
        Schema::create('workspaces', function($table)
        {
            $table->increments('id');
            $table->string('name', 128);
            $table->string('description', 256);
            $table->boolean('public');
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
        Schema::drop('workspaces');
    }

}