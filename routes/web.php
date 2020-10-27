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

Route::get('/', 'FrontController@index');
Route::get('/future', 'FrontController@index_future');
Route::get('/system_0', 'FrontController@system_0');
Route::get('/system_0/{movie_id}_{movie_id2}', 'FrontController@system_0');
Route::get('/system_1', 'FrontController@system_1');
Route::get('/system_1/{movie_id}_{movie_id2}_{amount1}_{amount2}_{amount3}', 'FrontController@system_1');
Route::get('/system_2', 'FrontController@system_2');
Route::get('/system_2/{movie_id}_{movie_id2}_{amount1}_{amount2}_{amount3}_{seat}', 'FrontController@system_2');
Route::get('/query', 'FrontController@query');
Route::get('/query/{date}', 'FrontController@querySelect');
Route::get('/movie_all', 'FrontController@movie_now');
Route::get('/movie_now', 'FrontController@movie_now');
Route::get('/movie_future', 'FrontController@movie_future');

Route::get('/movie_info/{movie_id}', 'FrontController@movie_info');
Route::get('/cinema_info', 'FrontController@cinema_info');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('send-mail','MailSend@mailsend');

// Route::get('login/github', 'Auth\LoginController@redirectToProvider');
// Route::get('login/github/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('auth/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\LoginController@handleProviderCallback');



Route::get('/admin', 'HomeController@index')->name('home');

Route::prefix('admin')->middleware(['auth'])->group(function(){

    Route::get('movie','movieController@index');
    Route::get('movie/create','movieController@create');
    Route::post('movie/store','movieController@store');
    Route::get('movie/edit/{movie_id}','movieController@edit');
    Route::post('movie/update/{movie_id}','movieController@update');
    Route::get('movie/destroy/{movie_id}','movieController@destroy');

});

