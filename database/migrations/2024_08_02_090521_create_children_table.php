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
        Schema::create('children', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('gender')->nullable();
            $table->string('name')->nullable();
            $table->string('unique_name')->nullable();
            $table->string('image')->nullable();
            $table->date('birthdate')->nullable();
            $table->integer('votes')->default(0);
            $table->string('description')->nullable();
            $table->string('current_earning')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('children');
    }
};
