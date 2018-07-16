<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntregaAutorizadasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entrega_autorizadas', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('solicitud_id')->unsigned();
            $table->integer('motivo_entrega_id')->unsigned();
            $table->string('datos_contacto');
            $table->dateTime('fecha_entrega');
            $table->dateTime('fecha_devolucion');
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
        Schema::dropIfExists('entrega_autorizadas');
    }
}
