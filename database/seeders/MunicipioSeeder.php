<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MunicipioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['nombre' => 'Acatlán',],
            ['nombre' => 'Acaxochitlán',],
            ['nombre' => 'Actopan',],
            ['nombre' => 'Agua Blanca de Iturbide',],
            ['nombre' => 'Ajacuba',],
            ['nombre' => 'Alfajayucan',],
            ['nombre' => 'Almoloya',],
            ['nombre' => 'Apan',],
            ['nombre' => 'El Arenal',],
            ['nombre' => 'Atitalaquia',],
            ['nombre' => 'Atlapexco',],
            ['nombre' => 'Atotonilco el Grande',],
            ['nombre' => 'Atotonilco de Tula',],
            ['nombre' => 'Calnali',],
            ['nombre' => 'Cardonal',],
            ['nombre' => 'Cuautepec de Hinojosa',],
            ['nombre' => 'Chapantongo',],
            ['nombre' => 'Chapulhuacán',],
            ['nombre' => 'Chilcuautla',],
            ['nombre' => 'Eloxochitlán',],
            ['nombre' => 'Emiliano Zapata',],
            ['nombre' => 'Epazoyucan',],
            ['nombre' => 'Francisco I. Madero',],
            ['nombre' => 'Huasca de Ocampo',],
            ['nombre' => 'Huautla',],
            ['nombre' => 'Huazalingo',],
            ['nombre' => 'Huehuetla',],
            ['nombre' => 'Huejutla de Reyes',],
            ['nombre' => 'Huichapan',],
            ['nombre' => 'Ixmiquilpan',],
            ['nombre' => 'Jacala de Ledezma',],
            ['nombre' => 'Jaltocán',],
            ['nombre' => 'Juárez Hidalgo',],
            ['nombre' => 'Lolotla',],
            ['nombre' => 'Metepec',],
            ['nombre' => 'San Agustín Metzquititlán',],
            ['nombre' => 'Metztitlán',],
            ['nombre' => 'Mineral del Chico',],
            ['nombre' => 'Mineral del Monte',],
            ['nombre' => 'La Misión',],
            ['nombre' => 'Mixquiahuala de Juárez',],
            ['nombre' => 'Molango de Escamilla',],
            ['nombre' => 'Nicolás Flores',],
            ['nombre' => 'Nopala de Villagrán',],
            ['nombre' => 'Omitlán de Juárez',],
            ['nombre' => 'San Felipe Orizatlán',],
            ['nombre' => 'Pacula',],
            ['nombre' => 'Pachuca de Soto',],
            ['nombre' => 'Pisaflores',],
            ['nombre' => 'Progreso de Obregón',],
            ['nombre' => 'Mineral de la Reforma',],
            ['nombre' => 'San Agustín Tlaxiaca',],
            ['nombre' => 'San Bartolo Tutotepec',],
            ['nombre' => 'San Salvador',],
            ['nombre' => 'Santiago de Anaya',],
            ['nombre' => 'Santiago Tulantepec de Lugo Guerrero',],
            ['nombre' => 'Singuilucan',],
            ['nombre' => 'Tasquillo',],
            ['nombre' => 'Tecozautla',],
            ['nombre' => 'Tenango de Doria',],
            ['nombre' => 'Tepeapulco',],
            ['nombre' => 'Tepehuacán de Guerrero',],
            ['nombre' => 'Tepeji del Río de Ocampo',],
            ['nombre' => 'Tepetitlán',],
            ['nombre' => 'Tetepango',],
            ['nombre' => 'Villa de Tezontepec',],
            ['nombre' => 'Tezontepec de Aldama',],
            ['nombre' => 'Tianguistengo',],
            ['nombre' => 'Tizayuca',],
            ['nombre' => 'Tlahuelilpan',],
            ['nombre' => 'Tlahuiltepa',],
            ['nombre' => 'Tlanalapa',],
            ['nombre' => 'Tlanchinol',],
            ['nombre' => 'Tlaxcoapan',],
            ['nombre' => 'Tolcayuca',],
            ['nombre' => 'Tula de Allende',],
            ['nombre' => 'Tulancingo de Bravo',],
            ['nombre' => 'Xochiatipan',],
            ['nombre' => 'Xochicoatlán',],
            ['nombre' => 'Yahualica',],
            ['nombre' => 'Zacualtipán de Ángeles',],
            ['nombre' => 'Zapotlán de Juárez',],
            ['nombre' => 'Zempoala',],
            ['nombre' => 'Zimapán',],
        ];
        DB::table('t_mpio')->insert($data);
    }
}
