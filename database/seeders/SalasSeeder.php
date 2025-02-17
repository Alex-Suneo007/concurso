<?php

namespace Database\Seeders;

use App\Models\Sala;
use Illuminate\Database\Seeder;

class SalasSeeder extends Seeder
{
    public function run()
    {
        $salas = [
            'Sala 1',
            'Sala 2',
            'Sala 3',
            'Sala 4',
            'Sala 5',
        ];

        foreach ($salas as $sala) {
            Sala::create(['nombre' => $sala]);
        }
    }
}

