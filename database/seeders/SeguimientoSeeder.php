<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SeguimientoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['nombre' => 'AEEH', 'decripcion' => 'texto 1',],
            ['nombre' => 'COFOIN', 'decripcion' => 'texto 2',],
            ['nombre' => 'COINHI', 'decripcion' => 'texto 3',],
            ['nombre' => 'COINHI/SIPS', 'decripcion' => 'texto 4',],
            ['nombre' => 'DGEYS', 'decripcion' => 'texto 5',],
            ['nombre' => 'PLATAH', 'decripcion' => 'texto 6',],
            ['nombre' => 'SFE', 'decripcion' => 'texto 7',],
            ['nombre' => 'SIPS', 'decripcion' => 'texto 8',],
        ];
        DB::table('t_seg')->insert($data);
    }
}
