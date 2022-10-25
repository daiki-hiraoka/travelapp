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

Route::group(['middleware' => ['auth']],function() {
    Route::get('/', 'PlanController@index');
    Route::get('/plans/create', 'PlanController@create');
    Route::get('/plans/{plan}/edit','PlanController@edit');
    Route::get('/profiles/{user}/edit', 'ProfileController@edit');
    Route::get('/profiles/{user}', 'ProfileController@index');
    Route::get('/plans/{plan}/check', 'LikeController@check')->name('like.check');
    Route::get('/plans/{plan}/counts', 'LikeController@counts');
    Route::get('/plans/search', 'PlanController@search');
    Route::get('plans/{user}/likes', 'LikeController@index');
    Route::get('/plans/{plan}', 'PlanController@show');//　この処理を一番最後に書かないと{plan}にあらゆる値が入ってしまいshowを表示するようになる
    Route::get('/users/{user}/followcheck', 'FollowUserController@check');
    
    Route::get('/users/{user}', 'UserController@index');
    
    
    Route::post('/plans', 'PlanController@store');
    Route::post('/plans/{plan}/likes', 'LikeController@store');
    Route::post('/users/{user}/follow', 'FollowUserController@follow');
    Route::post('/like/{planId}', 'LikeController@store');
    Route::post('/unlike/{planId}', 'LikeController@destroy');
    
    Route::put('/plans/{plan}', 'PlanController@update');
    Route::put('/profiles/{user}', 'ProfileController@update');
    
    Route::delete('plans/{plan}', 'PlanController@delete');
});

Auth::routes();