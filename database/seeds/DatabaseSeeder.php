<?php

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
        // $this->call(UsersTableSeeder::class);
        $this->call(EnseignantsTableSeeder::class);
        $this->call(EtudiantsTableSeeder::class);
        $this->call(ProjetsTableSeeder::class);
        $this->call(EquipesTableSeeder::class);
        $this->call(DépotsTableSeeder::class);
        $this->call(EtudiantProjetsTableSeeder::class);
        $this->call(EtudiantNequipesTableSeeder::class);
    }
}
