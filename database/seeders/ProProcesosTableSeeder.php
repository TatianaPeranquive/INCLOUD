<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProProcesosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pro_procesos')->insert([
            [
                'pro_prefijo' => 'RH',
                'pro_nombre' => 'Proceso de Contratación',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pro_prefijo' => 'IT',
                'pro_nombre' => 'Proceso de Implementación de Software',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pro_prefijo' => 'FIN',
                'pro_nombre' => 'Proceso de Auditoría Financiera',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pro_prefijo' => 'ING',
                'pro_nombre' => 'Proceso de Ingeniería',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pro_prefijo' => 'PRD',
                'pro_nombre' => 'Proceso de Producción',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
