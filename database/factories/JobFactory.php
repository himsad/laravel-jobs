<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Job;
use Faker\Generator as Faker;

$factory->define(Job::class, function (Faker $faker) {

    return [
        'user_id' => $faker->randomDigitNotNull,
        'title' => $faker->randomDigitNotNull,
        'skills_required' => $faker->randomDigitNotNull,
        'description' => $faker->randomDigitNotNull,
        'work_type' => $faker->word,
        'job_type' => $faker->word,
        'status' => $faker->word,
        'organisation_id' => $faker->randomDigitNotNull,
        'country_id' => $faker->randomDigitNotNull,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
