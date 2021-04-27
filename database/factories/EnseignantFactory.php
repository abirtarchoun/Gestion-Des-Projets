<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Enseignant;
use Faker\Generator as Faker;

$factory->define(Enseignant::class, function (Faker $faker) {
    return [

        'nom'=>$faker->firstName,
        'prenom'=>$faker->lastName,
        'email' =>$faker->unique()->email,
        'username'=>$faker->word,
        'password' =>$faker->password 
    ];
});
