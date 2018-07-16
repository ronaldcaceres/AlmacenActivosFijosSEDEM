<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlmacenesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('almacenes', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('codigo_almacen',50);
            $table->string('nombre_almacen',50);
            $table->string('direccion_almacen',300);
            $table->string('descripcion_almacen',300);
            $table->integer('tipo_almacen_id')->unsigned();
            $table->integer('regional_id')->unsigned();
            $table->string('responsable',10);
            $table->string('usuario_creacion',10);
            $table->string('usuario_modificacion',10);
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
        Schema::dropIfExists('almacenes');
    }
}
