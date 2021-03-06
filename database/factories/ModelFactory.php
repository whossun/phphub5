<?php

use App\Models\User;
use App\Models\Topic;
use App\Models\Reply;
use Carbon\Carbon;

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

$factory->define(User::class, function (Faker\Generator $faker) {
    return [
        'github_url'           => $faker->url,
        'city'                 => $faker->city,
        'name'                 => $faker->userName,
        'github_name'          => $faker->userName,
        'twitter_account'      => $faker->userName,
        'company'              => $faker->userName,
        'personal_website'     => $faker->url,
        'image_url'            => $faker->url,
        'introduction'         => $faker->sentence,
        'email'                => $faker->email,
        'created_at'           => Carbon::now()->toDateTimeString(),
        'updated_at'           => Carbon::now()->toDateTimeString(),
    ];
});

$factory->define(Topic::class, function (Faker\Generator $faker) {
    return [
        'title'      => $faker->sentence(),
        'body'       => $faker->text(),
        'created_at' => Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon::now()->toDateTimeString(),
    ];
});

$factory->define(Reply::class, function (Faker\Generator $faker) {
    $body = $faker->text();
    return [
        'body'          => $body,
        'body_original' => $body,
        'created_at'    => Carbon::now()->toDateTimeString(),
        'updated_at'    => Carbon::now()->toDateTimeString(),
    ];
});
