<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Job;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\File;

$factory->define(Job::class, function (Faker $faker) {

    if (!file_exists('public/storage/job')) {
        File::makeDirectory('public/storage/job');
    }

    return [
       'title'=>$faker->title,
      'details'=>$faker->text,
       'price'=>$faker->randomNumber,
        'photo' => $faker->image('public/storage/job',640,480,null, false)
    ];
});
