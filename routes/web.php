<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home');
});

Route::get('/property', function () {
    return view('property');
})->name('property');

Route::get('/chekout', function () {
    return view('chekout');
})->name('chekout'); 

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
});