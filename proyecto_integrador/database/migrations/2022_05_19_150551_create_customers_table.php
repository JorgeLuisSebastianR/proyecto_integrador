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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 20);
            $table->string('apellidoPaterno', 20);
            $table->string('apellidoMaterno', 20);
            $table->string('telefono', 10)->nullable();
            $table->string('correoElectronico', 50)->nullable();
            $table->string('calle', 50);
            $table->string('numeroCasa', 6);
            $table->string('colonia', 30);
            $table->string('municipio', 30);
            $table->string('codigoPostal', 5);
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
        Schema::dropIfExists('customers');
    }
};
