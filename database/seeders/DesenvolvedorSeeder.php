<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Desenvolvedor;

class DesenvolvedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Desenvolvedor::truncate();

        $faker = \Faker\Factory::create('pt_BR');

        for ($i = 0; $i < 20; $i++) {
            $gender = $faker->randomElement(['male', 'female']);

            Desenvolvedor::create([
                'nivel_id'        => $faker->randomElement([1, 2, 3, 4]),
                'nome'            => $faker->name($gender),
                'sexo'            => $gender,
                'data_nascimento' => $faker->dateTimeBetween('-30 years', 'now'),
                'hobby'           => $faker->phoneNumber,
            ]);
        }
    }
}
