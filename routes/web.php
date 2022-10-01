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
    Route::get('/vue', 'PlanController@vue');
    Route::get('/users/{user}/edit', 'UserController@edit');
    Route::get('/users/{user}', 'UserController@index');
    Route::get('/plans/{plan}', 'PlanController@show'); //　この処理を一番最後に書かないと{plan}にあらゆる値が入ってしまいshowを表示するようになる
    
    Route::post('/plans', 'PlanController@store');
    
    Route::put('/plans/{plan}', 'PlanController@update');
    
    Route::delete('plans/{plan}', 'PlanController@delete');
});

Auth::routes();