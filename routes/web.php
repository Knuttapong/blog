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

Route::get('/json', function () {
    return [
      ["Name"=>"BonuZz","Age"=>22],
      ["Name"=>"Muto","Age"=>1]
    ];
});

Route::get('/profile', "ProfileController@getInfo");

Route::get('/{id}/name', "ProfileController@getName");

Route::get('/json2', function () {
    return [
      ["Name"=>"BonuZz","Age"=>22],
      ["Name"=>"Muto","Age"=>1]
    ];

    
});
