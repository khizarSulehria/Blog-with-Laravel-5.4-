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

Route::get('post/index',function (){
    return view('posts.index');
});


Route::get('home',function (){
    return view('pages.index');
})->name('pages.index');

Route::get('about',function (){
    return view('pages.about');
})->name('pages.about');

Route::get('contact',function (){
    return view('pages.contact');
})->name('pages.contact');
