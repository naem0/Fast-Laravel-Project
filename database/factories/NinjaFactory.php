<?php

namespace Database\Factories;

use App\Models\Dojo;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ninja>
 */
class NinjaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'rank' => $this->faker->randomElement(['Genin', 'Chunin', 'Jonin']),
            'bio' => $this->faker->paragraph,
            'dojo_id' => Dojo::factory()->create()->id,
        ];
    }
}
