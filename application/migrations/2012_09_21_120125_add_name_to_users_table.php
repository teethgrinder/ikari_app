<?php

class Add_Name_To_Users_Table {

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
            $table->string('first_name', 128);
            $table->string('last_name', 128);
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
        Schema::table('users', function($table)
        {
            $table->drop_column(array('first_name', 'last_name'));
        });
    }

}