<?php

use Illuminate\Database\Seeder;

class CoQuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $coquan = array("Văn phòng UBND tỉnh", "Văn phòng Đoàn Đại biểu Quốc hội HĐND tỉnh");

        foreach($coquan as $cq) {
            LoaiVB::create([
                'name' => $cq,
                'slug' => str_slug($cq)
            ]);
        }
    }
}
