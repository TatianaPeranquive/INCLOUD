<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TipTipoDocTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tip_tipo_docs')->insert([
            [
                'tip_prefijo' => 'DJRD',
                'tip_nombre' => 'Documento Legal',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'tip_prefijo' => 'DTEC',
                'tip_nombre' => 'Documento Técnico',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'tip_prefijo' => 'DFIN',
                'tip_nombre' => 'Informe Financiero',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'tip_prefijo' => 'DIT',
                'tip_nombre' => 'Manual de Usuario',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'tip_prefijo' => 'DPRT',
                'tip_nombre' => 'Presentación',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
