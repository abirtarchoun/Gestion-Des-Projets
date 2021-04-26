<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Dépot;
use App\Enseignant;
use App\Etudiant;
use App\Projet;
use App\Equipe;
use Faker\Generator as Faker;

$factory->define(Dépot::class, function (Faker $faker) {
    return [
    

           'datedepot'=>$faker->date,
           'datefinal'=>$faker->date,
           'note'=>$faker->randomfloat(2),
           'sujet'=>$faker->sentence,
           'contenu'=>$faker->word,
           'enseignant_id'=>Enseignant::get('id')->random(),
           'etudiant_id'=>Etudiant::get('id')->random(),
           'projet_id'=>Projet::get('id')->random(),
           'equipe_id'=>Equipe::get('id')->random(),
     
    ];
});
