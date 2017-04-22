<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use Ramsey\Uuid\Uuid;

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
            //$table->uuid('uuid')->unique();
            $table->string('firstName');
            $table->string('lastName');
            $table->string('email')->unique();
            $table->integer('campusID')->unsigned();
            $table->string('password');
            $table->text('bio');
            $table->date('grad_year');
            $table->date('start_year');
            $table->rememberToken();
            $table->timestamps();
        });



        Schema::create('messages', function(Blueprint $table) {
            $table->increments('id');
            //$table->uuid('uuid')->unique();
            $table->string('subject');
            $table->string('body');
            $table->integer('senderID')->unsigned();
            $table->integer('recipientID')->unsigned();
            $table->integer('threadID')->unsigned();
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
        Schema::drop('campuses');
        Schema::drop('users');
        Schema::drop('majors');
        Schema::drop('posts');
        Schema::drop('messages');
    }
}
