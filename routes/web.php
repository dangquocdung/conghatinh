<?php


Route::get('/', 'GuestController@index');
Route::get('/en', 'GuestController@indexEN');

Route::get('chi-tiet/{slug}','GuestController@tinTuc');
Route::get('chuyen-muc/{slug}','GuestController@chuyenMuc');
Route::get('loai-tin/{slug}','GuestController@loaiTin');

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
    
    Route::post('edit-tin-tuc-su-kien','TinTucController@update')->name('update-tin-tuc');

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
    });

    Route::group(['middleware' => 'role:tbt'], function () {
        

        Route::get('config/chuyen-muc', 'ChuyenMucController@index')->name('chuyen-muc');
        Route::post('config/chuyen-muc', 'ChuyenMucController@store')->name('save-chuyen-muc');
        Route::get('config/chuyen-muc/{id}', 'ChuyenMucController@show')->name('edit-chuyen-muc');
        Route::post('config/chuyen-muc/update', 'ChuyenMucController@update')->name('update-chuyen-muc');

        Route::get('config/loai-tin', 'LoaiTinController@index')->name('loai-tin');
        Route::post('config/loai-tin', 'LoaiTinController@store')->name('save-loai-tin');
        Route::get('config/loai-tin/{id}', 'LoaiTinController@show')->name('edit-loai-tin');
        Route::post('config/loai-tin/update', 'LoaiTinController@update')->name('update-loai-tin');

        
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

    Route::post('delete-tin-tuc', 'Api\UserApiController@postDeleteTinTuc');
    


    Route::group(['middleware' => 'role:admin'], function () {

        Route::post('activate-user', 'Api\UserApiController@postActivateUser');

        Route::post('delete-user', 'Api\UserApiController@postDeleteUser');

        Route::post('delete-role', 'Api\AdminApiController@postDeleteRole');

        Route::post('delete-permission', 'Api\AdminApiController@postDeletePermission');

        Route::get('import-users/{uuid}', 'Api\AdminApiController@importCorrectUsers')->name('import-incomplete-data');

        Route::get('edit-users/{uuid}', 'Api\AdminApiController@editWrongUsersLive');

    });

    Route::group(['middleware' => 'role:tbt'], function () {
       
        Route::post('delete-chuyen-muc', 'Api\TbtApiController@postDeleteChuyenMuc');
        
        Route::post('delete-loai-tin', 'Api\TbtApiController@postDeleteLoaiTin');
        
    });

    
});