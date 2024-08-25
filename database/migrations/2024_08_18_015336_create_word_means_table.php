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
        Schema::create('word_means', function (Blueprint $table) {
            $table->id();
            $table->foreignId('word_id')
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade')
                ->comment('単語ID');
            $table->text('mean')->comment('単語の意味');
            $table->text('example_sentence_en')->comment('例文英語');
            $table->text('example_sentence_ja')->comment('例文日本語');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('word_means');
    }
};
