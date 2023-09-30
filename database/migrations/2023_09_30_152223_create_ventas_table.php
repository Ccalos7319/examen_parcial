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
        Schema::create('ventas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_trabajador')->constrained(table: 'trabajadors')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('id_cliente')->constrained(table: 'clientes')->onUpdate('cascade')->onDelete('cascade');
            $table->date('fecha');
            $table->string('tipo_comprobante');
            $table->string('serie');
            $table->integer('igv');
            $table->string('estado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ventas');
    }
};
