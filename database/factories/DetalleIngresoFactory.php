<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Testing\Fakes\Fake;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Detalle_ingreso>
 */
class DetalleIngresoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_articulo'=>fake()->random_int(2,20),
            'precio_compra'=>fake()-> randomFloat(2, 10, 1000),
            'precio_venta'=>fake()-> randomFloat(2, 10, 1000),
            'stock_inicial'=>fake()->randomNumber(2),
            'stock_actual'=>fake()->randomNumber(2),
            'fecha_produccion'=>fake()->date(),
            'fecha_vencimiento'=>fake()->date(),
        ];
    }
}
