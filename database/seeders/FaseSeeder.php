<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class FaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['nombre' => ' Gestión-Factibilidad de servicios',],
            ['nombre' => 'Construcción',],
            ['nombre' => ' Etapa de pruebas e Inicio de Operación.',],
            ['nombre' => ' Gestión y trámites',],
            ['nombre' => 'Pre-construcción',],
            ['nombre' => ' Proyecto',],
            ['nombre' => 'Pre-construcción',],
        ];
        DB::table('t_fase')->insert($data);
    }
}
