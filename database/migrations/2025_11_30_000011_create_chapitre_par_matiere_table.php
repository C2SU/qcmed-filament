<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('chapitre_par_matiere', function (Blueprint $table) {
            $table->id();
            $table->foreignId('chapitre_id')->constrained('chapitre_id')->onDelete('cascade');
            $table->integer('matiere_id');
            $table->timestamps();
            $table->unique(['chapitre_id', 'matiere_id']);
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('chapitre_par_matiere');
    }
};
