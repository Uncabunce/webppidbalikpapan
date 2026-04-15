<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/news', function () {
    return view('news');
});
Route::get('/formulir', function () {
    return view('formulir');
});
Route::get('/keberatan', function () {
    return view('keberatan');
});
Route::get('/kontak', function () {
    return view('kontak');
});