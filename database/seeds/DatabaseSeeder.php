<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // $this->call(LinhvucTableSeeder::class);
         // $this->call(LoaiVanBanTableSeeder::class);
         // $this->call(VanBanTableSeeder::class);

        $this->call(TinTucTableSeeder::class);
    
    }
}
