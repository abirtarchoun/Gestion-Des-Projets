<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Equipe;
use App\Projet;
use Faker\Generator as Faker;

$factory->define(Equipe::class, function (Faker $faker) {
    return [

        'libelle'=>$faker->word,
        'projet_id'=>Projet::get('id')->random(),
    ];
});
