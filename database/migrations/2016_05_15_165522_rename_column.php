<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('projects', function(Blueprint $table) {
            $table->renameColumn('date_recieved', 'date_received');
            $table->renameColumn('date_recieved_as_per_dots', 'date_received_as_per_dots');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('projects', function(Blueprint $table) {
            $table->renameColumn('date_received', 'date_recieved');
            $table->renameColumn('date_received_as_per_dots','date_recieved_as_per_dots');
        });
    }
}
