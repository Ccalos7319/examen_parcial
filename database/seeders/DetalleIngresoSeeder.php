<?php

namespace Database\Seeders;

use App\Models\Detalle_ingreso;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetalleIngresoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Detalle_ingreso::factory(20)->create();
    }
}
