<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\OrganisationUser;
use Faker\Generator as Faker;

$factory->define(OrganisationUser::class, function (Faker $faker) {

    return [
        'user_id' => $faker->randomDigitNotNull,
        'organisation_id' => $faker->randomDigitNotNull,
        'end_date' => $faker->randomDigitNotNull,
        'start_date' => $faker->word,
        'role' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
