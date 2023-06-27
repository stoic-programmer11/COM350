<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pelicula>
 */
class PeliculaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titulo' => fake()->text(100),
            'artistas_principales' => fake()->text(100),
            'anio' => fake()->randomNumber(4, true),
            'productora' => fake()->text(100),
            'genero' => fake()->text(100)
        ];
    }
}