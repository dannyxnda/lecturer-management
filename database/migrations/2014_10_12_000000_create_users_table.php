<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username')->unique()->nullable();
            $table->string('fullname');
            $table->string('email')->unique()->nullable();
            $table->string('profile_picture');
            $table->string('degree');
            $table->string('phone_number');
            $table->string('password')->nullable();
            $table->integer('role');
            $table->integer('id_department')->unsigned();
            $table->foreign('id_department')->references('id')->on('department')->onDelete('cascade');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}