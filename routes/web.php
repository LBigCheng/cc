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

Route::get('/', 'TodoController@guides');

Route::view('/test', 'layouts.test');

Route::view('/master', 'layouts.master');

Route::get('/{group}_{num}', 'TodoController@guides'); //gruop_num  ex:GP_1   group->GP  num->1 傳到TodoController@GP

