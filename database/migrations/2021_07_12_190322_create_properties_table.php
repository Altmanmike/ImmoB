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
        // à vérifiiiiiiiiierrrrr ->nullable();

        Schema::create('properties', function (Blueprint $table) {
            $table->id();            
            $table->string('title');
            $table->unsignedBigInteger('category_id'); //->nullable()
            $table->foreign('category_id')->references('id')->on('categories');
            $table->string('type')->nullable();
            $table->string('furnished')->nullable();            
            $table->string('photo')->nullable();
            $table->unsignedBigInteger('rooms')->nullable();
            $table->unsignedBigInteger('area')->nullable();
            $table->text('description')->nullable();            
            $table->unsignedBigInteger('price')->nullable();
            $table->string('slug')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('user_phone')->nullable();
            $table->string('user_mail')->nullable();
            $table->timestamps();           
            $table->timestamp('completetimestamp')->nullable();  
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
