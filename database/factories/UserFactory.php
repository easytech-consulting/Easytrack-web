<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use Illuminate\Support\Str;
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

$factory->define(User::class, function (Faker $faker) {
    $is_admin = $faker->randomElement(['1','2']);
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'username' => $faker->unique()->userName,
        'tel' => $faker->unique()->phoneNumber,
        'cni_number' => $faker->unique()->ean8,
        'contact_name' => $faker->randomElement([
            $faker->name, ''
        ]),
        'contact_tel' => $faker->randomElement([
            $faker->phoneNumber, ''
        ]),
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
        'is_admin' => $is_admin,
        'address' => $faker->address,
    ];
});
