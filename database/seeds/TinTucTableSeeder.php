<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\TinTuc;

class TinTucTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        
        TinTuc::truncate();

        
        foreach(range(1, 1000) as $i) {

        	
            TinTuc::create([

                'user_id' => '2',

                'loaitin_id' => $faker->numberBetween($min = 1, $max = 30),

                'name' => $faker->sentence($nbWords = 12, $variableNbWords = true),

                'slug' => str_slug($faker->catchPhrase),

                'avatar' => $faker->imageUrl($width = 640, $height = 480),

                'gioithieu' => $faker->text($maxNbChars = 500),

                'noidung' => $faker->text($maxNbChars = 1000).
                			'<br><br><img src="'.$faker->imageUrl($width = 640, $height = 480).'"><br>'.$faker->text($maxNbChars = 2000).'<br><p style="text-align:right"><strong>'.$faker->name."</strong></p>"

            ]);
        }
    }
}
