<?php

namespace Database\Seeders;

 use Illuminate\Database\Console\Seeds\WithoutModelEvents;
 use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ControlSedeer::class);
        $user1 = new User;
        $user1 ->documento ="1036672609";
        $user1 ->nombre ="David";
        $user1 ->apellido="Ruiz";
        $user1 ->eps="SANITAS";
        $user1 ->genero="Masculino";
        $user1 ->edad=25;
        $user1 ->tp=35;
        $user1 ->ptt=25;
        $user1 ->at=70.3;
        $user1 ->tt=20.5;
        $user1 ->fb=167;
        $user1 ->save();

        $user2= new User;
        $user2->documento ="1032893492";
        $user2->nombre ="Sara";
        $user2->apellido="Rios";
        $user2 ->eps="SURA";
        $user2 ->genero="Femenino";
        $user2->edad=23;
        $user2->tp=48;
        $user2->ptt=33;
        $user2->at=73.5;
        $user2->tt=15.4;
        $user2->fb=190;
        $user2->save();

        $user3 = new User;
        $user3 ->documento ="1033856292";
        $user3 ->nombre ="Juan";
        $user3 ->apellido="Gallo";
        $user3 ->eps="NUEVA EPS";
        $user3 ->genero="Masculino";
        $user3 ->edad=24;
        $user3 ->tp=30;
        $user3 ->ptt=57;
        $user3 ->at=100.2;
        $user3 ->tt=18;
        $user3 ->fb=345;
        $user3 ->save();

    }
}
