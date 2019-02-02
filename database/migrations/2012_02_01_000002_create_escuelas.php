<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEscuelas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('escuelas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('direccion');
            $table->string('telefonos');
            $table->string('correo');
            $table->string('sitio_web');
            $table->string('descripcion');
            $table->string('horarios');
            $table->string('modalidad');
            $table->string('urls_videos');
            $table->string('logo');
            $table->string('imagen_cabecera');
            $table->string('galeria_imagenes');
            $table->integer('id_red_social')->unsigned()->index();;
            $table->foreign('id_red_social')->references('id')->on('redes_sociales');
            $table->integer('id_escuela_categoria')->unsigned()->index();
            $table->foreign('id_escuela_categoria')->references('id')->on('escuela_categoria')->onDelete('cascade');
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
        Schema::dropIfExists('escuelas');
    }
}
