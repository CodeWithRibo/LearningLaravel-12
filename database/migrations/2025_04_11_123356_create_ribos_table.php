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
        Schema::create('ribos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table-> string('name');
            $table-> integer('skill');
            $table->text('bio');

            // $table->unsignedBigInteger('dojos_id')->nullable();
            // $table->foreign('dojos_id')->references('id')->on('ribos')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ribos');
    }
};
