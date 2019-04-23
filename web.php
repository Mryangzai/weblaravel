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

Route::get('/', function () {
    return view('welcome');
});
//用户管理
Route::group(['namespace'=>'Users'],function (){
    Route::match(['get','post'],'user/login','UsersController@index')->name('user/login');
    Route::match(['get','post'],'create','UsersController@create')->name('create');
    Route::get('edit/{id}','UsersController@edit')->name('edit');
    Route::put('edit/{id}','UsersController@update')->name('edit');
    Route::get('del/{id}','UsersController@del')->name('del');
    Route::delete('deleteAll','UsersController@deleteAll')->name('deleteAll');
});
//    Route::get( 'login','Users\UsersController@index');

Route::group(['namespace'=>'Article'],function ()
{
    Route::match(['get','post'],'article/index','ArticleController@index')->name('article/index');
    Route::match(['get','post'],'article/add','ArticleController@add')->name('article/add');
    Route::get('article/edit/{id}','ArticleController@edit')->name('article/edit');
    Route::post('article/edit/{id}','ArticleController@update')->name('article/edit');
    Route::delete('article/del/{id}','ArticleController@del')->name('article/del');
    Route::get('article/read/{id}','ArticleController@read')->name('article/read');

});

        //登录
    Route::match(['get','post'],'login/login','Login\LoginController@login')->name('login/login');
    Route::match(['get','post'],'login/walk','Login\LoginController@walk')->name('login/walk');






