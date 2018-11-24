<?php

use Faker\Generator as Faker;

use App\User;
use App\Models\Category;

$factory->define(App\Models\Question::class, function (Faker $faker) {
    $title = $faker->sentence;
    return [
        'title' => $title,
        'slug' => str_slug($title),
        'body' => $faker->text,
        'category_id' =>
            function () {
            return Category::all()->random();
        },
        'user_id' =>
            function () {
            return User::all()->random();
        }
    ];
});
