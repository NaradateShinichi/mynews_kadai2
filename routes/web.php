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

Route::group(['prefix' => 'admin'], function () {
    Route::get('news/create','Admin\NewsController@add')->middleware('auth');
    Route::post('news/create','Admin\NewsController@create')->middleware('auth');
    Route::get('news','Admin\NewsController@index')->middleware('auth'); //PHP/Laravel 15テキスト
    Route::get('news/edit','Admin\NewsController@edit')->middleware('auth'); //PHP/Laravel 16テキスト
    Route::post('news/edit','Admin\NewsController@update')->middleware('auth'); //PHP/Laravel 16テキスト
    Route::get('news/delete','Admin\NewsController@delete')->middleware('auth'); //PHP/Laravel 16テキスト
    
    
 
    
    //課題4
    Route::get('profile/create','Admin\ProfileController@add')->middleware('auth');
    Route::get('profile/edit','Admin\ProfileController@edit')->middleware('auth');
    Route::post('profile/create','Admin\ProfileController@create')->middleware('auth');
    Route::post('profile/update','Admin\ProfileController@update')->middleware('auth');
    
    Route::get('profile', 'Admin\ProfileController@index')->middleware('auth'); // PHP/Laravel 16課題3
    Route::post('profile/edit','Admin\ProfileController@update')->middleware('auth'); //PHP/Laravel 16課題3
    Route::get('profile/delete','Admin\ProfileController@delete')->middleware('auth'); //PHP/Laravel 16課題3
});

//課題3
Route::get('xxx','Admin\AAAController@bbb');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'NewsController@index'); //PHP/Laravel 18テキスト

Route::get('/profile', 'ProfileController@index'); //PHP/Laravel 18テキスト

