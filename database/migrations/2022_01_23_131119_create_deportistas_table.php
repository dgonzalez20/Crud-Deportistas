<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeportistasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deportistas', function (Blueprint $table) {
            $table->id();
            $table->string("Nombre");
            $table->string("Apellido");
            $table->string("Dirección",);
            $table->string("Temporadas");
            $table->string("Coste_Licencia");
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
        Schema::dropIfExists('deportistas');
    }
}
