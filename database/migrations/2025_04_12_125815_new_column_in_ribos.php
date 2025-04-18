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
        Schema::table('ribos', function (Blueprint $table) {
            $table -> string('status');
            $table -> string('age');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ribos', function (Blueprint $table) {
            Schema::dropColumns('ribos','status');
        });
    }
};
