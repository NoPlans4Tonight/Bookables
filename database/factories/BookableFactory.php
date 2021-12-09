<?php

//namespaces
namespace Database\Factories;

//models
use App\Models\Bookable;

//laravel dependecies
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use Faker\Generator as Faker;



$factory->define(Bookable::class, function(Faker $faker) {
    $suffix = [
        'Villa',
        'House',
        'Cottage',
        'Luxury Villas',
        'Cheap Houses',
        'Rooms',
        'Cheap Rooms',
        'Luxury Rooms',
        'Fancy ROoms',
    ];

    return [
        'title' => $faker->city . ' ' . Arr::random($suffix),
        'description' => $faker->text(),
    ];
});
