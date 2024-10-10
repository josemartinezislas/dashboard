<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['nombre' => 'Agro-químico',],
            ['nombre' => 'Alimentos',],
            ['nombre' => 'Automotriz',],
            ['nombre' => 'Autopartes Fabricación de arneses automotrices.',],
            ['nombre' => 'Blindajes',],
            ['nombre' => 'Centro logistico',],
            ['nombre' => 'Comercio/servicios',],
            ['nombre' => 'Construcción',],
            ['nombre' => 'Consultoría, ingeniería y construcción.',],
            ['nombre' => 'Electrónico',],
            ['nombre' => 'Energía solar',],
            ['nombre' => 'Energías Renovables',],
            ['nombre' => 'Estación de servicio y naves para renta',],
            ['nombre' => 'Farmacéutico',],
            ['nombre' => 'Generación de Energía Eléctrica/Almacenamiento',],
            ['nombre' => 'Inmobiliario',],
            ['nombre' => 'Inmobiliario e industrial',],
            ['nombre' => 'Logístico',],
            ['nombre' => 'Manufactura',],
            ['nombre' => 'Mascarillas y de protección',],
            ['nombre' => 'Metalmecánico',],
            ['nombre' => 'Minería',],
            ['nombre' => 'Naves para renta ',],
            ['nombre' => 'Papel',],
            ['nombre' => 'Reciclaje',],
            ['nombre' => 'Reciclaje de PET',],
            ['nombre' => 'Servicio/Automotriz',],
            ['nombre' => 'Servicios',],
            ['nombre' => 'Textil',],
            ['nombre' => 'Vidrio',],
            ['nombre' => 'Carretera',],
            ['nombre' => 'seguridad',],
        ];
        DB::table('t_sect')->insert($data);
    }
}
