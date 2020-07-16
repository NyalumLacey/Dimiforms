<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuarios')->insert([
            'Nombres' => 'Sthefany Guadalupe',
            'ApellidoPaterno' => 'Reyna',
            'ApellidoMaterno' => 'Rangel',
            'Correo' => 'nyalum.lacey@gmail.com',
            'Contrasena' => bcrypt('134567890'),
            'IDRol' => '1'
        ]);
    }
}
