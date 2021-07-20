<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();            
            $table->string('title');
            $table->unsignedBigInteger('category_id');
            $table->string('type');
            $table->string('furnished');
            $table->string('photo');
            $table->string('rooms');
            $table->string('area');
            $table->string('floor');
            $table->string('terrace');
            $table->string('car_park');
            $table->string('district');
            $table->text('description');
            $table->timestamps();
            $table->unsignedBigInteger('state');
            $table->string('user_id');
            $table->string('user_phone');
            $table->string('user_mail');
            $table->unsignedBigInteger('price');            
            $table->timestamp('completetimestamp')->nullable();  // à vérifiiiiiiiiierrrrr
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties');
    }
}
