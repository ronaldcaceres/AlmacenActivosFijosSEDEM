<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignToAlmacenes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('almacenes', function(Blueprint $table){
            $table->foreign('tipo_almacen_id')->references('id')->on('almacen_tipos');
            $table->foreign('regional_id')->references('id')->on('regionales');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('almacenes', function(Blueprint $table){
            $table->dropForeign(['tipo_almacen_id']);
            $table->dropForeign(['regional_id']);
        });
    }
}
