<?php
use App\Dépot;
use Illuminate\Database\Seeder;

class DépotsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Dépot::class,10)->create();
    }
}
