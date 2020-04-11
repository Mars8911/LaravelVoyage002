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

// Route::get('/', function () {
//     return view('home');
// });


//首頁
Route::get('/', [
    'uses' => 'HomeController@home',
    'as' => 'home'
]);

//二手書店
Route::get('/acquisition', [
    'uses' => 'HomeController@acquisition',
    'as' => 'acquisition'
]);

//最新消息
Route::get('/news', [
    'uses' => 'HomeController@news',
    'as' => 'news'
]);

//最新消息單一頁面
Route::get('news/{id}', [
    'uses' => 'HomeController@slugpost',
    'as' => 'slug.news'
]);


//關於我們
Route::get('/about', [
    'uses' => 'HomeController@about',
    'as' => 'about'
]);


//聯繫我們
Route::get('/content', [
    'uses' => 'HomeController@content',
    'as' => 'content'
]);


//分類頁面
Route::get('/category/{id}', [
    'uses' => 'HomeController@category',
    'as' => 'slug.category'
]);










Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
