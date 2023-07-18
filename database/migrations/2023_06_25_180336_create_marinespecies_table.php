<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('marinespecies', function (Blueprint $table) {
            $table->id();
            $table->string('regularName');
            $table->string('ScientificName');
            $table->string('Description');
            $table->string('images');  
            $table->string('status');   
            $table->bigInteger('userID')->unsigned();              
            $table->foreign('userID')->references('id')->on('users')->onDelete('cascade');           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('marinespecies');
    }
};
