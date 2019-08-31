<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRelacionColegiosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relacion_colegios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('historia_academicas_id')->unsigned();
            $table->string('grado');
            $table->string('ano');
            $table->string('nombre_colegios');
            $table->string('ciudad');
            $table->string('motivo_retiro');
            $table->string('tipo_intitucion');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('historia_academicas_id')->references('id')->on('historia_academicas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('relacion_colegios');
    }
}
