<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('estados')->insert([
            ['estado' => 'Activo'],
            ['estado' => 'Inactivo'],
            ['estado' => 'Pendiente'],
            ['estado' => 'Confirmado'],
            ['estado' => 'En preparación'],
            ['estado' => 'Listo'],
            ['estado' => 'En despacho'],
            ['estado' => 'Suspendido'],
            ['estado' => 'Cancelado'],
            ['estado' => 'Reembolsado'],
            ['estado' => 'Finalizado'],
            ['estado' => 'Generado'],
            ['estado' => 'Fallido'],
            ['estado' => 'Archivado'],
            ['estado' => 'Asignado'],
            ['estado' => 'Recogido'],
            ['estado' => 'En tránsito'],
            ['estado' => 'Entregado'],
            ['estado' => 'Regresado'],
        ]);
    }
}
