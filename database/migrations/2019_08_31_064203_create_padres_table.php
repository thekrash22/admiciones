<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePadresTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('padres', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('personas_id')->unsigned();
            $table->string('direccion');
            $table->string('barrio');
            $table->integer('telefono');
            $table->integer('celular');
            $table->string('correo');
            $table->string('profesion');
            $table->string('nombre_empresa');
            $table->integer('telefono_empresa');
            $table->string('direccion_empresa');
            $table->boolean('es_acudiente');
            $table->timestamps();
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
        Schema::drop('padres');
    }
}
