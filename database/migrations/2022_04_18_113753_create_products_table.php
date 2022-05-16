<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('unit')->nullable();
            $table->double('price')->nullable();
            $table->integer('quantity')->nullable();
            $table->timestamps();
            $table->unsignedBigInteger('Catagory_id')->foreign('Catagory_id')->references('id')->on('Catagories_id')->onDelete('Cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products', function (Blueprint $table) {
            
        } 
    );
    }
};
