<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\Album;
use App\Image;

class AlbumTableSeeder extends Seeder
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


        Image::truncate();
        Album::truncate();

        DB::statement("SET foreign_key_checks=1");

        foreach(range(1, 20) as $i) {


            Album::create([

                'name' => $faker->sentence($nbWords = 12, $variableNbWords = true),

                'slug' => str_slug($faker->catchPhrase),

                'daduyet' => $faker->numberBetween($min = 0, $max = 1),

                'noibat' => $faker->numberBetween($min = 0, $max = 1),

                'cover_image' => $faker->imageUrl($width = 640, $height = 480)

            ]);
        }
    }
}
