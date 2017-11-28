<?php

use Illuminate\Database\Seeder;
use App\LoaiBanner;

class LoaiBannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $loai = array("Banner chuyên trang","Banner liên kết","Banner tuyên truyền","Banner doanh nghiệp");

        foreach($loai as $lb) {
            LoaiBanner::create([
                'name' => $lb,
                'slug' => str_slug($lb)
            ]);
        }
    }
}
