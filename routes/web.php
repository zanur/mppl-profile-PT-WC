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

Route::get('/home', function () { return view('home'); } );

Route::get('/career', function () { return view('career'); } );

Route::get('/news', function () { return view('news'); } );

Route::get('/product', function () { return view('product'); } );

Route::get('/about', function () { return view('about'); } );

Route::get('/contact', function () { return view('contact'); } );

Route::get('/news_detail', function () { return view('news_detail'); } );

Route::get('/thinner', function () { return view('thinner'); } );
Route::get('/cat', function () { return view('cat'); } );


// Admin
Route::get('/admin-home', function () { return view('admin-home'); } );