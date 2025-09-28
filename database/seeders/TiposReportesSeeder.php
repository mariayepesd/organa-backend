<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TiposReportesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tipos_reportes')->insert([
            ['tipo_reporte' => 'Ventas'],
            ['tipo_reporte' => 'Suscripciones'],
            ['tipo_reporte' => 'Clientes'],
            ['tipo_reporte' => 'Domicilios'],
            ['tipo_reporte' => 'Suministros'],
            ['tipo_reporte' => 'Pérdidas'],
        ]);
    }
}
