<?php

use Illuminate\Database\Seeder;
use App\LoaiVideo;

class LoaiVideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        DB::statement("SET foreign_key_checks=0");

        LoaiVideo::truncate();

        DB::statement("SET foreign_key_checks=1");

        $loaivideo = array("Chương trình thời sự","Hà Tĩnh ngày mới","Tầm nhìn đô thị","Doanh nghiệp, Hội nhập","Nông nghiệp CNC","Dân ca Nghệ Tĩnh");

//        $linhvuc = array("Cấp phép, đầu tư","Công nghệ thông tin","Thương mại quốc tế","Đầu tư","Đất đai","Hợp đồng","Thuế","Hải quan","Xử lý vi phạm trong kinh doanh","Hỗ trợ pháp lý","Phổ biến pháp luật","Bảo hiểm xã hội","Tài nguyên - Môi trường");

        foreach($loaivideo as $lv) {
            LoaiVideo::create([
                'name' => $lv,
                'slug' => str_slug($lv)
            ]);
        }
    }
}
