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

        view()->composer(['guest.trang-chu','guest.chuyen-muc','guest.loai-tin','guest.chi-tiet','guest.van-ban','guest.chi-tiet-van-ban'],function($view){

          $toppic = TopPic::orderby('thutu','asc')->get();

          $chuyenmuc = ChuyenMuc::orderby('thutu','asc')->get();

          $loaitin = LoaiTin::all();

          $tinnoibat4 = TinTuc::orderby('id','desc')->take(6)->get();

          $tinmoi5 = TinTuc::orderby('id','desc')->take(5)->get();

          $vanban = VanBan::orderby('id','desc')->take(5)->get();

          $cqbh = CQBH::all();

          $nhomcq = NhomCQ::all();

          $banner = Banner::orderby('thutu','asc')->get();

          $linhvuc = LinhVuc::all();

          $loaivb = LoaiVB::all();

          $view->with(compact('toppic','chuyenmuc','loaitin','tinnoibat4', 'tinmoi5','vanban','cqbh','nhomcq','banner','linhvuc','loaivb'));

        });

        view()->composer(['admin.pages.tbt.loai-tin','admin.pages.tbt.loai-tin-edit','admin.pages.tin-tuc-su-kien-create','admin.pages.tin-tuc-su-kien-edit','admin.pages.van-ban-create','admin.pages.van-ban-edit'],function($view){

          $chuyenmuc = ChuyenMuc::orderby('thutu','asc')->get();

          $cqbh = CQBH::all();

          $nguoiki = NguoiKi::all();

          $pdfs = Media::where('aggregate_type','pdf')->orderby('id','desc')->get();

          $loaivb = LoaiVB::all();
          
          $view->with(compact('chuyenmuc','loaivb','cqbh', 'nguoiki','pdfs'));

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
