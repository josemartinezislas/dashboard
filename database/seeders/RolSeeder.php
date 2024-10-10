<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['nombre' => 'ADMINISTRATOR', ],
            ['nombre' => 'ENCARGADO', ],
            ['nombre' => 'USUARIO', ],
            
        ];
        DB::table('t_roles')->insert($data);
    }
}
