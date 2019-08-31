<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDocumentosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documentos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('aspirantes_id')->unsigned();
            $table->string('tarjeta_identidad');
            $table->string('costancia_comportamiento');
            $table->string('certificado_medico');
            $table->string('afiliacion_salud');
            $table->string('cedula_papas');
            $table->string('carnet_vacunacion');
            $table->string('examen_aud_vis');
            $table->string('paz_salvo');
            $table->string('informe_final');
            $table->string('certificado_notas');
            $table->string('simat');
            $table->timestamps();
            $table->softDeletes();
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
        Schema::drop('documentos');
    }
}
