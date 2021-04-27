<?php

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
        factory(EtudiantProjet::class,9);
    }
}
