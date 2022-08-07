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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('documento')->unique();
            $table->string('nombre');
            $table->string('apellido');
            $table->integer('edad')->unsigned()->nullable();
            $table->string('eps');
            $table->string('genero');
            $table->float('tp');//Tiampo de Protrombina
            $table->float('ptt');//Tiempo de Tromboplastina Parcial
            $table->float('at');//Antitrombina III
            $table->float('tt');//Tiempo de Trombina
            $table->float('fb');//Fibrinógeno)
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
};
