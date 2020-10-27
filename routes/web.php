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
//     return view('welcome');
// });

Route::get('/', 'FrontController@index');

Route::get('/contact_us', 'FrontController@contact_us');

Route::POST('/store_contact', 'FrontController@store_contact');

Route::get('/news', 'FrontController@news');

Route::get('/news_info/{news_id}', 'FrontController@news_info');

Route::get('/movie_all', 'FrontController@movie_all');

Route::get('/movie_info/{movie_id}', 'FrontController@movie_info');

Route::get('/movie_all/{movie_type_id}', 'FrontController@A');


// cart test

Route::get('/addProductToCar', 'CartController@addProductToCar');
Route::get('/getContent', 'CartController@getContent');
Route::get('/TotalCart', 'CartController@TotalCart');


// Auth::routes();

Auth::routes(['register' => false, 'reset' => false,]);

Route::get('/admin', 'HomeController@index')->name('home');

Route::prefix('admin')->middleware(['auth'])->group(function(){

    Route::get('news','NewsController@index');
    Route::get('news/create','NewsController@create');
    Route::post('news/store','NewsController@store');
    Route::get('news/edit/{news_id}','NewsController@edit');
    Route::post('news/update/{news_id}','NewsController@update');
    Route::get('news/destory/{news_id}','NewsController@destory');

});

Route::prefix('admin')->middleware(['auth'])->group(function(){

    Route::get('movie','MovieController@index');
    Route::get('movie/create','MovieController@create');
    Route::post('movie/store','MovieController@store');
    Route::get('movie/edit/{movie_id}','MovieController@edit');
    Route::post('movie/update/{movie_id}','MovieController@update');
    Route::get('movie/destory/{movie_id}','MovieController@destory');

});

Route::prefix('admin')->middleware(['auth'])->group(function(){

    Route::get('movie_type','Movietype@index');
    Route::get('movie_type/create','Movietype@create');
    Route::post('movie_type/store','Movietype@store');
    Route::get('movie_type/edit/{movie_id}','Movietype@edit');
    Route::post('movie_type/update/{movie_id}','Movietype@update');
    Route::get('movie_type/destory/{movie_id}','Movietype@destory');
    Route::post('/ajax_upload_img','AdminController@ajax_upload_img');
    Route::post('/ajax_delete_img','AdminController@ajax_delete_img');
});
