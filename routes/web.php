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
Route::get('/foto', function () {
    return view('foto');
});
Route::get('/video', function () {
    return view('video');
});
// Informasi Berkala
Route::get('/informasi/laporaninfo', function () {
    return view('mega menu.Informasi Berkala.laporaninfo');
});
Route::get('/informasi/laporan-keuangan', function () {
    return view('mega menu.Informasi Berkala.laporankeuangan');
});
Route::get('/informasi/produk-hukum', function () {
    return view('mega menu.Informasi Berkala.produkhukum');
});
Route::get('/informasi/ketenagakerjaan', function () {
    return view('mega menu.Informasi Berkala.ketenagakerjaan');
});
Route::get('/informasi/prosedur-peringatan', function () {
    return view('mega menu.Informasi Berkala.prosedurperingatandini');
});
Route::get('/informasi/realisasi-2022', function () {
    return view('mega menu.Informasi Berkala.realisasi2022');
});
Route::get('/informasi/realisasi-2023', function () {
    return view('mega menu.Informasi Berkala.realisasi2023');
});
Route::get('/informasi/program-kegiatan-2023', function () {
    return view('mega menu.Informasi Berkala.programkegiatan2023');
});
Route::get('/informasi/lakip', function () {
    return view('mega menu.Informasi Berkala.lakip'); 
});
Route::get('/informasi/RKPD', function () {
    return view('mega menu.Informasi Berkala.RKPD'); 
});
Route::get('/informasi/skinformasipublik', function () {
    return view('mega menu.Informasi Berkala.skinfopublik'); 
});
Route::get('/informasi/LAKIP', function () {
    return view('mega menu.Informasi Berkala.LAKIP'); 
});
Route::get('/informasi/SK_klasifikasi', function () {
    return view('mega menu.Informasi Berkala.sklasifikasi'); 
});
Route::get('/informasi/SK_maklumat', function () {
    return view('mega menu.Informasi Berkala.skmaklumat'); 
});
Route::get('/informasi/SK_pengawasan', function () {
    return view('mega menu.Informasi Berkala.skpengawasan'); 
});
//profil
Route::get('/profil/visimisi', function () {
    return view('mega menu.profil ppid.visimisi');
});