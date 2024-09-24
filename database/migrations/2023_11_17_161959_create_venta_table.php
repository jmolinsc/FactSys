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
            $table->string('mov');
            $table->string('movid')->nullable(true);
            $table->string('fechaemision')->nullable(true);
            $table->integer('almacen_id')->nullable(true);
            $table->integer('condicion_id')->nullable(true);
            $table->decimal('total', 10, 2)->nullable(true);
            $table->string('ejercicio')->nullable(true);
            $table->string('periodo')->nullable(true);
            $table->string('referencia')->nullable(true);
            $table->string('origen')->nullable(true);
            $table->string('origenid')->nullable(true);
            $table->string('origentipo')->nullable(true);
            $table->string('observaciones')->nullable(true);
            $table->string('estatus')->nullable(true);
            $table->string('importe')->nullable(true);
            $table->string('impuestos')->nullable(true);
            $table->string('tipoventa')->nullable(true);
            $table->string('comentarios')->nullable(true);
            $table->integer('descuentoglobal_id')->nullable(true);
            $table->unsignedBigInteger('id_cliente');
            $table->unsignedBigInteger('id_usuario');
            $table->timestamps();

            $table->foreign('id_cliente')->references('id')->on('clientes')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_usuario')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
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
