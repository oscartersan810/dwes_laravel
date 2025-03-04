<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Usuario>
 */
class UsuarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre'=>$this->faker->name(),
            'apellidos'=>$this->faker->lastName(),
            'apodo'=>$this->faker->userName(),
            'edad'=>$this->faker->numberBetween(18, 60),
            'rol'=>$this->faker->randomElement(['admin', 'user']),
        ];
    }
}
