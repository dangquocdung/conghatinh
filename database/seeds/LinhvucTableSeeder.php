<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\LinhVuc;

class LinhvucTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        LinhVuc::truncate();

        foreach(range(1, 5) as $i) {
            LinhVuc::create([
                'name' => $faker->name,
                'slug' => str_slug($faker->name)
            ]);
        }
    }
}
