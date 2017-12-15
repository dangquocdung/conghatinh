<?php

namespace App\Providers;

use App\NhomCQ;
use App\Repositories\Dashboard\DashboardRepository;
use App\Repositories\Dashboard\EloquentDashboard;
use App\Repositories\Watchdog\EloquentWatchdog;
use App\Repositories\Watchdog\WatchdogRepository;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Laravel\Dusk\DuskServiceProvider;

use App\TopPic;
use App\ChuyenMuc;
use App\LoaiTin;
use App\TinTuc;
use App\CQBH;
use App\NguoiKi;
use App\VanBan;
use App\Media;
use App\Banner;
use App\LinhVuc;
use App\LoaiVB;
use App\Album;
use App\Video;
use App\CoQuan;
use App\PhimTat;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        view()->composer(['guest.trang-chu','guest.chuyen-muc','guest.loai-tin','guest.chi-tiet-tin','guest.van-ban','guest.van-ban-chi-tiet','guest.tin-noi-bat','guest.so-do-cong','guest.video-chi-tiet','guest.album-anh','guest.album-chi-tiet','guest.lich-lam-viec','guest.tim-kiem'],function($view){

            $loaitin = LoaiTin::all();

          $tinnoibat4 = TinTuc::where('daduyet','1')->where('noibat','1')->orderby('id','desc')->take(4)->get();

          $tinmoi5 = TinTuc::where('daduyet','1')->orderby('id','desc')->take(5)->get();

          $vanban = VanBan::where('daduyet','1')->orderby('id','desc')->take(5)->get();

          $cqbh = CQBH::all();

          $linhvuc = LinhVuc::all();

          $loaivb = LoaiVB::all();

          $ab_noibat = Album::with('Photos')->where('daduyet','1')->where('noibat','1')->orderby('id','desc')->take(12)->get();

          $vd_noibat = Video::where('daduyet','1')->where('noibat','1')->take(12)->get();

          $vd_thoisu = Video::where('loaivideo_id','1')->orderby('ngayphat','desc')->first();

          $view->with(compact('chuyenmuc','loaitin','tinnoibat4', 'tinmoi5','vanban','cqbh','linhvuc','loaivb','ab_noibat','vd_noibat','vd_thoisu'));

        });



        view()->composer(['admin.pages.tbt.loai-tin','admin.pages.tbt.loai-tin-edit','admin.pages.tin-tuc-su-kien-create','admin.pages.tin-tuc-su-kien-edit','admin.pages.van-ban-create','admin.pages.van-ban-edit','admin.pages.lich-cong-tac','admin.pages.tbt.toppic'],function($view){

          $chuyenmuc = ChuyenMuc::orderby('thutu','asc')->get();

          $cqbh = CQBH::all();

          $nguoiki = NguoiKi::all();

          $pdfs = Media::whereIn('aggregate_type',['pdf','document','spreadsheet'])->orderby('id','desc')->take(12)->get();

          $hinhanh = Media::where('aggregate_type','image')->orderby('id','desc')->take(12)->get();

          $loaivb = LoaiVB::all();
          
          $view->with(compact('chuyenmuc','loaivb','cqbh', 'nguoiki','pdfs','hinhanh'));

        });

        view()->composer(['errors::403','errors::404','errors::500'],function($view){

            $toppic = TopPic::orderby('thutu','asc')->get();

            $chuyenmuc = ChuyenMuc::orderby('thutu','asc')->get();

            $phimtat = PhimTat::orderby('thutu','asc')->get();

            $banner = Banner::orderby('thutu','asc')->get();

            $view->with(compact('toppic','chuyenmuc','phimtat','banner'));

        });

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->environment('local', 'testing')) {
            $this->app->register(DuskServiceProvider::class);
        }

        $this->app->bind(WatchdogRepository::class, EloquentWatchdog::class);
        $this->app->bind(DashboardRepository::class, EloquentDashboard::class);
    }
}
