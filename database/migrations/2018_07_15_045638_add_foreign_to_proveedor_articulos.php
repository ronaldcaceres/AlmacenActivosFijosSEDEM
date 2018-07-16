<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignToProveedorArticulos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('proveedor_articulos', function(Blueprint $table){
            $table->foreign('proveedor_id')->references('id')->on('proveedores');
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
        Schema::table('proveedor_articulos', function(Blueprint $table){
            $table->dropForeign(['proveedor_id']);
            $table->dropForeign(['articulo_id']);
        });
    }
}
