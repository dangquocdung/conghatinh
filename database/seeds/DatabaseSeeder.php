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
//          $this->call(LinhvucTableSeeder::class);
//          $this->call(LoaiVanBanTableSeeder::class);
//          $this->call(VanBanTableSeeder::class);

//        $this->call(TinTucTableSeeder::class);

//        $this->call(DoanhNghiepHoiSeeder::class);

//        $this->call(HoTroPhapLySeeder::class);

//        $this->call(LoaiVideoSeeder::class);
//        $this->call(VideoTableSeeder::class);

//        $this->call(AlbumTableSeeder::class);

        $this->call(CongBoTTDNSeeder::class);
//        $this->call(RolesAndPermissionsSeeder::class);
    
    }
}
