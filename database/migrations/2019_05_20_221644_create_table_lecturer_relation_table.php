<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableLecturerRelationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lecturer_relation', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');

            // $table->integer('id_user')->unsigned();
            // $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');

            $table->integer('id_research_field')->unsigned();
            $table->foreign('id_research_field')->references('id')->on('research_field')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lecturer_relation');
    }
}
