<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignToSolicitudDetalles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('solicitud_detalles', function(Blueprint $table){
            $table->foreign('solicitudes_id')->references('id')->on('solicitudes');
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
        Schema::table('solicitud_detalles', function(Blueprint $table){
            $table->dropForeign(['solicitudes_id']);
            $table->dropForeign(['articulo_id']);
        });
    }
}
