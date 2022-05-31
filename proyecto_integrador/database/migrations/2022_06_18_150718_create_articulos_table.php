<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulos', function (Blueprint $table) {
            $table->id();
            //llave foranea
            $table->unsignedBigInteger('idMadera');
            $table->foreign('idMadera')->references('id')->on('maderas');
            //campos.
            $table->text('Nombre',20);
<<<<<<< HEAD
            $table->string('Tamaño', 20);
            $table->text('Color',20);
=======
            $table->string('Tamaño',15);
            $table->string('Color',20);
>>>>>>> 44998cb4ec74dce699a9e3ae018c75386acf34d0
            $table->decimal('Precio', 8, 2, true)->default(0.00);
            $table->text('Descripcion',50)->nullable();
            $table->string('Tipo', 20) ;
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
        Schema::dropIfExists('articulos');
    }
};
