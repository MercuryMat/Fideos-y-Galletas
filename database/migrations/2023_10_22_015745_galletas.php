<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Galletas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galletas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('sabor');
            $table->string('marca');
            $table->integer('precioPaquete');
            $table->string('pesoPaquete');
            $table->integer('cantidadPaquetesStock');
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
        Schema::dropIfExists('users');
    }
}
