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

Route::get('/admin', 'adminController@addNews')->name('adm/addNews');

Route::group([
    'prefix'=> 'admin',
    'as'=> 'admin::',
],function(){
    Route::get('/', 'adminController@index')
    ->name('main');
    Route::get('/add', 'admin\AdminNewsController@addNews')
    ->name('add');

    
});

Route::group([
    'prefix'=> 'news',
    'as'=> 'news::',
],function(){
    Route::get('/categories', 'NewsController@index')
    ->name('categories'); 
    
    Route::get('/card/{id}', 'NewsController@newsCard')
    ->name('id');
});
// Route::get('/news/card/{id}', 'NewsController@newsCard');
// Route::get('/news', 'NewsController@index')->name('news');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
