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

Route::get('/dashbord', function () {
    return view('backend.index');
})->name('dashbord');
Route::get('/contact-us', 'frontend\ContactUS@index')->name('contact-us');
Route::get('/about-us', 'frontend\HomeController@about')->name('about-us');
Route::get('/', 'frontend\HomeController@index')->name('index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles','Admin\RoleController');
    Route::resource('testimonial','Admin\TestimonialController');
    Route::resource('users','Admin\UserController');
    Route::get('get-users-data', ['uses' => 'Admin\TestimonialController@getData', 'as' => 'users.get_data']);
    Route::resource('workshops','Admin\WorkshopController');
    Route::get('workshop_get_data','Admin\WorkshopController@get_data')->name('workshops.get_data');
});