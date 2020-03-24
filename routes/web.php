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

Route::get('/', 'WelcomeController@index')->name('welcome');
Route::get('/hello', 'HelloController@index')->name('hello');
Route::get('/info', 'InfoController@index')->name('info');
Route::get('/test', 'TestController@index')->name('test');
Route::get('/Auth', 'AuthController@index')->name('Auth');

Route::group([
    'prefix'=> 'admin',
    'as'=> 'admin::',
],function(){
    Route::get('/', 'adminController@index')
    ->name('main');
    Route::match(['get','post'],'/add', 'admin\AdminNewsController@addNews')
    ->name('add');


});

Route::group([
    'prefix'=> 'news',
    'as'=> 'news::',
],function(){
    Route::get('/', 'news\NewsController@index')
    ->name('news');
    Route::get('/category/{id}', 'news\NewsController@newsCategories')
    ->name('category');

    Route::get('/card/{id}', 'news\NewsController@newsCard')
    ->name('id');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
