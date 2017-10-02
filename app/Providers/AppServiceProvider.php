<?php

namespace App\Providers;

use App\Repositories\Dashboard\DashboardRepository;
use App\Repositories\Dashboard\EloquentDashboard;
use App\Repositories\Watchdog\EloquentWatchdog;
use App\Repositories\Watchdog\WatchdogRepository;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Laravel\Dusk\DuskServiceProvider;

use App\ChuyenMuc;
use App\LoaiTin;
use App\TinTuc;
use App\CQBH;
use App\NguoiKi;


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

        view()->composer(['guest.trang-chu','guest.chuyen-muc','guest.loai-tin','guest.chi-tiet'],function($view){

          $chuyenmuc = ChuyenMuc::all();

          $loaitin = LoaiTin::all();

          $tinnoibat4 = TinTuc::orderby('id','desc')->take(4)->get();

          $tinmoi5 = TinTuc::orderby('id','desc')->take(5)->get();

          $view->with(compact('chuyenmuc','loaitin','tinnoibat4', 'tinmoi5'));

        });

        view()->composer(['admin.pages.tbt.loai-tin','admin.pages.tbt.loai-tin-edit','admin.pages.tin-tuc-su-kien-create','admin.pages.tin-tuc-su-kien-edit','admin.pages.van-ban-create','admin.pages.van-ban-edit'],function($view){

          $chuyenmuc = ChuyenMuc::all();

          $cqbh = CQBH::all();

          $nguoiki = NguoiKi::all();
          
          $view->with(compact('chuyenmuc','cqbh', 'nguoiki'));

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
