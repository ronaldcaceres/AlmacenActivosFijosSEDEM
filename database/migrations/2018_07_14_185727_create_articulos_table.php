<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulos', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('partida_id')->unsigned();
            $table->integer('categoria_id')->unsigned();
            $table->string('codigo_articulo');
            $table->string('descripcion',300);
            $table->integer('tipo_articulo_id')->unsigned();
            $table->boolean('stock_muestra');
            $table->integer('unidad_id')->unsigned();
            $table->integer('presentacion_id')->unsigned();
            $table->boolean('estado');
            $table->string('usuario_creacion');
            $table->string('usuario_modificacion');
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
        Schema::dropIfExists('articulos');
    }
}
