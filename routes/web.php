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

Route::get('/', 'WelcomeController@index')
    ->name('welcome');
Route::get('/hello', 'HelloController@index')
    ->name('hello');
Route::get('/info', 'InfoController@index')
    ->name('info');
Route::get('/test', 'TestController@index')
    ->name('test');
Route::get('/Auth', 'AuthController@index')
    ->name('Auth');

Route::group([
    'prefix' => 'admin',
    'as' => 'admin::',
],
    function () {
        Route::get('/', 'AdminController@index')
            ->name('index');
        Route::group([
            'prefix' => '/news',
            'as' => 'news::',],
            function () {
                Route::get('/', 'admin\AdminNewsController@index')
                    ->name('news');
                Route::match(['get','post'],'/create', 'admin\AdminNewsController@create')
                    ->name('create');
                Route::get('/delete/{id}', 'admin\AdminNewsController@delete')
                    ->name('delete');
                Route::match(['get','post'],'/update/{id}', 'admin\AdminNewsController@update')
                    ->name('update');
            }
        );

//    Route::match(['get','post'],'/add', 'admin\AdminNewsController@addNews')
//    ->name('add');


    });

Route::group([
    'prefix' => 'news',
    'as' => 'news::',
], function () {
    Route::get('/', 'news\NewsController@index')
        ->name('news');
    Route::get('/category/{id}', 'news\NewsController@newsCategories')
        ->name('category');

    Route::get('/card/{news}', 'news\NewsController@newsCard')
        ->name('id');
});


Route::group([
    'prefix' => 'comment',
    'as' => 'comment::',
], function () {
    Route::get('/', 'Comments\commentsController@index')
        ->name('index');
    Route::get('/delete/{id_news}/{id_comment}', 'Comments\commentsController@delete')
        ->name('delete');
    Route::get('/create/{id}', 'Comments\commentsController@create')
        ->name('create');
    Route::post('/save', 'Comments\commentsController@save')
        ->name('save');
    Route::get('/update/{id_comment}', 'Comments\commentsController@update')
        ->name('update');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
