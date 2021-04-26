<?php
use App\Etudiant;
use Illuminate\Database\Seeder;

class EtudiantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Etudiant::class,12)->create();
    }
}
