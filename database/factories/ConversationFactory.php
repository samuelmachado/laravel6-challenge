<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Conversation;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Conversation::class, function (Faker $faker) {
    return [
        'title' => $faker->name,
        'body' => $faker->paragraph
    ];
});
