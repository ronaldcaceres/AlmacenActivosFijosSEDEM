<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMovimientoTiposIdToMovimientoAlmacenTipos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('movimiento_almacen_tipos', function(Blueprint $table){
            $table->foreign('movimiento_tipo_id')->references('id')->on('movimiento_tipos');
            $table->foreign('tipo_almacen_id')->references('id')->on('almacen_tipos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('movimiento_almacen_tipos', function(Blueprint $table){
            $table->dropForeign(['movimiento_tipo_id']);
            $table->dropForeign(['tipo_almacen_id']);
        });
    }
}
