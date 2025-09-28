<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoSuscripcionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tipos_suscripciones')->insert([
            ['suscripcion' => 'Semanal'],
            ['suscripcion' => 'Quincenal'],
            ['suscripcion' => 'Mensual'],
        ]);
    }
}
