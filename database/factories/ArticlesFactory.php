<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [

            'title'=> $faker->words(2,true),
            'contents' => $faker->paragraph(3,true),

    ];
});
