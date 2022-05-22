<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('campinterias', function (Blueprint $table) {
            $table->id();
            $table->string('Telefono',10);
            $table->string('Calle',20);
            $table->string('NumeroExterior',6);
            $table->string('Colonia',30);
            $table->string('Municipio',15);
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('campinterias');
    }
};
