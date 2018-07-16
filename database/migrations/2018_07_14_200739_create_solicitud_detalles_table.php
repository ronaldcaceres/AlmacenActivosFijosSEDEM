<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolicitudDetallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitud_detalles', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->Integer('solicitudes_id')->unsigned();
            $table->Integer('articulo_id')->unsigned();
            $table->Integer('cantidad');
            $table->boolean('estado');
            $table->double('precio');
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
        Schema::dropIfExists('solicitud_detalles');
    }
}
