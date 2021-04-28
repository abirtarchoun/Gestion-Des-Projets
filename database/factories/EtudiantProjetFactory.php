<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\EtudiantProjet;
use App\Etudiant;

use App\Projet;
use Faker\Generator as Faker;

$factory->define(EtudiantProjet::class, function (Faker $faker) {
    return [
        'etudiant_id'=>Etudiant::get('id')->random() ,
        'projet_id'=>Projet::get('id')->random()     
     ];
});
