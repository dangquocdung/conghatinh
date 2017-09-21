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

        view()->composer(['guest.trang-chu'],function($view){

          $chuyenmuc = ChuyenMuc::all();
          
          $view->with('chuyenmuc',$chuyenmuc);

          $loaitin = LoaiTin::all();
          
          $view->with('loaitin',$loaitin);

          $tintuc = TinTuc::all();

          $view->with('tintuc',$tintuc);

        });

        view()->composer(['admin.pages.tbt.loai-tin','admin.pages.tbt.loai-tin-edit','admin.pages.tin-tuc-su-kien-create'],function($view){

          $chuyenmuc = ChuyenMuc::all();
          
          $view->with('chuyenmuc',$chuyenmuc);

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
