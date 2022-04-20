<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Level;

class LevelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Level::truncate();

        $faker = \Faker\Factory::create();

        $levels = ['Júnior', 'Pleno', 'Sênior', 'Master'];

        for ($i = 0; $i < 4; $i++) {
            Level::create([
                'name'          => $levels[$i],
                'description'   => $faker->paragraph,
            ]);
        }
    }
}
