<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Trabajador>
 */
class TrabajadorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre'=>fake()->name(),
            'apellido'=>fake()->lastName(),
            'sexo'=>fake()->randomElement(['F','M']),
            'fecha_nacimiento'=>fake()->date(),
            'num_documento'=>fake()->numberBetween(10000000, 99999999),
            'direccion'=>fake()->address(),
            'telefono'=>fake()->phoneNumber(),
            'email'=>fake()->email(),
            'password'=>fake()->password()
        ];
    }
}
