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

Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('xoomin/home', 'Admin\AdminHomeController@index')->name('admin.home');


// Admin Auth Routes
Route::get('xoomin', 'Admin\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('xoomin', 'Admin\AdminLoginController@login');
Route::post('xoomin-password/email', 'Admin\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('xoomin-password/reset', 'Admin\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('xoomin-password/reset', 'Admin\AdminResetPasswordController@reset');
Route::get('xoomin-password/reset/{token}', 'Admin\AdminResetPasswordController@showResetForm')->name('admin.password.reset');


// ADMIN Route

Route::get('xoomin/home', 'Admin\TestController@index')->name('abcd.home');
Route::any('xoomin/users', 'Admin\AdminUserController@getAll')->name('abcd.users');

Route::get('xoomin/editor', 'Admin\EditorController@index');


Route::resource('xoomin/product', 'Admin\AdminProductController');
Route::resource('xoomin/post', 'Admin\AdminPostController');

Route::any('xoomin/posts', 'Admin\AdminPostController@getAll')->name('abcd.post');
Route::any('xoomin/products', 'Admin\AdminProductController@getAll')->name('abcd.product');

// ADMIN OPTION
Route::get('xoomin/social-links', 'Admin\AdminOptionController@socialLinks')->name('option.social');
Route::post('xoomin/option', 'Admin\AdminOptionController@store')->name('option.store');

// ADMIN MEDIA MANAGER
Route::get('xoomin/media', 'Admin\AdminMediaController@index')->name('media.index');


