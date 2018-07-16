<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignToEntregaAutorizadas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('entrega_autorizadas', function(Blueprint $table){
            $table->foreign('solicitud_id')->references('id')->on('solicitudes');
            $table->foreign('motivo_entrega_id')->references('id')->on('motivo_entregas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('entrega_autorizadas', function(Blueprint $table){
            $table->dropForeign(['solicitud_id']);
            $table->dropForeign(['motivo_entrega_id']);
        });
    }
}
