<?php

use App\EtudiantNequipe;
use Illuminate\Database\Seeder;

class EtudiantNequipesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(EtudiantNequipe::class,9)->create();
    }
}
