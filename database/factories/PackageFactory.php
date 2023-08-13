<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Package>
 */
class PackageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'package_owner_id' => null,
            'user_id' => null,
            'tracking_code' => $this->faker->unique()->randomNumber(9),
            'name' => $this->faker->words(3, true),
            'delivered_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
