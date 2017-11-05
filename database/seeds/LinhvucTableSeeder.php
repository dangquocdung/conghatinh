<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\LinhVuc;
use App\VanBan;
use App\TepVanBan;

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

//        DB::statement("SET foreign_key_checks=0");
//
//
//        TepVanBan::truncate();
//        VanBan::truncate();
//        LinhVuc::truncate();
//
//        DB::statement("SET foreign_key_checks=1");

//        $linhvuc = array("Kinh tế tổng hợp","Nội chính","Văn hóa – Xã hội","Đô thị","Khác");

        $linhvuc = array("Cấp phép, đầu tư","Công nghệ thông tin","Thương mại quốc tế","Đầu tư","Đất đai","Hợp đồng","Thuế","Hải quan","Xử lý vi phạm trong kinh doanh","Hỗ trợ pháp lý","Phổ biến pháp luật","Bảo hiểm xã hội","Tài nguyên - Môi trường");

        foreach($linhvuc as $lv) {
            LinhVuc::create([
                'name' => $lv,
                'slug' => str_slug($lv)
            ]);
        }
    }
}
