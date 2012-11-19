<?php

class Add_Slug_To_Organizations_Table {

    /**
     * Make changes to the database.
     *
     * @return void
     */
    public function up()
    {
        // Add name columns to workspaces table
        Schema::table('organizations', function($table)
        {
            $table->string('slug', 255);
        });
    }

    /**
     * Revert the changes to the database.
     *
     * @return void
     */
    public function down()
    {
        // Drop columns
        Schema::table('organizations', function($table)
        {
            $table->drop_column(array('slug'));
        });
    }

}