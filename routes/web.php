<?php
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/whistleblower', function () {
    return view('whistleblower');
});
Route::get('/permohonan', function () {
    return view('permohonan');
});
Route::get('/keberatan', function () {
    return view('keberatan');
});
Route::get('/kontak', function () {
    return view('kontak');
});
Route::get('/stats', function () {
    return view('stats');
});
Route::get('/insidenews', function () {
    return view('insidenews');
});
Route::get('/news', function () {
    return view('news');
});

Route::get('/news/{page}', function ($page) {
    return view('news', ['page' => $page]);
})->where('page', '[0-9]+');

Route::get('/news/newnews', function () {
    return view('newnews');
});