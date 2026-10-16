<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


Route::get('/works', function () {return view('works');});
Route::get('/about', function () {return view('about');});
Route::get('/services', function () {return view('services');});
Route::get('/team', function () {return view('team');});
Route::get('/blog', function () {return view('blog');});
Route::get('/contact', function () {return view('contact');});
