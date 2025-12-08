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
        Schema::create('learning_objective_question', function (Blueprint $table) {
            $table->id();
            $table->integer('question_id')->constrained('questions')->cascadeOnDelete();
            $table->integer('learning_objective_id')->constrained('learning_objectives')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('learning_objective_question');
    }
};
