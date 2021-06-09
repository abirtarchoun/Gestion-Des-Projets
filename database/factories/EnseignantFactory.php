<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Enseignant;
use Faker\Generator as Faker;

$factory->define(Enseignant::class, function (Faker $faker) {
    return [

        'nom'=>$faker->firstName,
        'prenom'=>$faker->lastName,
        'email' =>$faker->unique()->email,
        'gender'=>$faker->randomElements(['male', 'female'])[0],
        'department' =>$faker->randomElement(['Informatique', 'GénieMecanique', 'GénieElectrique', 'GéniedeProcédés']),
        'picture' => 'http://lorempixel.com/640/480/people/'.$faker->randomDigitNotNull,
        'phone' => $faker->e164PhoneNumber,
        'projects' => $faker->randomDigit,
        'tasks' => $faker->randomDigit,
        'uploads' => $faker->randomDigit,
        'adresse' => $faker->address,
        'joining_date' => $faker->date
        //'username'=>$faker->word,
        //'password' =>$faker->password 
    ];
});
