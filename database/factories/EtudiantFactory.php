<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Etudiant;
use Faker\Generator as Faker;

$factory->define(Etudiant::class, function (Faker $faker) {
    return [
        'nom'=>$faker->firstName,
        'prenom'=>$faker->lastName,
        'email' =>$faker->unique()->email,
        'gender' =>$faker->randomElements(['male', 'female'])[0],
        'picture' => 'http://lorempixel.com/640/480/people/'.$faker->randomDigitNotNull,
        'department' =>$faker->randomElement(['Informatique', 'GénieMecanique', 'GénieElectrique', 'GéniedeProcédés']),
        'picture' => $faker->imageUrl,
        'phone' => $faker->e164PhoneNumber,
        'admission_date' => $faker->date
        //'username'=>$faker->word,
        //'password' =>$faker->password 
    ];
});
