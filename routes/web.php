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


//informasi serta merta
Route::get('/informasi/4upayamitigasi', function () {
    return view('mega menu.Informasi Serta Merta.4upayamitigasi');
});
Route::get('/informasi/infopenutupanjalan', function () {
    return view('mega menu.Informasi Serta Merta.infopenutupanjalan');
});
Route::get('/informasi/informasipdam', function () {
    return view('mega menu.Informasi Serta Merta.informasipdam');
});
Route::get('/informasi/infosiapsiaga', function () {
    return view('mega menu.Informasi Serta Merta.infosiapsiaga');
});
Route::get('/informasi/prosedurevakuasi', function () {
    return view('mega menu.Informasi Serta Merta.prosedurevakuasi');
});

//informasi setiap saat
Route::get('/informasi/asetdaerah', function () {
    return view('mega menu.Informasi Setiap Saat.asetdaerah');
});
Route::get('/informasi/daftarinformasi', function () {
    return view('mega menu.Informasi Setiap Saat.daftarinformasi');
});
Route::get('/informasi/hasilpenelitian', function () {
    return view('mega menu.Informasi Setiap Saat.hasilpenelitian');
});
Route::get('/informasi/infomekanismekeberatan', function () {
    return view('mega menu.Informasi Setiap Saat.infomekanismekeberatan');
});
Route::get('/informasi/infopublik', function () {
    return view('mega menu.Informasi Setiap Saat.infopublik');
});
Route::get('/informasi/informasiorganisasi', function () {
    return view('mega menu.Informasi Setiap Saat.informasiorganisasi');
});
Route::get('/informasi/jumlahdilaporkan', function () {
    return view('mega menu.Informasi Setiap Saat.jumlahdilaporkan');
});
Route::get('/informasi/jumlahditemukan', function () {
    return view('mega menu.Informasi Setiap Saat.jumlahditemukan');
});
Route::get('/informasi/perizinan', function () {
    return view('mega menu.Informasi Setiap Saat.perizinan');
});
Route::get('/informasi/perjanjiankerjasama', function () {
    return view('mega menu.Informasi Setiap Saat.perjanjiankerjasama');
});
Route::get('/informasi/rencanakerja', function () {
    return view('mega menu.Informasi Setiap Saat.rencanakerja');
});
Route::get('/informasi/rencanastrategis', function () {
    return view('mega menu.Informasi Setiap Saat.rencanastrategis');
});
Route::get('/informasi/statistikdaerah', function () {
    return view('mega menu.Informasi Setiap Saat.statistikdaerah');
});
//profil pemkot
Route::get('/profil/visimisi', function () {
    return view('mega menu.profil pemkot.visimisi');
});
Route::get('/profil/informasidomisili', function () {
    return view('mega menu.profil pemkot.informasidomisili');
});
Route::get('/profil/LHKPN', function () {
    return view('mega menu.profil pemkot.LHKPN');
});
Route::get('/profil/organisasi', function () {
    return view('mega menu.profil pemkot.organisasi');
});
Route::get('/profil/rekapLHKPN', function () {
    return view('mega menu.profil pemkot.rekapLHKPN');
});

//profil ppid
Route::get('/profil/struktur', function () {
    return view('mega menu.profil ppid.struktur');
});
Route::get('/profil/tugas', function () {
    return view('mega menu.profil ppid.tugas');
});
Route::get('/profil/profil', function () {
    return view('mega menu.profil ppid.profil');
});
Route::get('/profil/visimisi', function () {
    return view('mega menu.profil ppid.visimisi');
});
Route::get('/profil/waktu', function () {
    return view('mega menu.profil ppid.waktu');
});
Route::get('/profil/regulasi', function () {
    return view('mega menu.profil ppid.regulasi');
});
Route::get('/profil/maklumat', function () {
    return view('mega menu.profil ppid.maklumat');
});
Route::get('/profil/pelaksana', function () {
    return view('mega menu.profil ppid.pelaksana');
});
Route::get('/profil/media', function () {
    return view('mega menu.profil ppid.media');
});
Route::get('/profil/motto', function () {
    return view('mega menu.profil ppid.motto');
});
Route::get('/profil/biaya', function () {
    return view('mega menu.profil ppid.biaya');
});

//pejabat badan publik
Route::get('/pejabat/camat', function () {
    return view('mega menu.pejabat badan publik.camat');
});
Route::get('/pejabat/sekda', function () {
    return view('mega menu.pejabat badan publik.sekda');
});
Route::get('/pejabat/walwakot', function () {
    return view('mega menu.pejabat badan publik.walwakot');
});
Route::get('/pejabat/stafahli', function () {
    return view('mega menu.pejabat badan publik.stafahli');
});
Route::get('/pejabat/kepaladinas', function () {
    return view('mega menu.pejabat badan publik.kepaladinas');
});
Route::get('/pejabat/kepalaperangkat', function () {
    return view('mega menu.pejabat badan publik.kepalaperangkat');
});
Route::get('/pejabat/asistentata', function () {
    return view('mega menu.pejabat badan publik.asistentata');
});
Route::get('/pejabat/asistenperekonomian', function () {
    return view('mega menu.pejabat badan publik.asistenperekonomian');
});
Route::get('/pejabat/asistenadmin', function () {
    return view('mega menu.pejabat badan publik.asistenadmin');
});

//SOP PPID
Route::get('/sop/carapengajuankeberatan', function () {
    return view('mega menu.sop ppid.carapengajuankeberatan');
});
Route::get('/sop/carapenyelesaiansengketa', function () {
    return view('mega menu.sop ppid.carapenyelesaiansengketa');
});
Route::get('/sop/carapermohonaninfo', function () {
    return view('mega menu.sop ppid.carapermohonaninfo');
});
Route::get('/sop/maklumatpelayanan', function () {
    return view('mega menu.sop ppid.maklumatpelayanan');
});
Route::get('/sop/SKpengelolaPPID', function () {
    return view('mega menu.sop ppid.SKpengelolaPPID');
});
Route::get('/sop/SOPpelayanan', function () {
    return view('mega menu.sop ppid.SOPpelayanan');
});
Route::get('/sop/SOPpemantauan', function () {
    return view('mega menu.sop ppid.SOPpemantauan');
});
Route::get('/sop/SOPpemutakhiran', function () {
    return view('mega menu.sop ppid.SOPpemutakhiran');
});
Route::get('/sop/SOPpendokumentasian', function () {
    return view('mega menu.sop ppid.SOPpendokumentasian');
});
Route::get('/sop/SOPpengembangan', function () {
    return view('mega menu.sop ppid.SOPpengembangan');
});
Route::get('/sop/SOPpengolahandata', function () {
    return view('mega menu.sop ppid.SOPpengolahandata');
});
Route::get('/sop/SOPpengumpulan', function () {
    return view('mega menu.sop ppid.SOPpengumpulan');
});
Route::get('/sop/SOPuji', function () {
    return view('mega menu.sop ppid.SOPuji');
});
Route::get('/sop/standarpelayanan', function () {
    return view('mega menu.sop ppid.standarpelayanan');
});
Route::get('/sop/tatacarapengaduan', function () {
    return view('mega menu.sop ppid.tatacarapengaduan');
});