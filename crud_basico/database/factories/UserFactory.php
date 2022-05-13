<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Produto::class, function (Faker $faker) {
    return [
        'nome' => $faker->name,
        'custo' => $faker -> randomElement ([ 100 , 120 , 150 , 180 , 200 , 230 ]) * 100,
        'preco' => $faker  -> randomElement ([ 100 , 120 , 150 , 180 , 200 , 230 ]) * 100,
        'quantidade' => $faker  -> randomElement ([ 100 , 120 , 150 , 180 , 200 , 230 ]) * 100
    ];
});
