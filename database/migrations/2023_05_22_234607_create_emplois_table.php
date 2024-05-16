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
        Schema::create('emplois', function (Blueprint $table) {
            $table->id();
            $table->string('Jour');
            $table->string('Seance1')->nullable();
            $table->string('Seance2')->nullable();
            $table->string('Seance3')->nullable();
            $table->string('Seance4')->nullable();
            $table->string('Seance5')->nullable();
            $table->string('filiere')->nullable();
            $table->string('semestre')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emplois');
    }
};
