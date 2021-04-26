<?php
use App\Equipe;
use Illuminate\Database\Seeder;

class EquipesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {    factory(Equipe::class,6)->create();
        
    }
}
