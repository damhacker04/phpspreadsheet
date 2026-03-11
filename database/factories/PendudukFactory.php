<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PendudukFactory extends Factory
{
    public function definition(): array
    {
        // Mengubah locale faker ke bahasa Indonesia (opsional, tapi lebih realistis)
        fake()->locale('id_ID');

        return [
            'nama' => fake()->name(),
            'usia' => fake()->numberBetween(17, 80),
            'alamat' => fake()->address(),
            'pekerjaan' => fake()->jobTitle(),
        ];
    }
}
