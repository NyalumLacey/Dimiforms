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

        //$Usuarios = factory(App\models\Usuario::class, 3)->create();

        DB::table('usuarios')->insert([
            'Nombres' => 'ADMIN',
            'ApellidoPaterno' => 'Ad',
            'ApellidoMaterno' => 'min',
            'Correo' => 'admin@example.com',
            'password' => bcrypt('root'),
            'IDRol' => '1'
        ]);
    }
}
