<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAspirantesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aspirantes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('personas_id')->unsigned();
            $table->string('grado');
            $table->string('numero_formulario');
            $table->date('fecha_inscripcion');
            $table->string('direccion');
            $table->string('barrio');
            $table->string('telefono');
            $table->string('municipio');
            $table->string('zona');
            $table->string('estrato');
            $table->string('eps');
            $table->string('Foto');
            $table->string('reponsable');
            $table->string('religion');
            $table->string('observacion');
            $table->softDeletes();
            $table->foreign('personas_id')->references('id')->on('personas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('aspirantes');
    }
}
