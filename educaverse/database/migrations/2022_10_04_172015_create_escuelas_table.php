<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEscuelasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('escuelas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 70);
            $table->string('direccion', 70);
            $table->string('col_fracc', 70);
            $table->unsignedInteger('cp');
            $table->string('ciudad', 70);
            $table->string('estado', 70);
            $table->string('pais', 70);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('escuelas');
    }
}
