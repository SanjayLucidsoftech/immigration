<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

//Route::post('register','Auth\RegisterController@register');

Route::get('/guest/menu', 'Api\Common\SiteLayoutController@menu');
Route::get('/guest/page/{id}', 'Api\Common\SiteLayoutController@page');
/*Route::post('register','Api\Auth\RegisterController@register');
Route::post('login','Api\Auth\LoginController@login');*/
     

Route::post('login', 'Api\PassportController@login');
Route::post('register', 'Api\PassportController@register');

Route::group(['middleware' => ['auth:api','cors']], function(){
	Route::get('get-details', 'Api\PassportController@getDetails');
});