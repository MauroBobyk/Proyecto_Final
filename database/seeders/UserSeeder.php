<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
   /*      // Elimina los registros existentes en la tabla users
        DB::table('users')->truncate(); */

        // Inserta el usuario Administrador
        DB::table('users')->insert([
            'name' => 'Administrador',
            'password' => Hash::make('123456'),
        ]);
    }
}