<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Developer;

class DeveloperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create('pt_BR');


        for ($i = 0; $i < 20; $i++) {
            $gender = $faker->randomElement(['male', 'female']);

            Developer::create([
                'first_name'            => $faker->firstName($gender),
                'last_name'             => $faker->lastName,
                'cpf'                   => $faker->cpf,
                'gender'                => $gender,
                'birth_date'            => $faker->dateTimeBetween('-30 years', 'now'),
                'phone'                 => $faker->phoneNumber,
                'email'                 => $faker->unique()->safeEmail,
            ]);
        }
    }
}
