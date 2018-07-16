<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMovimientoAlmacenTiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movimiento_almacen_tipos', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('movimiento_tipo_id')->unsigned();
            $table->integer('tipo_almacen_id')->unsigned();
            $table->boolean('estado');
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
        Schema::dropIfExists('movimiento_almacen_tipos');
    }
}
