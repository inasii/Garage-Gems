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
        Schema::table('users_data', function (Blueprint $table) {
            $table->string('province')->nullable();
            $table->string('city')->nullable();
            $table->string('district')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('street_name')->nullable();
            $table->string('building')->nullable();
            $table->string('house_number')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users_data', function (Blueprint $table) {
            $table->dropColumn(['province', 'city', 'district', 'postal_code', 'street_name', 'building', 'house_number']);
        });
    }
};
