<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nis' => fake()->unique()->randomNumber(5, true),
            'nama' => fake()->name(),
            'tanggal_lahir' => fake()->date(),
            'kelas_id' => fake()->numberBetween(1, 4),
            'alamat' => fake()->address(),
        ];
    }
}
