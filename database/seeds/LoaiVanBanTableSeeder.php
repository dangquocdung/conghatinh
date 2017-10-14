<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\LoaiVB;

class LoaiVanBanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        LoaiVB::truncate();

        foreach(range(1, 10) as $i) {
            LoaiVB::create([
                'name' => $faker->firstname,
                'slug' => str_slug($faker->firstname)
            ]);
        }
    }
}
