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
        Schema::create('detalle_ventas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_venta')->constrained(table: 'ventas')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('id_detalle_ingreso')->constrained(table: 'detalle_ingresos')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('cantidad');
            $table->integer('precio_venta');
            $table->integer('descuento');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_ventas');
    }
};
