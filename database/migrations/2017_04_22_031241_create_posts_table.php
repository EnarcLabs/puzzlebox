<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts',function (Blueprint $table) {
            $table->increments('id');
            //$table->'uuid')->unique();
            $table->string('title');
            $table->string('body');
            //tags
            //expirience
            $table->integer('min_price')->nullable();
            $table->integer('max_price')->nullable();
            $table->string('img');
            $table->integer('userID')->unsigned();//foriegn
            $table->integer('campusID')->unsigned();
            $table->string('location');
            //
            $table->integer('job_type');
            //Majors m->m
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
        Schema::table('posts', function (Blueprint $table) {
            //
        });
    }
}
