<?php

Route::feeds();

Route::get('/', 'GuestController@index')->name('trang-chu');


Route::get('load-dnh', 'GuestController@loadDNH');

Route::get('load-baohatinh', 'DichVuCongController@getBaoHaTinh');


Route::get('tra-cuu-dich-vu-cong', 'GuestController@tracuuDVC');


Route::get('doanh-nghiep-hoi-cqnn-tra-loi', 'GuestController@getDoanhNghiepHoi');

Route::post('doanh-nghiep-hoi-cqnn-tra-loi', 'DnhcqnnController@store')->name('post-doanh-nghiep-hoi');

Route::get('doanh-nghiep-hoi-cqnn-tra-loi/{id}', 'GuestController@getDoanhNghiepHoiChiTiet')->name('doanh-nghiep-hoi');

Route::post('doanh-nghiep-hoi-cqnn-tra-loi/{id}', 'DnhcqnnController@update')->name('update-doanh-nghiep-hoi-out');


//Route::post('doanh-nghiep-hoi-cqnn-tra-loi', 'DoanhNghiepHoiController@store')->name('post-doanh-nghiep-hoi');


//Route::get('/update-slug-van-ban', 'VanBanController@updateSlug');
//Route::get('/update-slug-van-ban-khac', 'VanBanKhacController@updateSlug');



Route::group(['prefix'=>'vi'], function ()
{
    Route::get('tin-noi-bat', 'GuestController@tinNoiBat');

    Route::get('lien-he-cong-tac', 'GuestController@getLienHeCongTac')->name('lien-he-cong-tac');
    Route::post('lien-he-cong-tac', 'LienHeController@store')->name('post-lien-he-cong-tac');
    Route::get('gop-y-cong', 'GuestController@getGopY')->name('gop-y-cong');
    Route::post('gop-y-cong', 'GopYController@store')->name('post-gop-y-cong');

    Route::get('ban-bien-tap', 'GuestController@getBBT')->name('ban-bien-tap');
    Route::get('so-do-cong', 'GuestController@getSoDoCong')->name('so-do-cong');


    Route::get('gop-y-van-ban-qppl', 'GuestController@getGopYVanBan');
    Route::get('phan-anh-kien-nghi', 'GuestController@getPhanAnhKienNghi');
    Route::get('trao-doi-hoi-dap', 'GuestController@getTraoDoiHoiDap');
    Route::get('thong-tin-doanh-nghiep', 'GuestController@getThongTinDoanhNghiep');

    Route::get('thu-vien/{slug}', 'GuestController@getThuVien')->name('thu-vien');


    Route::get('duong-day-nong-so-ban-nganh-huyen-thi-thanh', 'GuestController@getHotLine')->name('duong-day-nong');
    Route::get('tu-van-ho-tro-phap-ly-doanh-nghiep', 'GuestController@getHoTroPhapLy');
    Route::post('tu-van-ho-tro-phap-ly-doanh-nghiep', 'HoTroPhapLyController@store')->name('post-ho-tro-phap-ly');
    Route::get('ds-nguoi-phat-ngon-cung-cap-thong-tin-cho-bao-chi', 'GuestController@getNguoiPhatNgon');
    Route::post('ds-nguoi-phat-ngon-cung-cap-thong-tin-cho-bao-chi', 'NguoiPhatNgonController@store')->name('post-nguoi-phat-ngon');
    Route::get('ds-vpdd-pvtt-dang-ky-hoat-dong', 'GuestController@getPhongVienThuongTru');





//    Route::group(['prefix'=>'da-phuong-tien'], function () {
//
//        Route::get('thu-vien-video/{id?}', 'GuestController@getVideo')->name('thu-vien-video');
//
//        Route::get('album-hinh-anh/{slug?}', 'GuestController@getAlbum')->name('album-hinh-anh');
//    });


//    Route::get('van-ban/{slug?}', 'GuestController@vanBan')->name('van-ban');
//
//    Route::get('van-ban/{slug}/{id}', 'GuestController@ctVanBan')->name('chi-tiet-van-ban');

//    Route::group(['prefix'=>'chuyen-trang'], function () {
//        });

    Route::get('tim-kiem', 'GuestController@getTimKiem')->name('tim-kiem');

    Route::get('{cm}', 'GuestController@chuyenMuc')->name('chuyen-muc');
    Route::get('{cm}/{lt}', 'GuestController@loaiTin')->name('loai-tin');

    Route::get('{cm}/{lt}/{type}/{id}-{slug}.hti', 'GuestController@getTinTuc')->name('chi-tiet-tin');



});


Route::resource('gop-y-du-thao', 'GopYDuThaoController');


Route::get('/api/van-ban-all/{id?}','GuestController@apiVanBan');

Route::get('/api/doanh-nghiep-hoi-all','GuestController@apiDoanhNghiepHoi');

Route::get('/api/ho-tro-phap-ly','GuestController@apiHoTroPhapLy');

Route::get('/api/nguoi-phat-ngon','GuestController@apiNguoiPhatNgon');

Route::get('/api/phong-vien-thuong-tru','GuestController@apiPhongVienThuongTru');

Route::get('/dang-nhap', function () {return view('admin.pages.login');})->name('dang-nhap');

Route::post('/dang-nhap', 'UserController@login')->name('login');

Route::post('forgot-password/send','UserController@postForgotPassword')->name('forgot-password-send');
Route::get('forgot-password/set/{token}', 'UserController@getSetForgotPassword')->name('set-forgot-password');
Route::post('forgot-password/update', 'UserController@postSetForgotPassword')->name('update-forgot-password');

/*Urls based on functionality of User can register*/
//if (\Setting::get('user_can_register')) {
//    Route::get('register', 'UserController@getRegistrationPage')->name('register');
//    Route::post('do-register', 'UserController@postHandleUserRegistration')->name('do-register');
//    Route::get('toa-soan/config/user/activation-pending', 'AdminController@getUserActivationPending')->middleware(['auth', 'role:admin'])->name('user-activation-pending');
//}

Route::group(['prefix'=>'toa-soan','middleware' => 'auth'], function () {

    Route::get('/', 'UserController@pageDashboard')->name('dashboard');
    Route::get('dashboard', 'UserController@pageDashboard')->name('dashboard');
    Route::get('cau-hinh/he-thong/my-activities', 'UserController@pageMyActivities')->name('my-activities');
    Route::post('do-logout', 'UserController@postLogout')->name('logout');
    Route::get('user/profile', 'UserController@pageUserProfile')->name('profile');
    Route::post('user/profile', 'UserController@postUpdateProfile')->name('update-profile');
    Route::post('user/password-change', 'UserController@postHandlePasswordChange')->name('change-password');



    //Da Phuong Tien
    Route::group(['prefix'=>'da-phuong-tien'],function () {

        Route::resource('video', 'VideoController');


        Route::get('album-manager/{slug?}', 'AlbumController@index')->name('album-manager');
        Route::post('save-album', 'AlbumController@store')->name('save-album');
        Route::post('update-album', 'AlbumController@update')->name('update-album');
        Route::post('update-album-cover', 'AlbumController@updateCover')->name('update-album-cover');
        Route::post('delete-album', 'AlbumController@destroy')->name('delete-album');
        Route::post('add-image-to-album', 'ImageController@store')->name('add-image-to-album');
        Route::post('remove-image-to-album', 'ImageController@destroy')->name('remove-image-to-album');
        Route::get('media-manager', 'MediaController@index')->name('media-manager');
        Route::get('file-manager', 'FileController@index')->name('file-manager');
        Route::get('icons', 'FileController@getIcons')->name('get-icons');
        Route::get('calendar', 'FileController@getCalendar')->name('get-calendar');
    });

    //Van ban
    Route::group(['prefix'=>'tin-bai/tin-tuc'],function () {

        Route::get('tao-tin-tuc', 'TinTucController@create')->name('tao-tin-tuc');
        Route::post('them-tin-tuc', 'TinTucController@store')->name('them-tin-tuc');
        Route::get('edit-tin-tuc/{slug}', 'TinTucController@edit')->name('edit-tin-tuc');
        Route::post('update-tin-tuc', 'TinTucController@update')->name('update-tin-tuc');

        Route::get('{slug?}', 'TinTucController@index')->name('tin-tuc-su-kien');
    });


    Route::resource('thong-tin-doanh-nghiep', 'ThongTinDoanhNghiepController');


    //Van ban
    Route::group(['prefix'=>'tin-bai/van-ban'],function (){

        Route::get('/them-van-ban','VanBanController@create')->name('tao-van-ban');
        Route::post('/them-van-ban','VanBanController@store')->name('them-van-ban');
        Route::get('/edit-van-ban/{id}','VanBanController@edit')->name('edit-van-ban');
        Route::post('/update-van-ban','VanBanController@update')->name('update-van-ban');
        Route::post('/them-nguoi-ki','NguoiKiController@store')->name('save-nguoi-ki');
        Route::post('/them-cqbh','CQBHController@store')->name('save-cqbh');

        Route::get('/{slug?}','VanBanController@index')->name('index-van-ban');
    });


    //Lich cong tac

    //Van ban
    Route::group(['prefix'=>'tin-bai/van-ban-khac'],function (){

        Route::get('/them-van-ban-khac','VanBanKhacController@create')->name('tao-van-ban-khac');
        Route::post('/them-van-ban-khac','VanBanKhacController@store')->name('them-van-ban-khac');
        Route::get('/edit-van-ban-khac/{id}','VanBanKhacController@edit')->name('edit-van-ban-khac');
        Route::post('/update-van-ban-khac','VanBanKhacController@update')->name('update-van-ban-khac');

        Route::get('/{slug?}','VanBanKhacController@index')->name('index-van-ban-khac');
//        Route::post('/update-van-ban','VanBanController@update')->name('update-van-ban');
//        Route::post('/them-nguoi-ki','NguoiKiController@store')->name('save-nguoi-ki');
//        Route::post('/them-cqbh','CQBHController@store')->name('save-cqbh');
    });

    Route::get('/json-tepdinhkem','VanBanKhacController@jsonTepDinhKem');
    Route::get('/json-hinhanh','VanBanKhacController@jsonHinhAnh');

    //Van ban
    Route::group(['prefix'=>'chuyen-trang'],function (){

        Route::get('doanh-nghiep-hoi','DnhcqnnController@index')->name('index-doanh-nghiep-hoi');
        Route::get('doanh-nghiep-hoi/{id}','DnhcqnnController@edit')->name('edit-doanh-nghiep-hoi');
        Route::post('doanh-nghiep-hoi/{id}','DnhcqnnController@update')->name('update-doanh-nghiep-hoi');
        Route::get('ho-tro-phap-ly','HoTroPhapLyController@index')->name('index-ho-tro-phap-ly');
        Route::get('gop-y-du-thao-van-ban','DuThaoController@index')->name('index-du-thao-van-ban');
        Route::post('them-du-thao-van-ban','DuThaoController@store')->name('them-du-thao-van-ban');
        Route::post('xoa-du-thao-van-ban','DuThaoController@destroy')->name('xoa-du-thao-van-ban');
        Route::post('edit-du-thao-van-ban','DuThaoController@update')->name('edit-du-thao-van-ban');

        Route::resource('hoi-dap-truc-tuyen','HoiDapTrucTuyenController');

        Route::get('lien-he-cong-tac', 'LienHeController@index')->name('index-lien-he-cong-tac');
        Route::get('gop-y', 'GopYController@index')->name('index-gop-y');

        Route::post('duyet-doanh-nghiep-hoi', 'DnhcqnnController@postDuyet')->name('duyet-doanh-nghiep-hoi');
        Route::post('delete-doanh-nghiep-hoi', 'DnhcqnnController@destroy')->name('delete-doanh-nghiep-hoi');

        Route::post('duyet-ho-tro-phap-ly', 'HoTroPhapLyController@postDuyet')->name('duyet-ho-tro-phap-ly');
        Route::post('update-ho-tro-phap-ly', 'HoTroPhapLyController@update')->name('update-ho-tro-phap-ly');
        Route::post('delete-ho-tro-phap-ly', 'HoTroPhapLyController@destroy')->name('delete-ho-tro-phap-ly');

        Route::post('duyet-hoi-dap-truc-tuyen', 'HoiDapTrucTuyenController@postDuyet')->name('duyet-hoi-dap-truc-tuyen');
        Route::post('tra-loi-hoi-dap-truc-tuyen', 'HoiDapTrucTuyenController@postTraLoi')->name('tra-loi-hoi-dap-truc-tuyen');
//        Route::post('update-ho-tro-phap-ly', 'HoTroPhapLyController@update')->name('update-ho-tro-phap-ly');
//        Route::post('delete-ho-tro-phap-ly', 'HoTroPhapLyController@destroy')->name('delete-ho-tro-phap-ly');


    });



    Route::group(['middleware' => 'role:admin'], function () {



        Route::get('config/user/manager', 'AdminController@getUser')->name('user');
        Route::post('config/user/manager', 'AdminController@postAddUser')->name('save-user');
        
        Route::get('config/user/import', 'AdminController@importUser')->name('import-user');
        Route::post('config/user/import', 'AdminController@handleImportUser')->name('bulk-import-user');
        Route::get('config/user/import/get-data/{uuid}', 'AdminController@getImportData')->name('get-import-data');

        Route::get('config/user/roles', 'AdminController@getManageRoles')->name('manage-roles');
        Route::post('config/user/role-save', 'AdminController@postSaveRoles')->name('save-role');
        Route::get('config/user/roles/{id}', 'AdminController@getEditRole')->name('edit-role');
        Route::post('config/user/role/update', 'AdminController@postUpdateRole')->name('update-role');

        Route::get('config/user/permissions', 'AdminController@getManagePermission')->name('manage-permissions');
        Route::post('config/user/permission-save', 'AdminController@postSavePermission')->name('save-permission');
        Route::get('config/user/permission/{id}', 'AdminController@getEditPermission')->name('edit-permission');
        Route::post('config/user/permission/update', 'AdminController@postUpdatePermission')->name('update-permission');


        Route::group(['prefix'=>'load'], function () {

            //Load
            Route::get('cddh', 'DichVuCongController@getCDDH')->name('load-cddh');
            Route::get('llv', 'DichVuCongController@getLLV')->name('load-llv');
            Route::get('vbm', 'DichVuCongController@getVBM')->name('load-vbm');
            Route::get('tintt', 'DichVuCongController@getTinTT')->name('load-tintt');
            Route::get('tintn', 'DichVuCongController@getTinTN')->name('load-tintn');
            Route::get('tinqt', 'DichVuCongController@getTinQT')->name('load-tinqt');
            Route::get('dnh', 'DichVuCongController@getDNH')->name('load-dnh');
        });

        Route::group(['prefix'=>'cau-hinh'], function () {

            Route::group(['prefix'=>'users-roles'], function () {

                Route::resource('users', 'UsersController');
                Route::resource('roles', 'RoleController');
                Route::resource('permissions', 'PermissionController');
                //    Route::resource('posts', 'PostController');
            });


            Route::get('/', 'AdminController@getConfigPage')->name('config');

            Route::get('he-thong/activities', 'WatchdogController@getWatchdogPage')->name('activities');

            Route::get('he-thong/settings', 'AdminController@getSettingsPage')->name('settings');
            Route::post('he-thong/settings', 'AdminController@postHandleSettingsPageSave')->name('settings-save');
            Route::post('he-thong/settings-add', 'AdminController@postHandleSettingsPageAdd')->name('settings-add');

            Route::get('he-thong/toppic', 'TopPicController@index')->name('index-toppic');
            Route::post('he-thong/save-toppic', 'TopPicController@store')->name('save-toppic');
            Route::get('he-thong/edit-toppic', 'TopPicController@edit')->name('edit-toppic');
            Route::post('he-thong/update-toppic', 'TopPicController@update')->name('update-toppic');



        });


    });




    Route::group(['prefix'=>'cau-hinh','middleware' => 'role:tbt'], function () {

        Route::get('chuyen-muc', 'ChuyenMucController@index')->name('index-chuyen-muc');
        Route::post('chuyen-muc', 'ChuyenMucController@store')->name('save-chuyen-muc');
        Route::get('chuyen-muc/{id}', 'ChuyenMucController@show')->name('edit-chuyen-muc');
        Route::post('chuyen-muc/update', 'ChuyenMucController@update')->name('update-chuyen-muc');

        Route::get('loai-tin', 'LoaiTinController@index')->name('index-loai-tin');
        Route::post('loai-tin', 'LoaiTinController@store')->name('save-loai-tin');
//        Route::get('loai-tin/{id}', 'LoaiTinController@show')->name('edit-loai-tin');
        Route::post('loai-tin/update', 'LoaiTinController@update')->name('update-loai-tin');


    });

    Route::group(['prefix' => 'lien-ket', 'middleware' => 'role:tbt'], function () {

        Route::get('banner-trang-chu', 'BannerController@index')->name('banner-trang-chu');
        Route::post('banner-trang-chu', 'BannerController@store')->name('save-banner-trang-chu');
        Route::get('banner-trang-chu/{id}', 'BannerController@edit')->name('edit-banner-trang-chu');
        Route::post('banner-trang-chu/update', 'BannerController@update')->name('update-banner-trang-chu');

        //Phim tat

        Route::resource('phim-tat', 'PhimTatController');

        Route::get('so-ban-nganh', 'CoQuanController@index')->name('so-ban-nganh');
        Route::post('so-ban-nganh', 'CoQuanController@store')->name('save-so-ban-nganh');
        Route::get('so-ban-nganh/{id}', 'CoQuanController@show')->name('edit-so-ban-nganh');
        Route::post('so-ban-nganh/update', 'CoQuanController@update')->name('update-so-ban-nganh');


    });



//        Route::post('cau-hinh/lien-ket/banner-trang-chu', 'BannerController@store')->name('save-banner-trang-chu');
//        Route::get('cau-hinh/lien-ket/banner-trang-chu/{id}', 'BannerController@edit')->name('edit-banner-trang-chu');
//        Route::post('cau-hinh/lien-ket/banner-trang-chu/update', 'BannerController@update')->name('update-banner-trang-chu');



});



//API

Route::middleware('auth')->get('api/user', function (Request $request) {
    return $request->user();    
});


Route::group(['prefix' => 'api/v1', 'middleware' => 'auth'], function () {

    Route::post('sidebar-toggle', 'Api\UserApiController@postSidebarToggle');

    Route::post('image-upload', 'Api\UserApiController@postUploadProfilePic');

    Route::get('watchdog-entries', 'Api\UserApiController@getUserWatchdogEntries');

    Route::get('get-media', 'Api\MediaApiController@index');

    Route::post('media-upload', 'Api\MediaApiController@uploadMediaImage');

    Route::post('media/meta-data', 'Api\MediaApiController@imageMetaData');

    Route::post('delete-media', 'Api\MediaApiController@deleteMedia');

    Route::get('get-file', 'Api\FileApiController@index');

    Route::post('file-upload', 'Api\FileApiController@uploadFile');

    Route::post('delete-file', 'Api\FileApiController@deleteFile');

    Route::post('delete-banner-trang-chu', 'BannerController@destroy');


    Route::group(['middleware' => 'role:admin'], function () {

        Route::post('activate-user', 'Api\UserApiController@postActivateUser');

        Route::post('delete-user', 'Api\UserApiController@postDeleteUser');

        Route::post('delete-role', 'Api\AdminApiController@postDeleteRole');

        Route::post('delete-permission', 'Api\AdminApiController@postDeletePermission');

        Route::get('import-users/{uuid}', 'Api\AdminApiController@importCorrectUsers')->name('import-incomplete-data');

        Route::get('edit-users/{uuid}', 'Api\AdminApiController@editWrongUsersLive');

    });

    Route::group(['middleware' => 'role:tbt'], function () {

        Route::post('delete-tin-tuc', 'TinTucController@destroy');

        Route::post('duyet-tin-tuc', 'TinTucController@postDuyetTinTuc');

        Route::post('noi-bat-tin-tuc', 'TinTucController@postNoiBatTinTuc');

        Route::post('tin-van', 'TinTucController@postTinVan');
       
        Route::post('delete-chuyen-muc', 'Api\TbtApiController@postDeleteChuyenMuc');
        
        Route::post('delete-loai-tin', 'Api\TbtApiController@postDeleteLoaiTin');

        Route::post('delete-toppic', 'Api\TbtApiController@postDeleteTopPic');

        Route::post('delete-van-ban', 'VanBanController@destroy');

        Route::post('duyet-van-ban', 'VanBanController@postDuyetVanBan');

        Route::post('duyet-van-ban-khac', 'VanBanKhacController@postDuyetVanBan');

        Route::post('thong-bao', 'VanBanKhacController@postThongBao');

        Route::post('delete-van-ban-khac', 'VanBanKhacController@destroy');

        Route::post('duyet-video', 'VideoController@postDuyet');

        Route::post('noi-bat-video', 'VideoController@postNoiBat');

        Route::post('delete-video', 'VideoController@destroy');

        Route::post('delete-hoi-dap-truc-tuyen', 'HoiDapTrucTuyenController@destroy');








    });

    
});


