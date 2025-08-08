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
        Schema::create('respuestas_bot', function (Blueprint $table) {
            $table->id();
            $table->string('rol');              // Campo fijo
            $table->string('personalidad');     // Campo fijo
            $table->json('contenido');          // Campo dinámico (pares pregunta/respuesta)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('respuestas_bot');
    }
};
