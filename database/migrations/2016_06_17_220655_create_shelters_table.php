<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSheltersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shelters', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('shelter_name', 100);
            $table->string('shelter_address', 100);
            $table->integer('shelter_phone');
        });

        Schema::create('shelter_user', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');

            $table->integer('shelter_id')->unsigned();
            $table->foreign('shelter_id')->references('id')->on('shelters');

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
        Schema::drop('shelters');
        Schema::drop('shelter_user');
    }
}
