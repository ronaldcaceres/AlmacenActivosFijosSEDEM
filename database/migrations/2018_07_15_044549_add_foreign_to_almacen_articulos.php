<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignToAlmacenArticulos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('almacen_articulos', function(Blueprint $table){
            $table->foreign('almacen_id')->references('id')->on('almacenes');
            $table->foreign('articulo_id')->references('id')->on('articulos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('almacen_articulos', function(Blueprint $table){
            $table->dropForeign(['almacen_id']);
            $table->dropForeign(['articulo_id']);
        });
    }
}
