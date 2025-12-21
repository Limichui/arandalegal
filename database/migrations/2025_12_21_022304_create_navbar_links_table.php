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
        Schema::create('navbar_links', function (Blueprint $table) {
            $table->id();
            $table->string('title');       // Texto del enlace
            $table->string('url');         // Ruta o URL
            $table->string('parent')->nullable(); // Para agrupar en dropdowns
            $table->integer('order')->default(0); // Orden de aparición
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('navbar_links');
    }
};
