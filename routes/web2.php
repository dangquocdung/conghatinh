<?php


Route::get('/', function () {
   return view('guest.trang-chu');
});

Route::get('/dang-nhap', function () {return view('admin.pages.login');})->name('dang-nhap');
Route::post('/dang-nhap', 'UserController@login')->name('login');

Route::post('forgot-password/send','UserController@postForgotPassword')->name('forgot-password-send');
Route::get('forgot-password/set/{token}', 'UserController@getSetForgotPassword')->name('set-forgot-password');
Route::post('forgot-password/update', ['as' => 'update-forgot-password', 'uses' => 'UserController@postSetForgotPassword']);

/*Urls based on functionality of User can register*/
if (\Setting::get('user_can_register')) {
    Route::get('register', ['as' => 'register', 'uses' => 'UserController@getRegistrationPage']);
    Route::post('do-register', ['as' => 'do-register', 'uses' => 'UserController@postHandleUserRegistration']);
    Route::get('config/user/activation-pending', [
        'middleware' => ['auth', 'role:admin'],
        'as' => 'user-activation-pending',
        'uses' => 'AdminController@getUserActivationPending'
    ]);
}

Route::group(['prefix'=>'toa-soan','middleware' => 'auth'], function () {
    Route::get('dashboard', ['as' => 'dashboard', 'uses' => 'UserController@pageDashboard']);
    Route::get('config/system/my-activities', ['as' => 'my-activities', 'uses' => 'UserController@pageMyActivities']);
    Route::post('do-logout', ['as' => 'logout', 'uses' => 'UserController@postLogout']);
    Route::get('user/profile', ['as' => 'profile', 'uses' => 'UserController@pageUserProfile']);
    Route::post('user/profile', ['as' => 'update-profile', 'uses' => 'UserController@postUpdateProfile']);
    Route::post('user/password-change', ['as' => 'change-password', 'uses' => 'UserController@postHandlePasswordChange']);
    Route::get('media-manager', ['as' => 'media-manager', 'uses' => 'MediaController@index']);

    Route::group(['middleware' => 'role:admin'], function () {
        Route::get('config', ['as' => 'config', 'uses' => 'AdminController@getConfigPage']);
        Route::get('config/system/activities', ['as' => 'activities', 'uses' => 'WatchdogController@getWatchdogPage']);
        Route::get('config/system/settings', ['as' => 'settings', 'uses' => 'AdminController@getSettingsPage']);
        Route::post('config/system/settings', ['as' => 'settings-save', 'uses' => 'AdminController@postHandleSettingsPageSave']);
        Route::post('config/system/settings-add', ['as' => 'settings-add', 'uses' => 'AdminController@postHandleSettingsPageAdd']);

        Route::get('config/user/import', 'AdminController@importUser')->name('import-user');
        Route::post('config/user/import', 'AdminController@handleImportUser')->name('bulk-import-user');
        Route::get('config/user/import/get-data/{uuid}', 'AdminController@getImportData')->name('get-import-data');

        Route::get('config/user/roles', 'AdminController@getManageRoles')->name('manage-roles');
        Route::post('config/user/role-save', 'AdminController@postSaveRoles')->name('save-role');
        Route::get('config/user/roles/{id}', ['as' => 'edit-role', 'uses' => 'AdminController@getEditRole']);
        Route::post('config/user/role/update', ['as' => 'update-role', 'uses' => 'AdminController@postUpdateRole']);

        Route::get('config/user/permissions', ['as' => 'manage-permissions', 'uses' => 'AdminController@getManagePermission']);
        Route::post('config/user/permission-save', ['as' => 'save-permission', 'uses' => 'AdminController@postSavePermission']);
        Route::get('config/user/permission/{id}', ['as' => 'edit-permission', 'uses' => 'AdminController@getEditPermission']);
        Route::post('config/user/permission/update', ['as' => 'update-permission', 'uses' => 'AdminController@postUpdatePermission']);
    });
});