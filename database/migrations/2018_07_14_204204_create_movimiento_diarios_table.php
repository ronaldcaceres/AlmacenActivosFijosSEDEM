<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMovimientoDiariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movimiento_diarios', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('solicitud_id')->unsigned();
            $table->integer('almacen_id')->unsigned();
            $table->integer('proveedor_articulo_id')->unsigned();
            $table->double('cantidad');
            $table->integer('unidad_id')->unsigned();
            $table->double('saldo');
            $table->integer('tipo_operacion_id')->unsigned();
            $table->integer('tipo_movimiento_id')->unsigned();
            $table->double('costo_compra_unitario');
            $table->double('costo_compra_total');
            $table->double('costo_ponderado_unitario');
            $table->double('costo_ponderado_total');
            $table->boolean('estado');
            $table->integer('lote_id')->unsigned();
            $table->string('usuario_creacion',10);
            $table->string('usuario_modificacion',10);
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
        Schema::dropIfExists('movimiento_diarios');
    }
}
