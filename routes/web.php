<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/film', function () {
    return view('film');
});

Route::get('/user', function () {
    return view('user');
});

Route::get('/report', function () {
    return view('report');
});
