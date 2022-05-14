<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'code' => $this->faker->unique()->regexify('[A-Z]{5}[0-4]{3}'),
            'email' => $this->faker->unique()->safeEmail(),
            'image' => 'https://i.pravatar.cc/150?u=' . $this->faker->unique()->name() . '@pravatar.com',
            'status' => $this->faker->randomElement(['processing', 'completed', 'cancelled']),
            'amount' => $this->faker->randomFloat(2, 10, 100),
            'created_at' => $this->faker->dateTime(),
        ];
    }
}
