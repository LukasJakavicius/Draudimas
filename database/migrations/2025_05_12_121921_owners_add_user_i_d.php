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
        Schema::table('owner', function (Blueprint $table) {
            $table->foreignId('user_id')->default('1')->constrained('users');
        });
	
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
