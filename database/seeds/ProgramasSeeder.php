<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProgramasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('programas')->insert([
            'Programa' => 'Australia - Estudia y Trabaja'
        ]);

        DB::table('programas')->insert([
            'Programa' => 'Canadá - Viaja y Estudia'
        ]);

        DB::table('programas')->insert([
            'Programa' => 'Canadá - Viaja y Trabaja'
        ]);

        DB::table('programas')->insert([
            'Programa' => 'Cork - Estudia y Trabaja'
        ]);

        DB::table('programas')->insert([
            'Programa' => 'Dublin - Estudia y Trabaja'
        ]);

        DB::table('programas')->insert([
            'Programa' => 'España - Estadías Profesionales'
        ]);

        DB::table('programas')->insert([
            'Programa' => 'Estados Unidos - Viaja y Trabaja'
        ]);

        DB::table('programas')->insert([
            'Programa' => 'Grecia - Estadías Profesionales'
        ]);

        DB::table('programas')->insert([
            'Programa' => 'México - Estudia Español'
        ]);
    }
}
