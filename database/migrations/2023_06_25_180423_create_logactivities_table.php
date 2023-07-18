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
        Schema::create('logactivities', function (Blueprint $table) {
            $table->id();
            $table->string('logDate');
            $table->string('logType');
            $table->string('logName');
            $table->date('date');
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
        Schema::dropIfExists('logactivities');
    }
};
