<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompetenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('competencias', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('categoria_id')->unsigned();
            $table->integer('sede_id')->unsigned();
            $table->integer('estadocompetencia_id')->unsigned();

            $table->string('nombre');
            $table->string('fecha');
            $table->string('lugar');
            $table->timestamps();

            $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete('cascade');

            $table->foreign('sede_id')->references('id')->on('sedes')->onDelete('cascade');

            $table->foreign('estadocompetencia_id')->references('id')->on('estadocompetencias')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('competencias');
    }
}
