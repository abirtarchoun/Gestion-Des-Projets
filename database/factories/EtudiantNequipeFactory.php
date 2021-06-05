<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Etudiant;
use App\Equipe;
use App\EtudiantNequipe;
use App\Projet;
use Faker\Generator as Faker;

$factory->define(EtudiantNequipe::class, function (Faker $faker) {
    return [

        'etudiant_id'=>Etudiant::get('id')->random() ,
        'equipe_id'=>Equipe::get('id')->random()
    ];
});
