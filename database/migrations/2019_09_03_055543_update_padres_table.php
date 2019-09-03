<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdatePadresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('padres', function (Blueprint $table) {
            $table->integer('aspirantes_id')->unsigned()->after('personas_id');
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
        Schema::table('padres', function($table) {
            $table->dropForeign(['aspirantes_id']);
            $table->dropColumn('aspirantes_id');
        });
    }
}
