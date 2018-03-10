<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/introduction', function () {
    return view('guest.introduction');
});
Route::get('/features', function () {
    return view('guest.features');
});
Route::get('/prices', function () {
    return view('guest.prices');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/settings/company/general', 'settings\CompSettingController@general')->name('settings.general');




//Route::get('/admin/home', 'AdminController@index')->name('admin.home');
Route::get('/admin/home', 'AdminController@index')->name('admin.home');;
Route::get('admin','Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('admin','Admin\LoginController@login');
//Route::post('logout','Admin\LoginController@logout')->name('admin.logout');;
Route::post('/admin-password/email','Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('/admin-password/reset','Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('/admin-password/reset','Admin\ResetPasswordController@reset');
Route::get('/admin-password/reset/{token}','Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
Route::get('/admin-register','Admin\RegisterController@showRegistrationForm')->name('admin.register');
Route::post('/admin-register','Admin\RegisterController@register');
Route::get('/admin/users', 'Admin\UserController@index')->name('admin.user.user');




/* Admin  routs started ************************/
Route::get('/admin/settings/web/general', 'Admin\settings\WebSettingController@general')->name('admin.settings.general');
Route::post('/admin/settings/web/general', 'Admin\settings\WebSettingController@postGeneral');

Route::get('/admin/settings/web/site-pages', 'Admin\settings\WebSettingController@sitepages')->name('admin.settings.sitepages');
Route::get('/admin/settings/web/addpage', 'Admin\settings\WebSettingController@addPage')->name('sitepage_form');
Route::post('/admin/settings/web/addpage', 'Admin\settings\WebSettingController@postAddpage');
Route::get('/admin/settings/web/editpage/{id}', 'Admin\settings\WebSettingController@editPage')->name('editsitepage_form');
Route::post('/admin/settings/web/updatepage/{id}', 'Admin\settings\WebSettingController@updatePage')->name('updatesitepage_form');
Route::get('/admin/settings/web/deletepage/{id}', 'Admin\settings\WebSettingController@deletePage')->name('deletesitepage_form');





 


// Route::post('/admin/settings/web/general', 'Admin\settings\WebSettingController@postGeneral');
/* Admin  routs End  ************************/