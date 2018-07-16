<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignToArticulos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('articulos', function(Blueprint $table){
            $table->foreign('partida_id')->references('id')->on('partidas');
            $table->foreign('categoria_id')->references('id')->on('categorias');
            $table->foreign('tipo_articulo_id')->references('id')->on('tipo_articulos');
            $table->foreign('unidad_id')->references('id')->on('unidades');
            $table->foreign('presentacion_id')->references('id')->on('presentaciones');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('articulos', function(Blueprint $table){
            $table->dropForeign(['partida_id']);
            $table->dropForeign(['categoria_id']);
            $table->dropForeign(['tipo_articulo_id']);
            $table->dropForeign(['unidad_id']);
            $table->dropForeign(['presentacion_id']);
        });
    }
}
