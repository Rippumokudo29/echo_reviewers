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
//     return view('posts/index');
// });

Route::get('/', 'PostController@top');
Route::post('/posts', 'PostController@store');
Route::get('/top/create', 'PostController@create');
Route::get('/categories/{category}', 'PostController@show');
Route::post('/test', 'PostController@test');