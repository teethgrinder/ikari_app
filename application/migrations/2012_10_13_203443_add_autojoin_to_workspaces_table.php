<?php

class Add_Autojoin_To_Workspaces_Table {

    public function up()
    {
        Schema::table('workspaces', function($table)
        {
            $table->boolean('autojoin');
        });

    }

    public function down()
    {
        Schema::table('workspaces', function($table)
        {
            $table->drop_column('autojoin');
        });

    }

}