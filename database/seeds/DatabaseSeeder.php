<?php

use Illuminate\Database\Seeder;
use App\models\Usuario;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        $this->call(RolesSeeder::class);
        $this->call(ProgramasSeeder::class);
        $this->call(UsuariosSeeder::class);

        $this->truncateTables([
            'usuarios', 
            'roles',
            'programas'
        ]);

        Model::unguard();
        factory('app\models\usuario', 10)->create();
        Model::reguard();
    }

    protected function truncateTables(array $tables) {
            
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        foreach ($tables as $table) {
            DB::table($table)->truncate();
        }
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
