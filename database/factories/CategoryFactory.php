<?php

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
    return [
        'name' => $faker->randomElement(['PHP', 'JAVA', 'JAVASCRIPT', 'PYTHON', 'DISEÑO WEB', 'MYSQL', 'BIGDATA']),
        'description' => $faker->sentence
    ];
});
