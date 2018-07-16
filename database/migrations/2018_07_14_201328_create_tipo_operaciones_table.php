<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoOperacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_operaciones', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('descripcion',200);
            $table->boolean('estado');
            $table->string('usuario_creacion');
            $table->string('usuario_modificacion');
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
        Schema::dropIfExists('tipo_operaciones');
    }
}
