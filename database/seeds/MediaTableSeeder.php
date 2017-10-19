<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\Media;

class MediaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        
        TinTuc::where('extension','pdf')->delete();

        
    }
}
