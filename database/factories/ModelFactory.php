<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(CodeEducation\Entities\User::class, function ($faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(CodeEducation\Entities\Client::class, function ($faker) {
    return [
        'name' => $faker->name,
        'responsible' => $faker->name,
        'email' => $faker->email,
        'phone' => $faker->phoneNumber,
        'address' => $faker->address,
        'obs' => $faker->sentence,
    ];
});

$factory->define(CodeEducation\Entities\Project::class, function ($faker) {
    $users = new CodeEducation\Entities\User;
    $users = $users->all()->lists('id');
    $clients = new CodeEducation\Entities\Client;
    $clients = $clients->all()->lists('id');

    return [
        'owner_id' => $faker->randomElement([1, 2, 3, 4, 5]), // $users
        'client_id' => $faker->randomElement([1, 2, 3, 4, 5]), // $clients
        'name' => $faker->name,
        'description' => $faker->sentence,
        'progress' => $faker->numberBetween(0, 100),
        'status' => $faker->boolean(),
        'due_date' => date('Y-m-d')
    ];
});