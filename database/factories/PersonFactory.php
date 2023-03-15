<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Person>
 */
class PersonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = Faker::Create();
        return [
            'fname' => $faker->name,
            'lname' => $faker->name,
            'dob' => $faker->dateTimeBetween('-80 years', '-18 years')->format('Y-m-d'),
            'email' => $faker->unique()->safeEmail,
        ];
    }
}
