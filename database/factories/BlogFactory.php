<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Blog;
use Faker\Generator as Faker;

$factory->define(Blog::class, function (Faker $faker) {
    return [
        'title'=>$faker->paragraph(2),
        'body'=>$faker->paragraph(rand(7,10)),
        // 'comment_count'=>rand(10,100),
    ];
});
