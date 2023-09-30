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
        Schema::create('detalle_ingresos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_articulo')->constrained(table: 'articulos')->onUpdate('cascade')->onDelete('cascade');
            $table->float('precio_compra');
            $table->float('precio_venta');
            $table->integer('stock_inicial');
            $table->integer('stock_actual');
            $table->date('fecha_produccion');
            $table->date('fecha_vencimiento');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_ingresos');
    }
};
