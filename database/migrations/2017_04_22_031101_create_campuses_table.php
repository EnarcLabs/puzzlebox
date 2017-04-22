<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCampusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campuses',function(Blueprint $table) {
            $table->increments('id');
            //$table->uuid('uuid')->unique();
            $table->string('name')->unique();
            $table->string('desc');
            $table->string('country');
            $table->string('state');
            $table->string('city');
            $table->string('url');
            //tags m->m
            //$table->json('options')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('campuses', function (Blueprint $table) {
            //
        });
    }
}
