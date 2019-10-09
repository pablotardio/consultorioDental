<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCitasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fecha');
            $table->string('hora_inicio');
            $table->string('hora_fin');
            $table->integer('Odontologo')->unsigned();
            $table->integer('Paciente')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('Odontologo')->references('id')->on('odontologos');
            $table->foreign('Paciente')->references('id')->on('pacientes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('citas');
    }
}
