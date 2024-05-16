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
        Schema::create('peres', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->integer('apogee_etd')->unique();
            $table->string('cin');
            $table->string('email');
            $table->string('password');
            $table->timestamps();
        });

        Schema::table('peres', function (Blueprint $table) {         
            $table->foreign('apogee_etd')->references('apogee')->on('etudiants');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parents');
    }
};
