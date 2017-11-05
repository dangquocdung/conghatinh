<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\DoanhNghiepHoi;

class DoanhNghiepHoiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();


        DoanhNghiepHoi::truncate();


        foreach(range(1, 100) as $i) {


            DoanhNghiepHoi::create([


                'coquan_id' => $faker->numberBetween($min = 1, $max = 20),

                'doanhnghiep' => $faker->sentence($nbWords = 12, $variableNbWords = true),

                'daidien' => $faker->name,

                'sodt' => $faker->phoneNumber,

                'email' => $faker->email,

                'diachi' => $faker->address,

                'cauhoi' => $faker->text($maxNbChars = 1000),

                'nguoitraloi' => $faker->name,

                'chucvu' => 'nguoi phat ngon',

                'ngaytraloi' => $faker->dateTime(),

                'cautraloi'=> $faker->text($maxNbChars = 1000)


            ]);
        }
    }
}
