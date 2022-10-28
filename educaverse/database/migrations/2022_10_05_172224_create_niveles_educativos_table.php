<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNivelesEducativosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('niveles_educativos', function (Blueprint $table) {
            $table->id();
            $table->string('grado', 40);
            $table->string('nivel', 40);
            $table->unsignedBigInteger('escuela_id');
            $table->foreign('escuela_id')->references('id')->on('escuelas')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('niveles_educativos');
    }
}
