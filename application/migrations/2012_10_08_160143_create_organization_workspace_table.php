<?php

class Create_Organization_Workspace_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
        // Create table and add columns
        Schema::create('organization_workspace', function($table)
        {
            $table->increments('id');
            $table->integer('organization_id');
            $table->integer('workspace_id');
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
        Schema::drop('organization_workspace');
	}

}