<?php

namespace Database\Seeders;

use App\Models\Detalle_venta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetalleVentaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      Detalle_venta::factory(20)->create();
      
    }
}
