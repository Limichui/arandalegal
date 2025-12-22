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
        // Tabla principal de enlaces del Navbar
        Schema::create('navbar_links', function (Blueprint $table) {
            $table->id();
            // $table->string('title');       // Texto del enlace
            $table->string('url');         // Ruta o URL
            $table->string('parent')->nullable(); // Para agrupar en dropdowns
            $table->integer('order')->default(0); // Orden de aparición
            $table->timestamps();

        });

        // Tabla de traducciones para los títulos
        Schema::create('navbar_link_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('navbar_link_id')->constrained()->onDelete('cascade');
            $table->string('locale')->index(); // Añadimos index para búsquedas rápidas de idioma 'es' o 'en'
            $table->string('title');
            $table->timestamps();

            // Opcional: Evita que un link tenga dos traducciones para el mismo idioma
            $table->unique(['navbar_link_id', 'locale']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('navbar_link_translations');
        Schema::dropIfExists('navbar_links');
    }
};
