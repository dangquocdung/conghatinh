<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\LoaiVB;
use App\TepVanBan;
use App\VanBan;

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

        DB::statement("SET foreign_key_checks=0");

        
        TepVanBan::truncate();
        VanBan::truncate();
        LoaiVB::truncate();

        DB::statement("SET foreign_key_checks=1");

        $loaivb = array("Thông báo","Quyết định","Kế hoạch","Công văn","Báo cáo","Chương trình","Chỉ thị");

        foreach($loaivb as $lvb) {
            LoaiVB::create([
                'name' => $lvb,
                'slug' => str_slug($lvb)
            ]);
        }
    }
}
