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

Route::group(['prefix' => 'thread'], function() {
    Route::get('create', 'ThreadController@add')->middleware('auth');
    Route::post('create', 'ThreadController@create')->middleware('auth');
    Route::get('/', 'ThreadController@index');
    
    Route::get('show', 'ThreadController@show');
});



// Route::group(["prefix"=>"thread"], function(){
//     Route::group(["middleware"=>"auth"], function(){
//         Route::get('new', 'ThreadController@add');
//         Route::post('create', 'ThreadController@create');
//     });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
