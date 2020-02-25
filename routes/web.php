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



Auth::routes();


Route::get('/settings.html', function(){
    return view("other/settings");
})->name('settings');


Route::get('/', 'HomeController@index')->name('main');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home1', 'HomeController@index1')->name('home1');
Route::get('/profile', 'HomeController@profile')->name('profile');
Route::post('/profile-update', 'HomeController@profileUpdate')->name('profile_update');
Route::post('/profile-picture-update', 'HomeController@profilePictureUpdate')->name('profile_picture_update');
Route::post('/change-password', 'HomeController@changePassword')->name('change_password');
Route::get('logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);


Route::get('/whereaboutdata', 'ApiController@getWhereAboutData')->name('whereaboutdata');
Route::get('/appliancessdata', 'ApiController@getAppliancesData')->name('appliancessdata');
Route::get('/notification', 'ApiController@getNotificationData')->name('notiifcation');
Route::get('/sensorData', 'ApiController@getSensorData')->name('getsensordata');
Route::get('/health', 'ApiController@getHealthData')->name('getHealthData');






Route::get('/test', function(){
    
});

Route::get('/users', 'UserController@index')->name('users');
Route::get('/users-details/{user_id}', 'UserController@details')->name('details');
Route::post('/user-sensor-update/{user_id}', 'UserController@senssorUpdate')->name('user_sensor_update');
