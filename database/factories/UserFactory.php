<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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

$factory->define(User::class, function (Faker $faker) {
    $name=$faker->name;
    $nameSlug=Str::slug($name,'-');
    return [
        'name' => $name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'role'=>rand(0,8),
        'approved'=>rand(0,1),
        'mobile_number'=>rand(6300000000,9999999999),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
        'profile_pic'=>Str::random(15).'.jpg',
        'college'=>'College of '.$faker->sentence(rand(5,8)),
        'district_code'=>rand(11,96)
    ];
});
