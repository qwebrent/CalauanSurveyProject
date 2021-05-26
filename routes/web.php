<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('survey', ['as' => 'survey.create', 'uses' => 'SurveyController@create']);
	Route::prefix('/survey')->group(function(){
		Route::post('residence', 'ResidentController@store')->name('residence.store');
		Route::get('residence/edit/{id}', 'ResidentController@edit')->name('residence.edit');
		Route::put('residence/update/{id}', 'ResidentController@update')->name('residence.update');
		Route::get('additional-information/{id}', 'AdditionalInfoController@create')->name('addInfo.create');
		Route::post('additional-information/store/{id}', 'AdditionalInfoController@store')->name('addInfo.store');
		Route::get('additional-information/edit/{id}', 'AdditionalInfoController@edit')->name('addInfo.edit');
		Route::put('additional-information/update/{id}', 'AdditionalInfoController@update')->name('addInfo.update');
		Route::get('relative/{id}', 'RelativeController@create')->name('relative.create');
		Route::post('relative/store/{id}', 'RelativeController@store')->name('relative.store');
		Route::get('relative/edit/{id}', 'RelativeController@edit')->name('relative.edit');
		Route::put('relative/update/{id}', 'RelativeController@update')->name('relative.update');
	});
	Route::get('residents', 'SurveyController@residents')->name('residents');
});

