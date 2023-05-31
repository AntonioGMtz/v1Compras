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
        Schema::create('proveedores', function (Blueprint $table) {
            $table->id();
            $table->string('razonsocial');
            $table->string('email');
            $table->string('nombrecomercial');
            $table->integer('teluno');
            $table->integer('teldos');
            $table->string('rfc');
            $table->string('clabe');
            $table->string('sucursal');
            $table->string('pais');
            $table->string('estado');
            $table->string('municipio');
            $table->string('localidad');
            $table->string('calle');
            $table->string('colonia');
            $table->string('cp');
            $table->integer('numint');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proveedores');
    }
};
