<?php

use Illuminate\Database\Seeder;

use Faker\Factory;
use App\HoTroPhapLy;


class HoTroPhapLySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();


        HoTroPhapLy::truncate();


        foreach(range(1, 100) as $i) {


            HoTroPhapLy::create([


                'linhvuc_id' => $faker->numberBetween($min = 1, $max = 18),

                'doanhnghiep' => $faker->sentence($nbWords = 12, $variableNbWords = true),

                'daidien' => $faker->name,

                'sodt' => $faker->phoneNumber,

                'email' => $faker->email,

                'diachi' => $faker->address,

                'cauhoi' => $faker->text($maxNbChars = 300),

                'coquan_id' => $faker->numberBetween($min = 1, $max = 20),

                'ngaytraloi' => $faker->dateTime(),

                'cautraloi'=> $faker->text($maxNbChars = 500)


            ]);
        }
    }
}
