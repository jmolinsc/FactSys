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
        Schema::create('mov_tipos', function (Blueprint $table) {
            $table->id();
            $table->string('consecutivo')->nullable(true);
            $table->string('naceenmodulo')->nullable(true);
            $table->string('mov')->nullable(true);
            $table->string('estatus')->nullable(true);
            $table->string('conceptos')->nullable(true);
            $table->string('observaciones')->nullable(true);
            $table->string('reporte_default')->nullable(true);
            $table->string('reporte_pendiente')->nullable(true);
            $table->string('reporte_concluido')->nullable(true);
            $table->string('reporte_cancelado')->nullable(true);
            $table->unsignedBigInteger('id_modulo')->nullable(true);
            $table->unsignedBigInteger('id_comportamiento')->nullable(true);
            $table->timestamps();

            $table->foreign('id_modulo')->references('id')->on('modulos')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_comportamiento')->references('id')->on('comportamientos')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mov_tipos');
    }
};
