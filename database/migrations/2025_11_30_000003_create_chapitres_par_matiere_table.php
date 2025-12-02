<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('chapitres_par_matiere', function (Blueprint $table) {
            $table->id();
            $table->foreignId('matiere_id')->constrained('matiere_id')->onDelete('cascade');
            $table->foreignId('chapitre_id')->constrained('chapitre_id')->onDelete('cascade');
            $table->timestamps();
            $table->unique(['matiere_id', 'chapitre_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chapitres_par_matiere');
    }
};
