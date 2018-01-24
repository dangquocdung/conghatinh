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
use App\CQBH;
use App\Media;
use App\Banner;
use App\LoaiVB;
use App\PhimTat;
use App\LichCongTac;
use App\TinTuc;


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

        view()->composer(['errors::403','errors::404','errors::500'],function($view){

            $toppic = TopPic::all()->last();

            $chuyenmuc = ChuyenMuc::orderby('thutu','asc')->get();

            $cqbh = CQBH::all();

            $loaivb = LoaiVB::all();

            $phimtat = PhimTat::orderby('thutu','asc')->get();

            $banner = Banner::orderby('thutu','asc')->get();

            $nhomcq = NhomCQ::orderby('id')->get();

            $thongbao = LichCongTac::where('daduyet','1')->where('thongbao','1')->orderby('id','desc')->take(5)->get();

            $tinvan = TinTuc::where('tinvan','1')->orderBy('id', 'decs')->take(8)->pluck('gioithieu')->toArray();



            $view->with(compact('toppic','chuyenmuc','cqbh','loaivb','phimtat','banner','nhomcq','thongbao','tinvan'));

        });


        view()->composer([
            'admin.pages.tbt.loai-tin', 'admin.pages.tbt.loai-tin-edit',
            'admin.pages.tin-tuc-su-kien-create', 'admin.pages.tin-tuc-su-kien-edit',
            'admin.pages.van-ban-create', 'admin.pages.van-ban-edit',
            'admin.pages.lich-cong-tac', 'admin.pages.tbt.toppic'
        ],function($view){

          $chuyenmuc = ChuyenMuc::orderby('thutu','asc')->get();

          $pdfs = Media::whereIn('aggregate_type',['pdf','document','spreadsheet'])->orderby('id','desc')->take(12)->get();

          $hinhanh = Media::where('aggregate_type','image')->orderby('id','desc')->take(12)->get();
          
          $view->with(compact('chuyenmuc','pdfs','hinhanh'));

        });

//        view()->composer(['errors::403','errors::404','errors::500'],function($view){
//
//            $toppic = TopPic::orderby('thutu','asc')->get();
//
//            $chuyenmuc = ChuyenMuc::orderby('thutu','asc')->get();
//
//
//
//            $banner = Banner::orderby('thutu','asc')->get();
//
//            $view->with(compact('toppic','chuyenmuc','phimtat','banner'));
//
//        });

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
