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
        $table->string('canal')->after('personalidad')->default('whatsapp');
        $table->unsignedBigInteger('user_id')->after('canal')->default(1); // Asegúrate que el user con id=1 existe

        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
    });
}

public function down()
{
    Schema::table('respuestas_bot', function (Blueprint $table) {
        $table->dropForeign(['user_id']);
        $table->dropColumn('user_id');
        $table->dropColumn('canal');
    });
}

};
