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

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/reports', function () {
    return view('admin.reports');
});

Route::get('/home', function () {
    return view('user.home');
});

Route::get('/property.gear', function () {
    return view('user.property.gear');
});

Route::get('/property.carrier', function () {
    return view('user.property.carrier');
});
