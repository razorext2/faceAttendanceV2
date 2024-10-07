<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Division>
 */
class DivisionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // Generate a random code for the division
            'kode_divisi' => $this->faker->unique()->numberBetween(1, 10000000),
            // Generate a name for the division
            'nama_divisi' => $this->faker->word() . ' Division',
        ];
    }
}
