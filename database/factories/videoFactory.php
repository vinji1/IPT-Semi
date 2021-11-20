<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Videos;

$factory->define(Videos::class, function (Faker $faker) {
        return[
        'title'=>$this->faker->word,
        'description'=>$this->faker->word,
        'duration'=>rand(1, 250),
        'rating'=>rand(1, 10),
    ];  
});
