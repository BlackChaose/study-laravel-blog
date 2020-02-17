<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\ArticleCategory;
use Faker\Generator as Faker;

$factory->define(ArticleCategory::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence,
        'state' => 'published',
        'description' => $faker->text
    ];
});
