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
        Schema::create('productos', function (Blueprint $table) {
            $table->id('id_producto');
            $table->string('nombre', 255);
            $table->text('descripcion');
            $table->unsignedBigInteger('id_ubicacion_origen');
            $table->dateTime('fecha_origen');
            $table->unsignedBigInteger('id_organizacion');
            $table->foreign('id_ubicacion_origen')->references('id_ubicacion')->on('ubicaciones');
            $table->foreign('id_organizacion')->references('id_organizacion')->on('organizaciones');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
