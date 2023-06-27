<?php

namespace Database\Factories;

use App\Models\Editorial;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Libro>
 */
class LibroFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  public function definition(): array
  {
    // Para recibir la llave foranea en orden
    $editorial = Editorial::inRandomOrder()->first();
    return [
      'titulo' => fake()->text(100),
      'editorial_id' => $editorial->id,
      'edicion' => fake()->randomNumber(4, true),
      'pais' => fake()->country(),
      'precio' => fake()->randomFloat(2, 100, 400)

      //
    ];
  }
}
