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
Route::get('/','Front\HomeController@index')->name('index.home');
Route::get('/home/jp', function () {
	return view('front.index');
});
Route::match(['get', 'post'],'/login','Dashboard\DashboardController@login')->name('dashboard.login');
Route::group(['prefix'=>'dashboard','middleware' => ['login.dashboard']],function(){
	Route::get('/','Dashboard\DashboardController@index')->name('dashboard.home');
	Route::get('/logout','Dashboard\DashboardController@logout')->name('dashboard.logout');
	Route::group(['prefix'=>'/user'], function () {
		Route::get('/', function () {
			return view('dashboard.user.index');
		});
		Route::get('/update/{id}', function ($id) {
			return "Id = ".$id;
		})->where('id','[0-9]+');
	});
});

