<?php

namespace Database\Factories\Services\Base;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Services\Base\ServiceModel>
 */
class ServiceModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->jobTitle(),
            'price' => $this->faker->numberBetween(100, 300),
            'description' => $this->faker->sentence(10),
            'created_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'team_id' => 1,
        ];
    }
}
