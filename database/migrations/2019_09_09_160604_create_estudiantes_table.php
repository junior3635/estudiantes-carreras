<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstudiantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('apellidos');
            $table->integer('sexo');
            $table->date('fecha_nac');
            $table->string('email')->unique();
            $table->integer('pais');
            $table->integer('estado');
            $table->integer('ciudad');
            $table->unsignedInteger('carrera');
            $table->foreign('carrera')->references('id')->on('carreras');
            $table->unsignedInteger('estatu');
            $table->foreign('estatu')->references('id')->on('estatus');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estudiantes');
    }
}
