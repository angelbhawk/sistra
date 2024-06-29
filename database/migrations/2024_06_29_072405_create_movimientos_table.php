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
        Schema::create('movimientos', function (Blueprint $table) {
            $table->id('id_movimiento');
            $table->unsignedBigInteger('id_producto');
            $table->unsignedBigInteger('id_ubicacion_actual');
            $table->dateTime('fecha_actual');
            $table->unsignedBigInteger('id_operador');
            $table->foreign('id_producto')->references('id_producto')->on('productos');
            $table->foreign('id_ubicacion_actual')->references('id_ubicacion')->on('ubicaciones');
            $table->foreign('id_operador')->references('id_operador')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movimientos');
    }
};
