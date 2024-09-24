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
            $table->id();
            $table->string('codigo', 50)->unique();
            $table->string('producto');
            $table->string('tipo', 25);
            $table->decimal('precio_compra', 10, 2);
            $table->decimal('precio_venta', 10, 2);
            $table->string('foto', 100)->nullable();
            $table->unsignedBigInteger('id_categoria');
            $table->unsignedBigInteger('id_fabricante');
            $table->unsignedBigInteger('id_familia');
            $table->unsignedBigInteger('id_linea');
            $table->timestamps();

            $table->foreign('id_categoria')->references('id')->on('categorias')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_fabricante')->references('id')->on('fabricantes')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_familia')->references('id')->on('familias')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_linea')->references('id')->on('lineas')->onDelete('cascade')->onUpdate('cascade');
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
