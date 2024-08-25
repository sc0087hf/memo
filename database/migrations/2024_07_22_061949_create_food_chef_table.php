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
        Schema::create('food_chef', function (Blueprint $table) {
            $table->foreignId('food_id')->constrained('foods')->onDelete('cascade');
            $table->foreignId('chef_id')->constrained('chefs')->onDelete('cascade');
            $table->timestamps();

            $table->primary(['food_id', 'chef_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('food_chef');
    }
};
