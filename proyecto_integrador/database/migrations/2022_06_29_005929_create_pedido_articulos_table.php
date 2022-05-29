<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('pedido_articulos', function (Blueprint $table) {
            $table->id();
            // Clave forànea de Sucursal Carpinterìa
            $table->unsignedBigInteger('idPedido');
            $table->foreign('idPedido')->references('id')->on('pedidos');
            // Clave forànea de Sucursal Carpinterìa
            $table->unsignedBigInteger('idArticulo');
            $table->foreign('idArticulo')->references('id')->on('articulos');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pedido_articulos');
    }
};
