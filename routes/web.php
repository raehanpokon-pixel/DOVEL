<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Auth.login');
});

Route::get('/register', function () {
    return view('Auth.register');
});

Route::get('/forget', function () {
    return view('Auth.forget');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/property.gear', function () {
    return view('property.gear');
});

Route::get('/property.carrier', function () {
    return view('property.carrier');
});
