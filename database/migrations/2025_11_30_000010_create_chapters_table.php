<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('chapitre_id', function (Blueprint $table) {
            $table->id();
            $table->integer('numero')->unique();
            $table->text('description');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('chapitre_id');
    }
};
