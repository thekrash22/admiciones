<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHermanosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hermanos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('aspirantes_id')->unsigned();
            $table->string('primer_nombre');
            $table->string('segundo_nombre');
            $table->string('primer_apellido');
            $table->string('segundo_apellido');
            $table->string('grado');
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
        Schema::drop('hermanos');
    }
}
