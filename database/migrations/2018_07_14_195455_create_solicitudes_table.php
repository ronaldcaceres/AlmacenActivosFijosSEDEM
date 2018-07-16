<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolicitudesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitudes', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('tipo_operacion_id')->unsigned();
            $table->string('usuario_solicitud',10);
            $table->string('codigo_solicitud',20);
            $table->dateTime('fecha_solictud');
            $table->integer('almacen_id_origen');
            $table->integer('almacen_id_destino');
            $table->string('usuario_autoriza',10);
            $table->dateTime('fecha_autoriza');
            $table->string('usuario_confirma',10);
            $table->dateTime('fecha_confirma');
            $table->integer('unidad_negocio_id');
            $table->string('estado_solicitud');
            $table->string('motivo',200);
            $table->string('glosa_pedido',300);
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
        Schema::dropIfExists('solicitudes');
    }
}
