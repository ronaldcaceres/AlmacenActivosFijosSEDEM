<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlmacenTiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('almacen_tipos', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('tipo_almacen',15);
            $table->string('descripcion',250);
            $table->boolean('materia_prima');
            $table->boolean('producto_final');
            $table->boolean('material_escritorio');
            $table->boolean('suministros');
            $table->boolean('transito');
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
        Schema::dropIfExists('almacen_tipos');
    }
}
