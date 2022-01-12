<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVeiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('veiculos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_marca');
            $table->foreign('id_marca')->references('id')->on('marca');
            $table->string('chassi', 50);
            $table->string('placa', 25);
            $table->integer('numero_portas');
            $table->unsignedBigInteger('id_cor');
            $table->foreign('id_cor')->references('id')->on('cor');
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
        Schema::dropIfExists('marcveiculos');
    }
}
