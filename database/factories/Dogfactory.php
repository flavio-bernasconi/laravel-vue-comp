<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Dog;

$factory->define(Dog::class, function (Faker $faker) {
    return [
      'name' => $faker -> firstName,
      'race' => $faker -> word,
      'age' => rand(1, 20),
      'owner' => $faker -> name,
      'description'=> $faker -> sentence(200, true)
    ];
});
