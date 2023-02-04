<?php

namespace Database\Seeders;

use App\Models\User; //Llamada al modelo user para crear usuario
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //cada vez que se levante la BD, creara al usuario
        User::create([
            'name' => 'Emilio Ibarra Valdez',
            'email' => 'st19030093@utlaguna.edu.mx',
            'password' => bcrypt('123456789')
        ]);
    }
}
