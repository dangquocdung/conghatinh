<?php

use Illuminate\Database\Seeder;
use App\CoQuan;

class CoQuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        $coquan = array("Văn phòng UBND tỉnh", "Văn phòng Đoàn Đại biểu Quốc hội HĐND tỉnh");
//
//        foreach($coquan as $cq) {
//            LoaiVB::create([
//                'name' => $cq,
//                'slug' => str_slug($cq)
//            ]);
//        }

        $data = [
            ['nhomcq_id'=>'3', 'name'=>'Bộ Công an', 'lienket'=>'http://www.mps.gov.vn/'],
            ['nhomcq_id'=>'3', 'name'=>'Bộ Văn hóa, Thể thao và Du lịch', 'lienket'=>'http://www.bvhttdl.gov.vn/'],
            ['nhomcq_id'=>'3', 'name'=>'Bộ Nội vụ', 'lienket'=>'https://www.moha.gov.vn/'],
            ['nhomcq_id'=>'3', 'name'=>'Bộ Quốc phòng', 'lienket'=>'http://mod.gov.vn/'],
            ['nhomcq_id'=>'3', 'name'=>'Bộ Giao thông Vận tải', 'lienket'=>'http://www.mt.gov.vn'],
            ['nhomcq_id'=>'3', 'name'=>'Thanh Tra Chính phủ', 'lienket'=>'http://www.thanhtra.gov.vn'],
            ['nhomcq_id'=>'3', 'name'=>'Ủy ban Dân tộc', 'lienket'=>'http://www.cema.gov.vn'],
            ['nhomcq_id'=>'3', 'name'=>'Ngân hàng Nhà nước Việt Nam', 'lienket'=>'http://www.sbv.gov.vn'],
            ['nhomcq_id'=>'3', 'name'=>'Văn phòng Chính phủ', 'lienket'=>'http://www.chinhphu.vn'],
            ['nhomcq_id'=>'3', 'name'=>'Bộ Công thương', 'lienket'=>'http://www.moi.gov.vn'],
            ['nhomcq_id'=>'3', 'name'=>'Bộ Khoa học và Công nghệ', 'lienket'=>'http://www.most.gov.vn'],
            ['nhomcq_id'=>'3', 'name'=>'Bộ Tư pháp', 'lienket'=>'http://www.moj.gov.vn'],
            ['nhomcq_id'=>'3', 'name'=>'Bộ Xây dựng', 'lienket'=>'http://www.xaydung.gov.vn'],
            ['nhomcq_id'=>'3', 'name'=>'Bộ Lao Động - Thương Binh và Xã Hội', 'lienket'=>'http://www.molisa.gov.vn'],
            ['nhomcq_id'=>'3', 'name'=>'Bộ Công Thương', 'lienket'=>'http://www.moit.gov.vn'],
            ['nhomcq_id'=>'3', 'name'=>'Bộ Thông Tin và Truyền Thông', 'lienket'=>'http://www.mic.gov.vn'],
            ['nhomcq_id'=>'3', 'name'=>'Bộ Y tế', 'lienket'=>'http://moh.gov.vn/'],
            ['nhomcq_id'=>'3', 'name'=>'Bộ Tài nguyên và Môi trường', 'lienket'=>'http://www.nea.gov.vn'],
            ['nhomcq_id'=>'3', 'name'=>'Bộ Tài chính', 'lienket'=>'http://www.mof.gov.vn'],
            ['nhomcq_id'=>'3', 'name'=>'Bộ Ngoại giao', 'lienket'=>'http://www.mofa.gov.vn'],
            ['nhomcq_id'=>'3', 'name'=>'Bộ Nông nghiệp và Phát triển nông thôn', 'lienket'=>'http://www.agroviet.gov.vn'],
            ['nhomcq_id'=>'3', 'name'=>'Bộ Kế hoạch và Đầu tư', 'lienket'=>'http://www.mpi.gov.vn'],
            ['nhomcq_id'=>'3', 'name'=>'Bộ Khoa học và Công nghệ', 'lienket'=>'http://www.most.gov.vn'],
            ['nhomcq_id'=>'3', 'name'=>'Bộ Giáo dục và Đào tạo', 'lienket'=>'http://www.moet.edu.vn'],
        ];
        foreach ($data as $key => $value) {
            CoQuan::create($value);
        }
    }
}
