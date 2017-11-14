<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
//use App\Album;
use App\Image;

class ImageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Factory::create();

        Image::truncate();


        foreach(range(1, 200) as $i) {


            Image::create([

                'album_id' => $faker->numberBetween($min = 1, $max = 20),

                'description' => $faker->text($maxNbChars = 191),

                'image' => $faker->imageUrl($width = 640, $height = 480)

            ]);
        }
    }
}
