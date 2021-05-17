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
        'department' =>$faker->randomElement(['Informatique', 'Génie Mecanique', 'Génie Electrique', 'Génie de Procédés', 'Sciences économiques et Gestion']),
        'picture' => $faker->imageUrl,
        'phone' => $faker->e164PhoneNumber,
        'admission_date' => $faker->date
        //'username'=>$faker->word,
        //'password' =>$faker->password 
    ];
});
