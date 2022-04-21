<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Nivel;

class NivelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Nivel::truncate();

        $niveis = ['Júnior', 'Pleno', 'Sênior', 'Master'];

        for ($i = 0; $i < 4; $i++) {
            Nivel::create([
                'nome' => $niveis[$i],
            ]);
        }
    }
}
