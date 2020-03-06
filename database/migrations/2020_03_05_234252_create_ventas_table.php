<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVentasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->integer('id_v');
            $table->integer('id_p')->unsigned();
            $table->integer('id_producto')->unsigned();
            $table->integer('id_servicio')->unsigned();
            $table->foreign('id_p')->references('id_p')->on('prueba');
            $table->foreign('id_producto')->references('id_producto')->on('productos');
            $table->foreign('id_servicio')->references('id_servicio')->on('servicios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ventas');
    }
}
