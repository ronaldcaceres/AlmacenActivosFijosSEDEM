<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProducionOrdenesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producion_ordenes', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('solictud_id')->unsigned();
            $table->string('codigo_orden_produccion',20);
            $table->integer('id_proveedor_artiulo');
            $table->integer('cantidad');
            $table->dateTime('fecha_inicio');
            $table->dateTime('fecha_fin');
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
        Schema::dropIfExists('producion_ordenes');
    }
}
