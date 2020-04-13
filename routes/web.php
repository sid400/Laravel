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
/*
 |---------------------------------------------
 | Main routes
 |---------------------------------------------
 */
Route::get('/', 'WelcomeController@index')
    ->name('welcome');
Route::get('/hello', 'HelloController@index')
    ->name('hello');
Route::get('/info', 'InfoController@index')
    ->name('info');
Route::get('/info/{id}', 'InfoController@test')
    ->name('info2')
    ->middleware('testbefore', 'testafter');
Route::get('/home', 'HomeController@index')
    ->name('home');
/*
 |---------------------------------------------
 | Admin routes
 |---------------------------------------------
 */

Route::group([
    'prefix' => 'admin',
    'as' => 'admin::',
    'middleware' => ['auth'],
],
    function () {
        Route::get('/', 'AdminController@index')
            ->name('index');
        /* GROUP news */
        Route::group([
            'prefix' => '/news',
            'as' => 'news::',],
            function () {
                Route::get('/', 'admin\AdminNewsController@index')
                    ->name('news');
                Route::match(['get', 'post'], '/create', 'admin\AdminNewsController@create')
                    ->name('create');
                Route::get('/delete/{id}', 'admin\AdminNewsController@delete')
                    ->name('delete');
                Route::match(['get', 'post'], '/update/{id}', 'admin\AdminNewsController@update')
                    ->name('update');
            }
        );
        /* GROUP profile */
        Route::group([
            'prefix' => '/profile',
            'as' => 'profile::',],
            function () {
                Route::match(['get', 'post'], '/update', 'admin\ProfileController@update')
                    ->name('update')
                    ->middleware('validate');
            }
        );
        /* GROUP parser */
        Route::group([
            'prefix' => '/parser',
            'as' => 'parser::',],
            function () {
                Route::get('/', 'admin\ParserConroller@index')
                    ->name('parser');
                Route::post('/load', 'admin\ParserConroller@loadNewsFromRss')
                    ->name('load');
            }
        );
    });

/*
 |---------------------------------------------
 | news routes
 |---------------------------------------------
 */
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

/*
 |---------------------------------------------
 | comment routes
 |---------------------------------------------
 */
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

/*
 |---------------------------------------------
 | Auth routes
 |---------------------------------------------
 */

Auth::routes();
Route::get('/Auth/VK', 'Auth\SocialController@login')
    ->name('loginVK');
Route::get('/Auth/ResponseVK', 'Auth\SocialController@responseVK')
    ->name('ResponseVK');
Route::get('/Auth/Git', 'Auth\SocialController@Git')
    ->name('loginGit');
Route::get('/Auth/ResponseGit', 'Auth\SocialController@responseGit')
    ->name('ResponseGit');

