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
        Schema::create('detalleventa', function (Blueprint $table) {
            $table->id();
            $table->decimal('precio', 10, 2);
            $table->integer('cantidad');
            $table->integer('renglon');
            $table->integer('descuento')->nullable(true);
            $table->string('aplica')->nullable(true);
            $table->string('aplicaid')->nullable(true);
            $table->decimal('cantidadinventario', 10, 2)->nullable(true);
            $table->decimal('importe', 10, 2)->nullable(true);
            $table->decimal('impuestos', 10, 2)->nullable(true);
            $table->string('unidad')->nullable(true);
            $table->unsignedBigInteger('id_producto');
            $table->unsignedBigInteger('id_venta');
            $table->timestamps();

            $table->foreign('id_venta')->references('id')->on('ventas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_producto')->references('id')->on('productos')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalleventa');
    }
};
