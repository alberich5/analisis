<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Servicio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('servicio', function (Blueprint $table) {
          $table->increments('id');
          $table->string('cliente');
          $table->string('contrato');
          $table->string('delegacion');
          $table->string('analisis_riesgos');
          $table->string('nombre_comercial');
          $table->string('sucursal');
          $table->string('domicilio');
          $table->string('municipio');
          $table->string('giro');
          $table->string('tipo');
          $table->string('status');
          $table->string('observacion');
          $table->string('rep_legal');
          $table->string('latitud');
          $table->string('longitud');
          $table->timestamps();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('servicio');
    }
}
