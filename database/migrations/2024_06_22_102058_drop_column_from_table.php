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
        Schema::table('seller_data', function (Blueprint $table) {
            $table->dropForeign(['user_id']); // Drop foreign key constraint if exists
            $table->dropColumn('user_id'); // Drop the user_id column
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('seller_data', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id'); // Recreate the user_id column
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); // Restore foreign key constraint
        });
    }
};
