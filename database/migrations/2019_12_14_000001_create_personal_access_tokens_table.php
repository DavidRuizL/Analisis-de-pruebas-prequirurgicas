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
        Schema::create('controles', function (Blueprint $table) {
            $table->id();
            //Nivel 1
            $table->float('tp1');//Tiampo de Protrombina
            $table->float('ptt1');//Tiempo de Tromboplastina Parcial
            $table->float('at1');//Antitrombina III
            $table->float('tt1');//Tiempo de Trombina
            $table->float('fb1');//Fibrinógeno)
            //Nivel 2
            $table->float('tp2');//Tiampo de Protrombina
            $table->float('ptt2');//Tiempo de Tromboplastina Parcial
            $table->float('at2');//Antitrombina III
            $table->float('tt2');//Tiempo de Trombina
            $table->float('fb2');//Fibrinógeno)
            //Nivel 3
            $table->float('tp3');//Tiampo de Protrombina
            $table->float('ptt3');//Tiempo de Tromboplastina Parcial
            $table->float('at3');//Antitrombina III
            $table->float('tt3');//Tiempo de Trombina
            $table->float('fb3');//Fibrinógeno)
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
        Schema::dropIfExists('controles');
    }
};
