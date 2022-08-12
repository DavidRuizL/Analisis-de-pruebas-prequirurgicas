<?php

namespace Database\Seeders;

 use Illuminate\Database\Console\Seeds\WithoutModelEvents;
 use App\Models\Control;
use Illuminate\Database\Seeder;


class ControlSedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $control1 = new Control;
        //Nivel1
        $control1 ->tp1=10.6;
        $control1 ->ptt1=24.1;
        $control1 ->at1=89.1;
        $control1 ->tt1=13.7;
        $control1 ->fb1=276;
        //Nivel2
        $control1 ->tp2=32.3;
        $control1 ->ptt2=48.9;
        $control1 ->at2=48.3;
        $control1 ->tt2=18.4;
        $control1 ->fb2=123;
        //Nivel3
        $control1 ->tp3=45.2;
        $control1 ->ptt3=55.9;
        $control1 ->at3=34.0;
        $control1 ->tt3=21.9;
        $control1 ->fb3=84.9;
        $control1 ->save();


        $control2= New Control;
        //Nivel1
        $control2 ->tp1=15.8;
        $control2 ->ptt1=36.1;
        $control2 ->at1=134;
        $control2 ->tt1=20.5;
        $control2 ->fb1=414;
        //Nivel2
        $control2 ->tp2=48.4;
        $control2 ->ptt2=73.4;
        $control2 ->at2=72.4;
        $control2 ->tt2=27.6;
        $control2 ->fb2=184;
        //Nivel3
        $control2 ->tp3=67.6;
        $control2 ->ptt3=83.8;
        $control2 ->at3=51.0;
        $control2 ->tt3=32.9;
        $control2 ->fb3=127;
        $control2 ->save();
    }
}
