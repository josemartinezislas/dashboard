<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['nombre' => 'Nueva', ],
            ['nombre' => 'Ampliación', ],
            ['nombre' => 'Ninguna', ],
            
        ];
        DB::table('t_tipo')->insert($data);
    }
}
