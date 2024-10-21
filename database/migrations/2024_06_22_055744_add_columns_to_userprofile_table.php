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
        Schema::table('userprofile', function (Blueprint $table) {
            $table->string('gender')->nullable();
            $table->string('provinces')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('userprofile', function (Blueprint $table) {
            $table->string('gender')->nullable();
            $table->string('provinces')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
        });
    }
};
