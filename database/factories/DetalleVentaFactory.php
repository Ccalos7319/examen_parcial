<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Detalle_venta>
 */
class DetalleVentaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_venta'=>fake()->randomNumber(2),
            'id_detalle_ingreso'=>\fake()->randomNumber(1),
            'cantidad'=>fake()->randomNumber(4),
            'precio_venta'=>fake()->randomFloat(2, 10, 1000),
            'descuento'=>50
        ];
    }
}
