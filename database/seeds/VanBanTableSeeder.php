<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\VanBan;
use App\TepVanBan;

class VanBanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        DB::statement("SET foreign_key_checks=0");

        
        TepVanBan::truncate();
        VanBan::truncate();

        DB::statement("SET foreign_key_checks=1");

        foreach(range(1,100) as $i) {

            VanBan::create([

                'user_id' => '2',

	            'loaitin_id' => $faker->numberBetween($min = 9, $max = 10),

	            'loaivb_id' => $faker->numberBetween($min = 1, $max = 7),

                'linhvuc_id' => $faker->numberBetween($min = 1, $max = 4),

	            'sovb' => $faker->randomNumber,

	            'kihieuvb' => $faker->word,

	            'ngaybanhanh' => $faker->date,

	            'nguoiki_id' => '1',

	            'trichyeu' => $faker->paragraph,

	            'noibat' => '0',

	            'daduyet' => '0'
            ]);
        }
    }
}
