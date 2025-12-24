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
        Schema::create('footer_titles', function (Blueprint $table) {
            $table->id();
            $table->string('title');         // titulo en español
            $table->string('locale')->index(); // Añadimos index para búsquedas rápidas de idioma 'es' o 'en'
            $table->integer('order')->default(0); // Orden de aparición
            $table->timestamps();
        });

        Schema::create('footer_secondary_titles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('footer_title_id')->constrained()->onDelete('cascade');
            $table->string('title');
            $table->string('url'); 
            $table->string('locale')->index(); // Añadimos index para búsquedas rápidas de idioma 'es' o 'en'
            $table->integer('order')->default(0); // Orden de aparición
            $table->timestamps();

            //$table->unique(['footer_title_id', 'locale']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('footer_secondary_titles');
        Schema::dropIfExists('footer_titles');
    }
};
