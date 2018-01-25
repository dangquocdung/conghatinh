<?php

use Illuminate\Database\Seeder;
use App\CongBoTTDN;

class CongBoTTDNSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name'=>'Công ty TNHH MTV Thủy lợi Bắc Hà Tĩnh', 'slug'=>str_slug('Công ty TNHH MTV Thủy lợi Bắc Hà Tĩnh')],
            ['name'=>'Công ty TNHH MTV Thủy lợi Nam Hà Tĩnh', 'slug'=>str_slug('Công ty TNHH MTV Thủy lợi Nam Hà Tĩnh')],
            ['name'=>'Công ty TNHH MTV Xổ số kiến thiết Hà Tĩnh', 'slug'=>str_slug('Công ty TNHH MTV Xổ số kiến thiết Hà Tĩnh')],
            ['name'=>'Công ty TNHH Lâm nghiệp và Dịch vụ Hương Sơn', 'slug'=>str_slug('Công ty TNHH Lâm nghiệp và Dịch vụ Hương Sơn')],
            ['name'=>'Công ty TNHH Lâm nghiệp và Dịch vụ Chúc A', 'slug'=>str_slug('Công ty TNHH Lâm nghiệp và Dịch vụ Chúc A')]

        ];
        foreach ($data as $key => $value) {
            CongBoTTDN::create($value);
        }
    }
}
