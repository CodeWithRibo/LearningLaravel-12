<?php

use Illuminate\Support\Facades\Route;

#Defined on what web browser reponsed in http request
Route::get('/', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/button', function () {
    return view('Components/button');
});
