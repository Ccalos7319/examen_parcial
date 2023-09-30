<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Venta>
 */
class VentaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_trabajador'=>fake()->randomNumber(2),
            'id_cliente'=>fake()->randomNumber(2),
            'fecha'=>fake()->date(),
            'tipo_comprobante'=>'boleta',
            'serie'=>fake()->word(),
            'igv'=>fake()->randomNumber(2),
            'estado'=>'pagado',

        ];
    }
}
