<?php
use App\EtudiantProjet;
use Illuminate\Database\Seeder;

class EtudiantProjetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(EtudiantProjet::class,9)->create();
    }
}
