<?php

class Add_Timestamps_To_Organization_User_Table {

    /**
     * Make changes to the database.
     *
     * @return void
     */
    public function up()
    {
        // Add timestamps
        Schema::table('organization_user', function($table)
        {
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
        // Drop timestamps
        Schema::table('organization_user', function($table)
        {
            $table->drop_column(array('created_at', 'altered_at'));
        }
        );
    }
}