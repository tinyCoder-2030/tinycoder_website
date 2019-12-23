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
Route::resource('contact-us', 'frontend\ContactController');
Route::resource('userWorkshop', 'frontend\WorkshopController');
Route::get('/about-us', 'frontend\HomeController@about')->name('about-us');
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login.show');
// Route::get('password/reset', 'Auth\ResetPasswordController@showResetForm')->name('password.request');
// Route::get('reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('reset.show');
// Route::post('login', 'Auth\LoginController@login')->name('login');
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register.show');
// Route::post('register', 'Auth\RegisterController@register')->name('login');
Route::get('/', 'frontend\HomeController@index')->name('index');
Route::get('/allBlog', 'frontend\HomeController@blog')->name('allBlog');
Route::get('/allBlog/{blog}', 'frontend\HomeController@showBlog')->name('allBlog.show');
Route::get('/photo', 'frontend\HomeController@photo')->name('photo');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware' => ['auth', 'roles'], 'roles' => ['admin']], function() {
    Route::resource('roles','Admin\RoleController');
    Route::resource('aboutus','Admin\AboutUsController');
    Route::resource('admins','Admin\AdminController');
    Route::resource('blog','Admin\BlogController');
    Route::resource('contact','Admin\ContactUsController');
    Route::get('get-contact-data', ['uses' => 'Admin\ContactUsController@getData', 'as' => 'contact.get_data']);
    Route::get('get-blog-data', ['uses' => 'Admin\BlogController@getData', 'as' => 'blog.get_data']);
    Route::resource('socialNetwork','Admin\SocialNetworkController');
 
    Route::resource('testimonials','Admin\TestimonialController');
    Route::get('get-social-data', ['uses' => 'Admin\SocialNetworkController@getData', 'as' => 'social.get_data']);
    Route::get('get-testimonials-data', ['uses' => 'Admin\TestimonialController@getData', 'as' => 'testimonials.get_data']);
    Route::resource('photoGallery','Admin\PhotoGalleryController');
    Route::get('get-photoGallery-data', ['uses' => 'Admin\PhotoGalleryController@getData', 'as' => 'photoGallery.get_data']);
    Route::resource('users','Admin\UserController');
    Route::get('get-users-data', ['uses' => 'Admin\UserController@getData', 'as' => 'users.get_data']);
    Route::resource('workshops','Admin\WorkshopController');
    Route::get('workshop_get_data','Admin\WorkshopController@get_data')->name('workshops.get_data');
});