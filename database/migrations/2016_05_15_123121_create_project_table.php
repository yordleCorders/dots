<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function(Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->dateTime('date_recieved');
            $table->dateTime('date_released');
            $table->dateTime('date_recieved_as_per_dots');
            $table->dateTime('date_released_as_per_dots');
            $table->double('appropriation');
            $table->string('remarks');

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');

            $table->integer('section_id')->unsigned();
            $table->foreign('section_id')->references('id')->on('sections');

            $table->integer('document_id')->unsigned();
            $table->foreign('document_id')->references('id')->on('documents');

            $table->timestamps();
            $table->string('deactivated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('projects' , function(Blueprint $table){
            $table->dropForeign('user_id');
            $table->dropForeign('section_id');
            $table->dropForeign('document_id');
        });
    }
}
