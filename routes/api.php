<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => 'auth'
], function () {
    Route::post('login', 'AuthController@login');
    Route::post('signup', 'AuthController@signup');

    Route::group([
      'middleware' => 'auth:api'
    ], function() {
        Route::get('logout', 'AuthController@logout');
        Route::get('user', 'AuthController@user');

        Route::post('baptis','BaptisController@store');
        Route::patch('baptis','BaptisController@patch');
        Route::delete('baptis/{id}','BaptisController@delete');
        Route::get('baptis', 'BaptisController@getAll');
        Route::get('baptis/{user_id}', 'BaptisController@getByUserID');
        Route::get('baptis/{id}', 'BaptisController@getByID');
        
        Route::post('pemberkatan','PemberkatanController@store');
        Route::patch('pemberkatan','PemberkatanController@patch');
        Route::delete('pemberkatan','PemberkatanController@delete');
        Route::get('pemberkatan', 'PemberkatanController@getAll');
        Route::get('pemberkatan/{user_id}', 'PemberkatanController@getByUserID');
        Route::get('pemberkatan/{id}', 'PemberkatanController@getByID');
        
        Route::post('pindah','PindahController@store');
        Route::patch('pindah','PindahController@patch');
        Route::delete('pindah/{id}','PindahController@delete');
        Route::get('pindah', 'PindahController@getAll');
        Route::get('pindah/{user_id}', 'PindahController@getByUserID');
        Route::get('pindah/{id}', 'PindahController@getByID');
    });
});