<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('objectifs_par_item', function (Blueprint $table) {
            $table->id();
            $table->foreignId('chapitre_id')->constrained('chapters')->onDelete('cascade');
            $table->text('objectif');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('objectifs_par_item');
    }
};
