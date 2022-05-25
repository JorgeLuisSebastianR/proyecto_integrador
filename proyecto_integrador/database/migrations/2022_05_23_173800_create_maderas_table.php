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
        Schema::create('maderas', function (Blueprint $table) {
            $table->id();
            $table->String('Nombre', 10);
            $table->String('Color', 15);
            $table->String('Pulgada', 30);
            $table->Integer('Canditidad');
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
        Schema::dropIfExists('maderas');
    }
};
