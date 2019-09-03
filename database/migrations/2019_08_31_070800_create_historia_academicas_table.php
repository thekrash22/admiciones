<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHistoriaAcademicasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historia_academicas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('aspirantes_id')->unsigned();
            $table->string('colegio_procedencia');
            $table->string('grados_repetidos')->nullable();
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
        Schema::drop('historia_academicas');
    }
}
