<?php

Route::resource('web', 'WebController');

Route::get('/', 'GuestController@index');
Route::get('/en', 'GuestController@indexEN');


Route::get('/chi-tiet/{slug}','GuestController@tinTuc');
Route::get('/chuyen-muc/{slug}','GuestController@chuyenMuc');
Route::get('/loai-tin/{slug}','GuestController@loaiTin');

Route::get('/van-ban/{slug?}','GuestController@vanBan');

Route::get('/api/van-ban-all/{id?}','GuestController@apiVanBan');

// Route::get('/api/van-ban-all/chi-dao-dieu-hanh','GuestController@apiVanBanCHDH');

// Route::get('/api/van-ban-all/cong-bao','GuestController@apiVanBanCB');

Route::get('/chi-tiet-van-ban/{id}','GuestController@ctVanBan');


Route::get('/dang-nhap', function () {return view('admin.pages.login');})->name('dang-nhap');
Route::post('/dang-nhap', 'UserController@login')->name('login');

Route::post('forgot-password/send','UserController@postForgotPassword')->name('forgot-password-send');
Route::get('forgot-password/set/{token}', 'UserController@getSetForgotPassword')->name('set-forgot-password');
Route::post('forgot-password/update', 'UserController@postSetForgotPassword')->name('update-forgot-password');

/*Urls based on functionality of User can register*/
if (\Setting::get('user_can_register')) {
    Route::get('register', 'UserController@getRegistrationPage')->name('register');
    Route::post('do-register', 'UserController@postHandleUserRegistration')->name('do-register');

    Route::get('toa-soan/config/user/activation-pending', 'AdminController@getUserActivationPending')->middleware(['auth', 'role:admin'])->name('user-activation-pending');
}

Route::group(['prefix'=>'toa-soan','middleware' => 'auth'], function () {

    Route::get('/', 'UserController@pageDashboard')->name('dashboard');

    Route::get('dashboard', 'UserController@pageDashboard')->name('dashboard');

    Route::get('config/system/my-activities', 'UserController@pageMyActivities')->name('my-activities');
    Route::post('do-logout', 'UserController@postLogout')->name('logout');
    Route::get('user/profile', 'UserController@pageUserProfile')->name('profile');
    Route::post('user/profile', 'UserController@postUpdateProfile')->name('update-profile');
    Route::post('user/password-change', 'UserController@postHandlePasswordChange')->name('change-password');
    Route::get('media-manager', 'MediaController@index')->name('media-manager');

    Route::get('tin-tuc-su-kien','TinTucController@index')->name('tin-tuc-su-kien');
    Route::get('them-tin-tuc-su-kien','TinTucController@create')->name('tao-tin-tuc');
    Route::post('them-tin-tuc-su-kien','TinTucController@store')->name('them-tin-tuc');

    Route::get('edit-tin-tuc-su-kien/{slug}','TinTucController@edit')->name('edit-tin-tuc');

    Route::post('update-tin-tuc-su-kien','TinTucController@update')->name('update-tin-tuc');

    //Van ban
    Route::group(['prefix'=>'van-ban'],function (){

        Route::get('/tat-ca','VanBanController@index')->name('van-ban');
        Route::get('/them-van-ban','VanBanController@create')->name('tao-van-ban');
        Route::post('/them-van-ban','VanBanController@store')->name('them-van-ban');

        Route::get('/edit-van-ban/{id}','VanBanController@edit')->name('edit-van-ban');

        Route::post('/update-van-ban','VanBanController@update')->name('update-van-ban');

        Route::get('/file-manager', 'FileController@index')->name('file-manager');


        Route::post('/them-nguoi-ki','NguoiKiController@store')->name('save-nguoi-ki');
        Route::post('/them-cqbh','CQBHController@store')->name('save-cqbh');

    });


    Route::group(['middleware' => 'role:admin'], function () {
        Route::get('config', 'AdminController@getConfigPage')->name('config');

        Route::get('config/system/activities', 'WatchdogController@getWatchdogPage')->name('activities');

        Route::get('config/system/settings', 'AdminController@getSettingsPage')->name('settings');
        Route::post('config/system/settings', 'AdminController@postHandleSettingsPageSave')->name('settings-save');
        Route::post('config/system/settings-add', 'AdminController@postHandleSettingsPageAdd')->name('settings-add');


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


        Route::get('config/system/toppic', 'TopPicController@index')->name('toppic');
        Route::post('config/system/save-toppic', 'TopPicController@store')->name('save-toppic');
        Route::get('config/system/edit-toppic', 'TopPicController@edit')->name('edit-toppic');
        Route::post('config/system/update-toppic', 'TopPicController@update')->name('update-toppic');
        




    });

    Route::group(['middleware' => 'role:tbt'], function () {
        
        Route::get('cau-hinh/chuyen-muc', 'ChuyenMucController@index')->name('chuyen-muc');
        Route::post('cau-hinh/chuyen-muc', 'ChuyenMucController@store')->name('save-chuyen-muc');
        Route::get('cau-hinh/chuyen-muc/{id}', 'ChuyenMucController@show')->name('edit-chuyen-muc');
        Route::post('cau-hinh/chuyen-muc/update', 'ChuyenMucController@update')->name('update-chuyen-muc');

        Route::get('cau-hinh/loai-tin', 'LoaiTinController@index')->name('loai-tin');
        Route::post('cau-hinh/loai-tin', 'LoaiTinController@store')->name('save-loai-tin');
        Route::get('cau-hinh/loai-tin/{id}', 'LoaiTinController@show')->name('edit-loai-tin');
        Route::post('cau-hinh/loai-tin/update', 'LoaiTinController@update')->name('update-loai-tin');

        Route::get('cau-hinh/lien-ket/so-ban-nganh', 'CoQuanController@index')->name('so-ban-nganh');
        Route::post('cau-hinh/lien-ket/so-ban-nganh', 'CoQuanController@store')->name('save-so-ban-nganh');
        Route::get('cau-hinh/lien-ket/so-ban-nganh/{id}', 'CoQuanController@show')->name('edit-so-ban-nganh');
        Route::post('cau-hinh/lien-ket/so-ban-nganh/update', 'CoQuanController@update')->name('update-so-ban-nganh');

        Route::get('cau-hinh/lien-ket/banner-trang-chu', 'BannerController@index')->name('banner-trang-chu');
        Route::post('cau-hinh/lien-ket/banner-trang-chu', 'BannerController@store')->name('save-banner-trang-chu');
        Route::get('cau-hinh/lien-ket/banner-trang-chu/{id}', 'BannerController@edit')->name('edit-banner-trang-chu');
        Route::post('cau-hinh/lien-ket/banner-trang-chu/update', 'BannerController@update')->name('update-banner-trang-chu');

        
    });
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
       
        Route::post('delete-chuyen-muc', 'Api\TbtApiController@postDeleteChuyenMuc');
        
        Route::post('delete-loai-tin', 'Api\TbtApiController@postDeleteLoaiTin');

        Route::post('delete-van-ban', 'VanBanController@destroy');

        Route::post('duyet-van-ban', 'VanBanController@postDuyetVanBan');
        
    });

    
});