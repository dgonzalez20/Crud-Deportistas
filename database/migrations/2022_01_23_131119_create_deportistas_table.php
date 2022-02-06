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
            $table->string("Nombre",10);
            $table->string("Apellido",10);
            $table->string("Dirección",30);
            $table->integer("Temporadas");
            $table->decimal("Coste_Licencia",8,2);
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
