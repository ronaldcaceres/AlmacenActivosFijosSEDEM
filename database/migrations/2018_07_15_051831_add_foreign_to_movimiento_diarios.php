<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignToMovimientoDiarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('movimiento_diarios', function(Blueprint $table){
            $table->foreign('solicitud_id')->references('id')->on('solicitudes');
            $table->foreign('almacen_id')->references('id')->on('almacenes');
            $table->foreign('proveedor_articulo_id')->references('id')->on('proveedor_articulos');
            $table->foreign('unidad_id')->references('id')->on('unidades');
            $table->foreign('tipo_operacion_id')->references('id')->on('tipo_operaciones');
            $table->foreign('tipo_movimiento_id')->references('id')->on('tipo_movimiento_diarios');
            $table->foreign('lote_id')->references('id')->on('lotes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('movimiento_diarios', function(Blueprint $table){
            $table->dropForeign(['solicitud_id']);
            $table->dropForeign(['almacen_id']);
            $table->dropForeign(['proveedor_articulo_id']);
            $table->dropForeign(['unidad_id']);
            $table->dropForeign(['tipo_operacion_id']);
            $table->dropForeign(['tipo_movimiento_id']);
            $table->dropForeign(['lote_id']);
        });
    }
}
