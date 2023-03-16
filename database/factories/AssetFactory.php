<?php

namespace Database\Factories;

use App\Models\Person;
use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Asset>
 */
class AssetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // $user = Person::factory()->create();
        return [
            'name' => fake()->word,
            'description' => fake()->sentence,
            'value' => fake()->randomNumber(4),
            'purchased' => Carbon::now()->subDays(fake()->numberBetween(1,365)),
            'personID' => function () {
                return Person::factory(Person::class)->create()->id;
            },
        ];
    }
}
