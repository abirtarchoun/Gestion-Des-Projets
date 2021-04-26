<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Projet;
use App\Enseignant;
use Faker\Generator as Faker;

$factory->define(Projet::class, function (Faker $faker) {
    return [
        
        'libelle'=>$faker->word,
        'sujet'=>$faker->sentence,
        'enseignant_id'=>Enseignant::get('id')->random(),

    ];
});
