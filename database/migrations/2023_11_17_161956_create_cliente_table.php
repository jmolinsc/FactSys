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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('codigo');
            $table->string('nombre')->nullable(TRUE);
            $table->string('telefono', 30)->nullable(TRUE);
            $table->string('direccion')->nullable(TRUE);
            $table->string('dui')->nullable(TRUE);
            $table->string('nit')->nullable(TRUE);
            $table->string('nrc')->nullable(TRUE);
            $table->string('categoria')->nullable(TRUE);
            $table->string('familia')->nullable(TRUE);
            $table->string('grupo')->nullable(TRUE);
            $table->string('giro')->nullable(TRUE);
            $table->string('actividadeconomica')->nullable(TRUE);
            $table->string('email')->nullable(TRUE);
            $table->string('contacto')->nullable(TRUE);
            $table->string('pais')->nullable(TRUE);
            $table->string('departamento')->nullable(TRUE);
            $table->string('municipio')->nullable(TRUE);
            $table->string('colonia')->nullable(TRUE);
            $table->string('regimenfiscal')->nullable(TRUE);
            $table->string('tipo')->nullable(TRUE);
            $table->string('estatus')->nullable(TRUE);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
