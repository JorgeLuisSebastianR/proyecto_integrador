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
            $table->text('Nombre',20);
            $table->decimal('Tamaño', 8, 2, true);
            $table->text('Color',20);
            $table->decimal('Precio', 8, 2, true)->default(0.00);
            $table->text('Descripcion',50)->nullable();
            $table->string('Tipo', 20) ;
<<<<<<< HEAD
=======

>>>>>>> e0672415994de9b4480557de20a387fbcf1d4b3e
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
