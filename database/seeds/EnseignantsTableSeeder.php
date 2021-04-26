<?php
use App\Enseignant;
use Illuminate\Database\Seeder;


class EnseignantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Enseignant::class,12)->create();
    }
}
