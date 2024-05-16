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
        Schema::create('biblios', function (Blueprint $table) {
            $table->id();
            $table->string('Type');
            $table->string('Titre');
            $table->string('Contenu');
            $table->string('filiere');
            $table->string('semestre');
            $table->string('module');
            $table->timestamps();
        });
    
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biblios');
    }
};
