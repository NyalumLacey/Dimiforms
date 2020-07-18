<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\models\Usuario;
use Faker\Generator as Faker;

$factory->define(Usuario::class, function (Faker $faker) {
    return [
        'Nombres' => $faker->firstName,
        'ApellidoPaterno' => $faker->lastName,
        'ApellidoMaterno' => $faker->lastName,
        'Correo' => $faker->safeEmail,
        'password' => $faker->password,
        'IDRol' => '1'
    ];
});
