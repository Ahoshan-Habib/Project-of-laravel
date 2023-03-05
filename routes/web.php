<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('dashboard');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/from', function () {
    return view('from');
});

Route::get('/list', function () {
    return view('list');
});