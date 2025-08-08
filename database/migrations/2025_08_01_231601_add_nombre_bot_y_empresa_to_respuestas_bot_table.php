<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('respuestas_bot', function (Blueprint $table) {
        $table->string('nombre_bot')->nullable();
        $table->string('nombre_empresa')->nullable();
    });
}

public function down()
{
    Schema::table('respuestas_bot', function (Blueprint $table) {
        $table->dropColumn(['nombre_bot', 'nombre_empresa']);
    });
}

};
