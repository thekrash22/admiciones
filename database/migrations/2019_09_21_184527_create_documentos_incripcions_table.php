<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDocumentosIncripcionsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documentos_incripcions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('solicitud_admision');
            $table->string('procedencia');
            $table->string('certificado_registro_civil');
            $table->string('informe_academico');
            $table->string('paz_salvo');
            $table->string('recibo_inscripcion');
            $table->integer('aspirantes_id')->unsigned();
            $table->timestamps();
            $table->foreign('aspirantes_id')->references('id')->on('aspirantes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('documentos_incripcions');
    }
}
