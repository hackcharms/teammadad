<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Blog;
use App\Comment;
use App\User;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'user_id'=>User::pluck('id')->random(),
        'blog_id'=>Blog::pluck('id')->random(),
        'body'=>$faker->paragraph(rand(2,5)),
    ];
});
