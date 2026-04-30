<!DOCTYPE html>

<html lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>PPID Kota Balikpapan</title>
<link rel="icon" type="png" href="{{ asset('images/kota balikpapan.png') }}">
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;700;800&amp;family=Inter:wght@400;500;600&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "secondary": "#785900",
                        "on-error-container": "#93000a",
                        "on-tertiary-fixed": "#001f23",
                        "on-secondary": "#ffffff",
                        "on-tertiary": "#ffffff",
                        "on-surface": "#191c1d",
                        "surface": "#f8f9fa",
                        "surface-container-highest": "#e1e3e4",
                        "secondary-fixed-dim": "#fabd00",
                        "error-container": "#ffdad6",
                        "outline-variant": "#c2c6d2",
                        "surface-variant": "#e1e3e4",
                        "secondary-container": "#fdc003",
                        "primary-fixed-dim": "#a4c9ff",
                        "on-primary-fixed-variant": "#004883",
                        "on-primary": "#ffffff",
                        "error": "#ba1a1a",
                        "tertiary-fixed": "#92f1fe",
                        "primary": "#003f74",
                        "surface-container": "#edeeef",
                        "background": "#f8f9fa",
                        "on-background": "#191c1d",
                        "on-secondary-fixed-variant": "#5b4300",
                        "tertiary-container": "#005e67",
                        "on-error": "#ffffff",
                        "surface-tint": "#1860a6",
                        "outline": "#727782",
                        "surface-container-lowest": "#ffffff",
                        "primary-fixed": "#d4e3ff",
                        "on-primary-fixed": "#001c39",
                        "surface-bright": "#f8f9fa",
                        "tertiary-fixed-dim": "#75d5e2",
                        "inverse-on-surface": "#f0f1f2",
                        "on-secondary-container": "#6c5000",
                        "on-primary-container": "#aaccff",
                        "surface-container-low": "#f3f4f5",
                        "inverse-surface": "#2e3132",
                        "on-tertiary-container": "#78d8e5",
                        "secondary-fixed": "#ffdf9e",
                        "primary-container": "#00569c",
                        "surface-container-high": "#e7e8e9",
                        "surface-dim": "#d9dadb",
                        "inverse-primary": "#a4c9ff",
                        "on-tertiary-fixed-variant": "#004f56",
                        "tertiary": "#00454c"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.125rem",
                        "lg": "0.25rem",
                        "xl": "0.5rem",
                        "full": "0.75rem"
                    },
                    "fontFamily": {
                        "headline": ["Manrope"],
                        "body": ["Inter"],
                        "label": ["Inter"]
                    }
                },
            },
        }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: "FILL" 0, "wght" 400, "GRAD" 0, "opsz" 24
        }
        html, body {
            height: auto;
            font-family: "Inter", sans-serif;
            overflow-x: clip;
            max-width: 100%;
        }
        h1, h2, h3, .font-headline {
            font-family: "Manrope", sans-serif
        }
        .batik-bg {
            background-image: linear-gradient(rgba(240, 240, 240, 0.9), rgba(240, 240, 240, 0.9)), url("batik dayak.png");
            background-repeat: repeat;
            background-size: 300px
        }
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }
        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
        /* Carousel Styles */
#carousel-container {
    position: relative;
    overflow: hidden;
    width: 100%;
}
/* ... */
.carousel-slide {
    flex: 0 0 100%;
    min-width: 100%;
    width: 100%;
    overflow: hidden;
}
        #carousel-track {
            display: flex;
            transition: transform 0.5s cubic-bezier(0.4, 0, 0.2, 1);
            cursor: grab;
            user-select: none;
            width: 100%;
        }
        #carousel-track:active {
            cursor: grabbing;
        }
        #carousel-container {
            position: relative;
            overflow: hidden;
            width: 100%;
        }
/* ... */
        .carousel-slide {
            flex: 0 0 100%;
            min-width: 100%;
            width: 100%;
            overflow: hidden;
        }
        /* Dropdown Styles */
        .nav-hover-line::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background-color: #fdc003;
            transition: width 0.3s ease;
        }
        .nav-hover-line:hover::after {
            width: 100%;
        }
                .dropdown-menu {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            z-index: 99999;
            min-width: 180px;
            background-color: #0f172a;
            border-top: 2px solid #fdc003;
            box-shadow: 0 10px 20px rgba(0,0,0,0.5);
            border-radius: 0 0 8px 8px;
        }
        .group:hover > .dropdown-menu,
        .dropdown-menu.open {
            display: block !important;
        }
            to   { opacity: 1; transform: translateY(0); }
        }
        /* Navbar: hidden on mobile, visible on desktop */
        #desktop-nav {
            display: none !important;
            height: 0 !important;
            overflow: hidden !important;
        }
        @media (min-width: 768px) {
            #desktop-nav {
                display: block !important;
                height: 44px !important;
                overflow: visible !important;
            }
        }
        /* Prevent overflow without breaking sticky */
        img, video, iframe {
            max-width: 100%;
        }
        /* Mega Menu */
        .mega-menu {
            display: none;
            position: fixed;
            left: 50%;
            transform: translateX(-50%);
            width: 860px;
            max-width: 95vw;
            z-index: 99999;
            background: #ffffff;
            box-shadow: 0 8px 32px rgba(0,0,0,0.18);
            border-top: 3px solid #fdc003;
            border-radius: 0 0 12px 12px;
            max-height: 55vh;
            overflow-y: auto;
        }
        .mega-menu.open {
            display: block !important;
        }
    </style>
</head>
<body class="bg-surface text-on-surface">

<header class="w-full shadow-md bg-white sticky top-0 z-50" style="overflow:visible;">
<!-- Top Navbar (Batik Motif) -->
<div class="batik-bg border-b border-slate-500">
<div class="max-w-7xl mx-auto px-4 md:px-6 py-3 flex flex-col md:flex-row items-center justify-between gap-4 md:gap-0">
<!-- Left: Logo -->
<div class="flex items-center justify-between w-full md:w-auto">  
    <a href="http://ppidbalikpapan.test/" class="h-8 md:h-10 w-auto object-contain">
     <img src="{{ asset('logo_ppid bg removed.png') }}" alt="logo" class="h-full w-auto"></a>
<!-- Mobile right side: clock + hamburger -->
<div class="flex items-center gap-2 md:hidden">
<!-- Mobile clock -->
<div class="font-headline font-bold text-xs text-primary/80 bg-white/50 px-3 py-1 rounded-full border border-white/20 shadow-sm min-w-fit" id="mobile-clock">
<div class="flex flex-col items-center">
<span class="text-[8px] leading-none opacity-70" id="mobile-date"></span>
<span class="text-[10px] leading-tight" id="mobile-time"></span>
</div>
</div>
<!-- Hamburger button -->
<button id="open-mobile-menu" class="text-primary p-1" aria-label="Buka menu">
<span class="material-symbols-outlined text-2xl">menu</span>
</button>
</div><!-- end mobile right side -->
</div>
<!-- Center: Search Bar -->
<div class="w-full max-w-md">
<div class="relative flex items-center">
<input class="w-full bg-white/90 border border-slate-300 rounded-full px-4 py-1.5 pr-10 text-xs focus:ring-2 focus:ring-primary focus:border-transparent shadow-inner" placeholder="Cari informasi..." type="text"/>
<span class="material-symbols-outlined absolute right-3 text-slate-400 text-lg" data-icon="search">search</span>
</div>
</div>
<!-- Right: Clock -->
<div class="hidden md:flex items-center">
<div class="font-headline font-bold text-sm text-primary/80 bg-white/50 px-4 py-1 rounded-full border border-white/20 shadow-sm min-w-fit" id="real-time-clock">
<div class="flex flex-col items-center">
<span class="text-[10px] leading-none opacity-70" id="desktop-date"></span>
<span class="text-sm leading-tight" id="desktop-time"></span>
</div>
</div>
</div>
</div>
</div>
<!-- Bottom Navbar -->
<nav id="desktop-nav" class="bg-slate-950 text-white w-full relative" style="overflow:visible; position:relative; z-index:9999;">
<div class="max-w-7xl mx-auto flex h-full items-center justify-center space-x-1 px-2 md:px-4 whitespace-nowrap">
<a class="nav-hover-line relative px-3 py-3 text-xs font-bold font-headline transition-all text-white" href="http://ppidbalikpapan.test">Beranda</a>
<div class="relative h-full flex items-center" id="profil-trigger">
<button class="nav-hover-line relative px-3 py-3 text-xs font-bold font-headline flex items-center gap-0.5">
Profil <span class="material-symbols-outlined text-[10px] transition-transform" id="profil-arrow">expand_more</span>
</button>
</div>
<div class="relative h-full flex items-center" id="infopub-trigger">
<button class="nav-hover-line relative px-3 py-3 text-xs font-bold font-headline flex items-center gap-0.5">
Informasi Publik <span class="material-symbols-outlined text-[10px] transition-transform" id="infopub-arrow">expand_more</span>
</button>
</div>
<div class="relative h-full flex items-center" id="layanan-trigger">
<button class="nav-hover-line relative px-3 py-3 text-xs font-bold font-headline flex items-center gap-0.5">
Layanan Informasi <span class="material-symbols-outlined text-[10px] transition-transform" id="layanan-arrow">expand_more</span>
</button>
</div>
<a class="nav-hover-line relative px-3 py-3 text-xs font-bold font-headline" href="http://ppidbalikpapan.test/news">Berita</a>
<a class="nav-hover-line relative px-3 py-3 text-xs font-bold font-headline" href="http://ppidbalikpapan.test/stats">Data Statistik</a>
<div class="group relative h-full flex items-center">
<button class="nav-hover-line relative px-3 py-3 text-xs font-bold font-headline flex items-center gap-0.5">
PPID Pelaksana <span class="material-symbols-outlined text-[10px] group-hover:rotate-180 transition-transform">expand_more</span>
</button>
<div class="dropdown-menu bg-slate-900 min-w-[125px] shadow-xl py-2 rounded-b-lg border border-white/10 font-headline">
<a class="block px-4 py-2 hover:bg-slate-800 text-[11px] transition-colors" href="https://data.balikpapan.go.id/organization">Badan</a>
<a class="block px-4 py-2 hover:bg-slate-800 text-[11px] transition-colors" href="https://data.balikpapan.go.id/organization">Dinas</a>
</div>
</div>
<a class="nav-hover-line relative px-3 py-3 text-xs font-bold font-headline" href="http://ppidbalikpapan.test/kontak">Kontak</a>
</div>
<!-- Mega Menu Profil -->
<div id="mega-profil" style="display:none;position:fixed;left:50%;transform:translateX(-50%);width:700px;max-width:95vw;z-index:99999;background:#ffffff;box-shadow:0 8px 32px rgba(0,0,0,0.18);border-top:3px solid #fdc003;border-radius:0 0 12px 12px;max-height:55vh;overflow-y:auto;">
<div class="px-6 py-5 grid grid-cols-3 gap-6">
<div>
<h3 class="text-[10px] font-extrabold text-primary uppercase tracking-widest mb-3 pb-1.5 border-b-2 border-secondary-container">Profil Pemkot Balikpapan</h3>
<ul class="space-y-1">
<li><a href="/profil/informasidomisili" class="text-[11px] text-slate-600 hover:text-primary block py-0.5 leading-snug">    Informasi Tentang Kedudukan atau Domisili</a></li>
<li><a href="/profil/visimisi" class="text-[11px] text-slate-600 hover:text-primary block py-0.5 leading-snug">Visi &amp; Misi</a></li>
<li><a href="/profil/organisasi" class="text-[11px] text-slate-600 hover:text-primary block py-0.5 leading-snug">Struktur Organisasi</a></li>
<li><a href="/profil/LHKPN" class="text-[11px] text-slate-600 hover:text-primary block py-0.5 leading-snug">Tugas &amp; Laporan Harta Kekayaan Pejabat Negara</a></li>
<li><a href="/profil/rekapLHKPN" class="text-[11px] text-slate-600 hover:text-primary block py-0.5 leading-snug">Rekapitulasi Penyampaian LHKPN Pemkot Balikpapan</a></li>
</ul>
</div>
<div>
<h3 class="text-[10px] font-extrabold text-primary uppercase tracking-widest mb-3 pb-1.5 border-b-2 border-secondary-container">Profil PPID Kota Balikpapan</h3>
<ul class="space-y-1">
<li><a href="/profil/profil" class="text-[11px] text-slate-600 hover:text-primary block py-0.5 leading-snug">Profil Singkat</a></li>
<li><a href="/profil/struktur" class="text-[11px] text-slate-600 hover:text-primary block py-0.5 leading-snug">Struktur PPID</a></li>
<li><a href="/profil/tugas" class="text-[11px] text-slate-600 hover:text-primary block py-0.5 leading-snug">Tugas &amp; Wewenang</a></li>
<li><a href="/profil/maklumat" class="text-[11px] text-slate-600 hover:text-primary block py-0.5 leading-snug">Maklumat Layanan</a></li>
<li><a href="/profil/media" class="text-[11px] text-slate-600 hover:text-primary block py-0.5 leading-snug">Media Layanan</a></li>
<li><a href="/profil/waktu" class="text-[11px] text-slate-600 hover:text-primary block py-0.5 leading-snug">Waktu Pelayanan</a></li>
<li><a href="/profil/biaya" class="text-[11px] text-slate-600 hover:text-primary block py-0.5 leading-snug">Biaya</a></li>
<li><a href="/profil/motto" class="text-[11px] text-slate-600 hover:text-primary block py-0.5 leading-snug">Motto</a></li>
<li><a href="/profil/visimisi" class="text-[11px] text-slate-600 hover:text-primary block py-0.5 leading-snug">Visi &amp; Misi</a></li>
<li><a href="/profil/pelaksana" class="text-[11px] text-slate-600 hover:text-primary block py-0.5 leading-snug">PPID Pelaksana</a></li>
<li><a href="/profil/regulasi" class="text-[11px] text-slate-600 hover:text-primary block py-0.5 leading-snug">Regulasi Dasar Hukum PPID</a></li>
</ul>
</div>
<div>
<h3 class="text-[10px] font-extrabold text-primary uppercase tracking-widest mb-3 pb-1.5 border-b-2 border-secondary-container">Pejabat Badan Publik</h3>
<ul class="space-y-1">
<li><a href="/pejabat/walwakot" class="text-[11px] text-slate-600 hover:text-primary block py-0.5 leading-snug">Profil Wali Kota dan Wakil Wali Kota</a></li>
<li><a href="/pejabat/kepalaperangkat" class="text-[11px] text-slate-600 hover:text-primary block py-0.5 leading-snug">Profil Kepala Perangkat Daerah</a></li>
<li><a href="/pejabat/sekda" class="text-[11px] text-slate-600 hover:text-primary block py-0.5 leading-snug">Profil Sekretaris Daerah</a></li>
<li><a href="/pejabat/asistenadmin" class="text-[11px] text-slate-600 hover:text-primary block py-0.5 leading-snug">Profil Asisten Administrasi Umum</a></li>
<li><a href="/pejabat/asistentata" class="text-[11px] text-slate-600 hover:text-primary block py-0.5 leading-snug">Profil Asisten Tata Pemerintahan</a></li>
<li><a href="/pejabat/asistenperekonomian" class="text-[11px] text-slate-600 hover:text-primary block py-0.5 leading-snug">Profil Asisten Perekonomian Pembangunan dan Kesejahteraan Rakyat</a></li>
<li><a href="/pejabat/stafahli" class="text-[11px] text-slate-600 hover:text-primary block py-0.5 leading-snug">Profil Staf Ahli</a></li>
<li><a href="/pejabat/kepaladinas" class="text-[11px] text-slate-600 hover:text-primary block py-0.5 leading-snug">Profil Kepala Dinas</a></li>
<li><a href="/pejabat/camat" class="text-[11px] text-slate-600 hover:text-primary block py-0.5 leading-snug">Profil Camat</a></li>
</ul>
</div>
</div>
</div>
<!-- Mega Menu Layanan Informasi -->
<div id="mega-layanan" style="display:none;position:fixed;left:50%;transform:translateX(-50%);width:550px;max-width:95vw;z-index:99999;background:#ffffff;box-shadow:0 8px 32px rgba(0,0,0,0.18);border-top:3px solid #fdc003;border-radius:0 0 12px 12px;max-height:40vh;overflow-y:auto;">
<div class="px-6 py-5 grid grid-cols-3 gap-6">
<div>
<h3 class="text-[10px] font-extrabold text-primary uppercase tracking-widest mb-3 pb-1.5 border-b-2 border-secondary-container">SOP PPID</h3>
<ul class="space-y-1">
<li><a href="/sop/carapermohonaninfo" class="text-[11px] text-slate-600 hover:text-primary block py-0.5 leading-snug">Tata Cara Permohonan Informasi</a></li>
<li><a href="/sop/carapengajuankeberatan" class="text-[11px] text-slate-600 hover:text-primary block py-0.5 leading-snug">Tata Cara Pengajuan Keberatan</a></li>
<li><a href="/sop/carapenyelesaiansengketa" class="text-[11px] text-slate-600 hover:text-primary block py-0.5 leading-snug">Tata Cara Penyelesaian Sengketa Informasi</a></li>
<li><a href="/sop/standarpelayanan" class="text-[11px] text-slate-600 hover:text-primary block py-0.5 leading-snug">Standar Pelayanan Informasi</a></li>
<li><a href="/sop/SOPuji" class="text-[11px] text-slate-600 hover:text-primary block py-0.5 leading-snug">SOP Uji Konsekuensi Penetaoan Informasi Dikecualikan</a></li>
<li><a href="/sop/SOPpelayanan" class="text-[11px] text-slate-600 hover:text-primary block py-0.5 leading-snug">SOP Pelayanan Permohonan Informasi Publik di PPID</a></li>
<li><a href="/sop/SOPpemutakhiran" class="text-[11px] text-slate-600 hover:text-primary block py-0.5 leading-snug">SOP Pemenuhan, Pemutakhiran Daftar Informasi Publik </a></li>
<li><a href="/sop/SOPpemantauan" class="text-[11px] text-slate-600 hover:text-primary block py-0.5 leading-snug">SOP Pemantauan dan Evaluasi Pelayanan Informasi Publik</a></li>
<li><a href="/sop/SOPpengembangan" class="text-[11px] text-slate-600 hover:text-primary block py-0.5 leading-snug">SOP Pengembangan Infrastuktur</a></li>
<li><a href="/sop/SOPpendokumentasian" class="text-[11px] text-slate-600 hover:text-primary block py-0.5 leading-snug">SOP Pendokumentasian Informasi Publik</a></li>
<li><a href="/sop/SOPpengolahandata" class="text-[11px] text-slate-600 hover:text-primary block py-0.5 leading-snug">SOP Pengolahan Data Statistik Sektoral</a></li>
<li><a href="/sop/SOPpengumpulan" class="text-[11px] text-slate-600 hover:text-primary block py-0.5 leading-snug">SOP Pengumpulan Data Statistik Sektoral</a></li>
<li><a href="/sop/maklumatpelayanan" class="text-[11px] text-slate-600 hover:text-primary block py-0.5 leading-snug">Maklumat Pelayanan Informasi Publik Pemkot Balikpapan </a></li>
<li><a href="/sop/SKpengelolaPPID" class="text-[11px] text-slate-600 hover:text-primary block py-0.5 leading-snug">SK PENGELOLA PPID</a></li>
</ul>
</div>
<div>
<h3 class="text-[10px] font-extrabold text-primary uppercase tracking-widest mb-3 pb-1.5 border-b-2 border-secondary-container">Layanan Online</h3>
<ul class="space-y-1">
<li><a href="https://www.lapor.go.id/" class="text-[11px] text-slate-600 hover:text-primary block py-0.5 leading-snug">LAPOR!</a></li>
<li><a href="/permohonan" class="text-[11px] text-slate-600 hover:text-primary block py-0.5 leading-snug">Formulir Permintaan Informasi Online</a></li>
<li><a href="/keberatan" class="text-[11px] text-slate-600 hover:text-primary block py-0.5 leading-snug">Formulir Keberatan</a></li>
<li><a href="/sop/tatacarapengaduan" class="text-[11px] text-slate-600 hover:text-primary block py-0.5 leading-snug">Tata Cara Pengaduan Masyarakat</a></li>
</ul>
</div>
</div>
</div>
<!-- Mega Menu Informasi Publik (outside flex) -->
<div id="mega-infopub" style="display:none;position:fixed;left:50%;transform:translateX(-50%);width:860px;max-width:95vw;z-index:99999;background:#ffffff;box-shadow:0 8px 32px rgba(0,0,0,0.18);border-top:3px solid #fdc003;border-radius:0 0 12px 12px;max-height:55vh;overflow-y:auto;">
<div class="px-6 py-5 grid grid-cols-3 gap-6">
<div>
<h3 class="text-[10px] font-extrabold text-primary uppercase tracking-widest mb-3 pb-1.5 border-b-2 border-secondary-container">Informasi Berkala</h3>
<ul class="space-y-1">
<li><a href="/informasi/RKPD" class="text-[11px] text-slate-600 hover:text-primary block py-0.5 leading-snug">RKPD</a></li>
<li><a href="/informasi/LAKIP" class="text-[11px] text-slate-600 hover:text-primary block py-0.5 leading-snug">LAKIP</a></li>
<li><a href="/informasi/laporan-keuangan" class="text-[11px] text-slate-600 hover:text-primary block py-0.5 leading-snug">Laporan Keuangan</a></li>
<li><a href="/informasi/laporaninfo" class="text-[11px] text-slate-600 hover:text-primary block py-0.5 leading-snug">Laporan Akses Informasi Publik</a></li>
<li><a href="/informasi/produk-hukum" class="text-[11px] text-slate-600 hover:text-primary block py-0.5 leading-snug">Produk Hukum</a></li>
<li><a href="/informasi/ketenagakerjaan" class="text-[11px] text-slate-600 hover:text-primary block py-0.5 leading-snug">Ketenagakerjaan</a></li>
<li><a href="/informasi/prosedur-peringatan" class="text-[11px] text-slate-600 hover:text-primary block py-0.5 leading-snug">Prosedur Peringatan Dini dan Prosedur Evakuasi Keadaan Darurat di Setiap Kantor Badan Publik</a></li>
<li><a href="/informasi/realisasi-2022" class="text-[11px] text-slate-600 hover:text-primary block py-0.5 leading-snug">Realisasi Kegiatan dan Kinerja Pemkot Balikpapan Tahun 2022</a></li>
<li><a href="/informasi/realisasi-2023" class="text-[11px] text-slate-600 hover:text-primary block py-0.5 leading-snug">Realisasi Kegiatan dan Kinerja Pemkot Balikpapan Tahun 2023</a></li>
<li><a href="/informasi/program-kegiatan-2023" class="text-[11px] text-slate-600 hover:text-primary block py-0.5 leading-snug">Program dan Kegiatan Tahun 2023</a></li>
<li><a href="/informasi/SK_klasifikasi" class="text-[11px] text-slate-600 hover:text-primary block py-0.5 leading-snug">SK KLASIFIKASI DIKECUALIKAN</a></li>
<li><a href="/informasi/SK_maklumat" class="text-[11px] text-slate-600 hover:text-primary block py-0.5 leading-snug">SK MAKLUMAT PELAYANAN DISKOMINFO</a></li>
<li><a href="/informasi/skinformasipublik" class="text-[11px] text-slate-600 hover:text-primary block py-0.5 leading-snug">SK PENETAPAN DAFTAR INFORMASI PUBLIK PEMKOT BALIKPAPAN</a></li>
<li><a href="/informasi/SK_pengawasan" class="text-[11px] text-slate-600 hover:text-primary block py-0.5 leading-snug">SK PENETAPAN STRATEGI DAN METODE PEMBINAAN, PENGAWASAN, EVALUASI DAN MONITORING</a></li>
</ul>
</div>
<div>
<h3 class="text-[10px] font-extrabold text-primary uppercase tracking-widest mb-3 pb-1.5 border-b-2 border-secondary-container">Informasi Setiap Saat</h3>
<ul class="space-y-1">
<li><a href="#" class="text-[11px] text-slate-600 hover:text-primary block py-0.5 leading-snug">Statistik Daerah</a></li>
<li><a href="#" class="text-[11px] text-slate-600 hover:text-primary block py-0.5 leading-snug">Daftar Informasi Publik</a></li>
<li><a href="#" class="text-[11px] text-slate-600 hover:text-primary block py-0.5 leading-snug">Informasi Tentang Organisasi, aAdministrasi Kepegawaian dan Keuangan</a></li>
<li><a href="#" class="text-[11px] text-slate-600 hover:text-primary block py-0.5 leading-snug">Informasi Publik</a></li>
<li><a href="#" class="text-[11px] text-slate-600 hover:text-primary block py-0.5 leading-snug">Perjanjian Kerja Sama</a></li>
<li><a href="#" class="text-[11px] text-slate-600 hover:text-primary block py-0.5 leading-snug">Perizinan</a></li>
<li><a href="#" class="text-[11px] text-slate-600 hover:text-primary block py-0.5 leading-snug">Aset Daerah</a></li>
<li><a href="#" class="text-[11px] text-slate-600 hover:text-primary block py-0.5 leading-snug">Rencana Strategis</a></li>
<li><a href="#" class="text-[11px] text-slate-600 hover:text-primary block py-0.5 leading-snug">Rencana Kerja Badan Publik</a></li>
<li><a href="#" class="text-[11px] text-slate-600 hover:text-primary block py-0.5 leading-snug">Jumlah, Jenis dan Gambaran Pelanggaran yang Dilaporkan Oleh Masyarakat Serta Laporan Penindakannya</a></li>
<li><a href="#" class="text-[11px] text-slate-600 hover:text-primary block py-0.5 leading-snug">Jumlah, Jenis dan Gambaran Umum Pelanggaran yang Ditemukan Dalam Pengawasan Internal Serta Laporan P</a></li>
<li><a href="#" class="text-[11px] text-slate-600 hover:text-primary block py-0.5 leading-snug">Hasil Penelitian yang Dilakukan BAPPEDA</a></li>
<li><a href="#" class="text-[11px] text-slate-600 hover:text-primary block py-0.5 leading-snug">Informasi Publik Lain yang Telah Dinyatakan Terbuka Bagi Masyarakat Berdasarkan Mekanisme Keberatan</a></li>
</ul>
</div>
<div>
<h3 class="text-[10px] font-extrabold text-primary uppercase tracking-widest mb-3 pb-1.5 border-b-2 border-secondary-container">Informasi Serta Merta</h3>
<ul class="space-y-1">
<li><a href="#" class="text-[11px] text-slate-600 hover:text-primary block py-0.5 leading-snug">Informasi Tentang PDAM</a></li>
<li><a href="#" class="text-[11px] text-slate-600 hover:text-primary block py-0.5 leading-snug">Informasi Tentang Siap SIaga Bencana</a></li>
<li><a href="#" class="text-[11px] text-slate-600 hover:text-primary block py-0.5 leading-snug">Informasi Tentang Penutupan Jalan</a></li>
<li><a href="#" class="text-[11px] text-slate-600 hover:text-primary block py-0.5 leading-snug">4 Upaya Mitigasi</a></li>
<li><a href="#" class="text-[11px] text-slate-600 hover:text-primary block py-0.5 leading-snug">Prosedur Evakuasi Darurat Bencana</a></li>

</ul>
</div>
</div>
</div>
</nav>
<script>
(function(){
    var n=document.getElementById('desktop-nav');
    if(!n)return;
    function applyNav(){
        if(window.innerWidth<768){
            n.style.cssText='display:none!important;height:0!important;overflow:hidden!important;';
        }else{
            n.style.cssText='display:block!important;height:44px!important;overflow:visible!important;position:relative;z-index:9999;';
        }
    }
    applyNav();
    window.addEventListener('resize', applyNav);
})();
</script>
<script>
(function(){
    var n=document.getElementById('desktop-nav');
    if(!n)return;
    function applyNav(){
        if(window.innerWidth<768){
            n.style.cssText='display:none!important;height:0!important;overflow:hidden!important;';
        }else{
            n.style.cssText='display:block!important;height:44px!important;overflow:visible!important;position:relative;z-index:9999;';
        }
    }
    applyNav();
    window.addEventListener('resize',applyNav);
})();
</script>
<!-- Mobile Fullscreen Menu Overlay -->
<div id="mobile-menu" class="hidden fixed inset-0 bg-slate-950 flex-col overflow-y-auto" style="z-index:99999; top:0; left:0; right:0; bottom:0;">
<div class="flex items-center justify-between px-5 py-4 border-b border-white/10">
<span class="text-white font-headline font-bold text-base">Menu</span>
<button id="close-mobile-menu" class="text-white p-1" aria-label="Tutup menu">
<span class="material-symbols-outlined text-2xl">close</span>
</button>
</div>
<nav class="flex flex-col px-4 py-4 font-headline text-white">
<a href="http://ppidbalikpapan.test" class="flex items-center gap-3 px-3 py-3.5 border-b border-white/10 text-secondary-container font-bold text-sm">
<span class="material-symbols-outlined text-base">home</span> Beranda
</a>
<div class="border-b border-white/10">
<button onclick="toggleMobileAccordion('acc-profil')" class="w-full flex items-center justify-between px-3 py-3.5 text-sm font-bold text-white">
<span class="flex items-center gap-3"><span class="material-symbols-outlined text-base">badge</span> Profil</span>
<span class="material-symbols-outlined text-base transition-transform duration-300" id="icon-acc-profil">expand_more</span>
</button>
<div id="acc-profil" class="hidden flex-col bg-white/5 rounded-lg mx-2 mb-2 overflow-hidden">
<p class="px-5 py-2 text-[10px] font-extrabold text-secondary-container uppercase tracking-widest">Profil Pemkot Balikpapan</p>
<a href="#" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Informasi Tentang Kedudukan atau Domisili</a>
<a href="#" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Visi &amp; Misi</a>
<a href="#" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Struktur Organisasi</a>
<a href="#" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Tugas &amp; Laporan Harta Kekayaan Pejabat Negara</a>
<a href="#" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Rekapitulasi Penyampaian LHKPN Pemkot Balikpapan</a>
<p class="px-5 py-2 text-[10px] font-extrabold text-secondary-container uppercase tracking-widest border-t border-white/10">Profil PPID Kota Balikpapan</p>
<a href="#" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Profil Singkat</a>
<a href="#" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Struktur PPID</a>
<a href="#" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Tugas &amp; Wewenang</a>
<a href="#" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Maklumat Layanan</a>
<a href="#" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Media Layanan</a>
<a href="#" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Waktu Pelayanan</a>
<a href="#" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Biaya</a>
<a href="#" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Visi &amp; Misi PPID</a>
<a href="#" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">PPID Pelaksana</a>
<a href="#" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Regulasi Dasar Hukum PPID</a>
<p class="px-5 py-2 text-[10px] font-extrabold text-secondary-container uppercase tracking-widest border-t border-white/10">Pejabat Badan Publik</p>
<a href="#" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Profil Wali Kota dan Wakil Wali Kota</a>
<a href="#" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Profil Kepala Perangkat Daerah</a>
<a href="#" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Profil Sekretaris Daerah</a>
<a href="#" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Profil Asisten Administrasi Umum</a>
<a href="#" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Profil Asisten Tata Pemerintahan</a>
<a href="#" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Profil Asisten Perekonomian Pembangunan dan Kesejahteraan Rakyat</a>
<a href="#" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Profil Staf Ahli</a>
<a href="#" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Profil Kepala Badan</a>
<a href="#" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Profil Kepala Dinas</a>
<a href="#" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container">Profil Camat</a>
</div>
</div>
<div class="border-b border-white/10">
<button onclick="toggleMobileAccordion('acc-infopub')" class="w-full flex items-center justify-between px-3 py-3.5 text-sm font-bold text-white">
<span class="flex items-center gap-3"><span class="material-symbols-outlined text-base">folder_open</span> Informasi Publik</span>
<span class="material-symbols-outlined text-base transition-transform duration-300" id="icon-acc-infopub">expand_more</span>
</button>
<div id="acc-infopub" class="hidden flex-col bg-white/5 rounded-lg mx-2 mb-2 overflow-hidden">
<p class="px-5 py-2 text-[10px] font-extrabold text-secondary-container uppercase tracking-widest">Informasi Berkala</p>
<a href="#" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">RKPD</a>
<a href="#" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">LAKIP</a>
<a href="#" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Laporan Keuangan</a>
<a href="#" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Laporan Akses Informasi Publik</a>
<a href="#" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Produk Hukum</a>
<a href="#" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Ketenagakerjaan</a>
<a href="#" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Prosedur Peringatan Dini dan Evakuasi Keadaan Darurat</a>
<a href="#" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Realisasi Kegiatan dan Kinerja Pemkot Balikpapan Tahun 2022</a>
<a href="#" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Realisasi Kegiatan dan Kinerja Pemkot Balikpapan Tahun 2023</a>
<a href="#" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Program dan Kegiatan Tahun 2023</a>
<a href="#" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">SK Klasifikasi Dikecualikan</a>
<a href="#" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">SK Maklumat Pelayanan Diskominfo</a>
<p class="px-5 py-2 text-[10px] font-extrabold text-secondary-container uppercase tracking-widest border-t border-white/10">Informasi Setiap Saat</p>
<a href="#" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Statistik Daerah</a>
<a href="#" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Daftar Informasi Publik</a>
<a href="#" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Informasi Tentang Organisasi, Administrasi Kepegawaian dan Keuangan</a>
<a href="#" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Perjanjian Kerja Sama</a>
<a href="#" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Perizinan</a>
<a href="#" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Aset Daerah</a>
<a href="#" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Rencana Strategis</a>
<a href="#" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Rencana Kerja Badan Publik</a>
<p class="px-5 py-2 text-[10px] font-extrabold text-secondary-container uppercase tracking-widest border-t border-white/10">Informasi Serta Merta</p>
<a href="#" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Informasi Tentang PDAM</a>
<a href="#" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Informasi Tentang Siap Siaga Bencana</a>
<a href="#" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Informasi Tentang Penutupan Jalan</a>
<a href="#" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">4 Upaya Mitigasi</a>
<a href="#" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container">Prosedur Evakuasi Darurat Bencana</a>
</div>
</div>
<div class="border-b border-white/10">
<button onclick="toggleMobileAccordion('acc-layanan')" class="w-full flex items-center justify-between px-3 py-3.5 text-sm font-bold text-white">
<span class="flex items-center gap-3"><span class="material-symbols-outlined text-base">support_agent</span> Layanan Informasi</span>
<span class="material-symbols-outlined text-base transition-transform duration-300" id="icon-acc-layanan">expand_more</span>
</button>
<div id="acc-layanan" class="hidden flex-col bg-white/5 rounded-lg mx-2 mb-2 overflow-hidden">
<p class="px-5 py-2 text-[10px] font-extrabold text-secondary-container uppercase tracking-widest">SOP PPID</p>
<a href="#" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Tata Cara Permohonan Informasi</a>
<a href="#" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Tata Cara Pengajuan Keberatan</a>
<a href="#" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Tata Cara Penyelesaian Sengketa Informasi</a>
<a href="#" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Standar Pelayanan Informasi</a>
<a href="#" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">SOP Uji Konsekuensi Penetapan Informasi Dikecualikan</a>
<a href="#" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">SOP Pelayanan Permohonan Informasi Publik di PPID</a>
<a href="#" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">SOP Pemenuhan, Pemutakhiran Daftar Informasi Publik</a>
<a href="#" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">SOP Pemantauan dan Evaluasi Pelayanan Informasi Publik</a>
<a href="#" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">SOP Pengembangan Infrastruktur</a>
<a href="#" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">SOP Pendokumentasian Informasi Publik</a>
<a href="#" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">SOP Pengolahan Data Statistik Sektoral</a>
<a href="#" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">SOP Pengumpulan Data Statistik Sektoral</a>
<a href="#" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Maklumat Pelayanan Informasi Publik Pemkot Balikpapan</a>
<a href="#" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">SK Pengelola PPID</a>
<p class="px-5 py-2 text-[10px] font-extrabold text-secondary-container uppercase tracking-widest border-t border-white/10">Layanan Online</p>
<a href="https://www.lapor.go.id/" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">LAPOR!</a>
<a href="#" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Formulir Permintaan Informasi Online</a>
<a href="#" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Formulir Keberatan</a>
<a href="#" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Tata Cara Pengaduan Masyarakat</a>
</div>
</div>
<a href="http://ppidbalikpapan.test/news" class="flex items-center gap-3 px-3 py-3.5 border-b border-white/10 text-sm font-bold">
<span class="material-symbols-outlined text-base">newspaper</span> Berita
</a>
<a href="http://ppidbalikpapan.test/stats" class="flex items-center gap-3 px-3 py-3.5 border-b border-white/10 text-sm font-bold">
<span class="material-symbols-outlined text-base">bar_chart</span> Data Statistik
</a>
<div class="border-b border-white/10">
<button onclick="toggleMobileAccordion('acc-ppid')" class="w-full flex items-center justify-between px-3 py-3.5 text-sm font-bold text-white">
<span class="flex items-center gap-3"><span class="material-symbols-outlined text-base">account_balance</span> PPID Pelaksana</span>
<span class="material-symbols-outlined text-base transition-transform duration-300" id="icon-acc-ppid">expand_more</span>
</button>
<div id="acc-ppid" class="hidden flex-col bg-white/5 rounded-lg mx-2 mb-2 overflow-hidden">
<a href="#" class="block px-5 py-2.5 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Badan</a>
<a href="#" class="block px-5 py-2.5 text-xs text-slate-300 hover:text-secondary-container">Dinas</a>
</div>
</div>
<a href="http://ppidbalikpapan.test/kontak" class="flex items-center gap-3 px-3 py-3.5 text-sm font-bold">
<span class="material-symbols-outlined text-base">call</span> Kontak
</a>
</nav>
</div>
</header>
<main>
<!-- Hero Section: Interactive Carousel -->
<section class="relative group" id="carousel-container" style="width:100%; overflow:hidden;">
<div class="h-[300px] md:h-[450px] lg:h-[550px]" id="carousel-track">
<!-- Slide 1: Primary HD Image (Original Slide 0) -->
<div class="carousel-slide relative h-full">
<img alt="PPID Balikpapan Welcome Banner" class="w-full h-full object-cover pointer-events-none" src="images/bg_ppidbpp.jpg"/>
</div>

<div class="carousel-slide relative h-full">
<img alt="" class="w-full h-full object-cover pointer-events-none" src="images/1.jpg"/>
<div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent flex items-end justify-center pb-12">
<h2 class="text-white font-headline font-extrabold text-xl md:text-3xl tracking-tight opacity-90">Wakil Wali Kota Paparkan LKPj 2025, Dorong Percepatan Program dan Minimalkan SILPA</h2>
</div>
</div>

<div class="carousel-slide relative h-full">
<img alt="" class="w-full h-full object-cover pointer-events-none" src="images/4.jpg"/>
<div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent flex items-end justify-center pb-12">
<h2 class="text-white font-headline font-extrabold text-xl md:text-3xl tracking-tight opacity-90">Wali Kota Balikpapan Hadiri Rakortas Percepatan Proyek PSEL Nasional sebagai Solusi Penanganan Sampah</h2>
</div>
</div>
</div>


<div class="absolute bottom-6 left-1/2 -translate-x-1/2 flex gap-3 z-20">
<button class="carousel-dot w-2.5 h-2.5 rounded-full bg-white/40 transition-all hover:bg-white/70" data-index="0"></button>
<button class="carousel-dot w-2.5 h-2.5 rounded-full bg-white/40 transition-all hover:bg-white/70" data-index="1"></button>
<button class="carousel-dot w-2.5 h-2.5 rounded-full bg-white/40 transition-all hover:bg-white/70" data-index="2"></button>
</div>
</section>
<!-- Centered Section Title with Dividers -->
<div class="w-full border-t border-slate-200">
<div class="max-w-7xl mx-auto px-4 md:px-6 flex flex-col items-center pt-4 pb-3"><span class="material-symbols-outlined text-amber-400 text-4xl opacity-80 mb-2" data-icon="hub">hub</span>
<h2 class="text-3xl md:text-4xl font-headline font-extrabold text-primary text-center">Layanan PPID</h2>
<div class="flex flex-col items-center gap-1.5 mt-2">
<div class="w-24 h-1.5 bg-amber-400 rounded-full"></div>
<div class="w-12 h-0.5 bg-amber-400/40 rounded-full"></div>
</div>
</div>
<div class="border-b border-slate-200"></div>
</div>
<!-- Service Quick Links - Bento Grid -->
<section class="py-6 md:py-10 max-w-7xl mx-auto px-4 md:px-6">
<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">

<!-- Main Card -->
<div class="sm:col-span-2 bg-primary text-on-primary p-6 md:p-8 rounded-xl flex flex-col justify-between relative overflow-hidden group min-h-[250px]">
<div class="z-10">
<div class="bg-primary-container w-14 h-14 rounded-full flex items-center justify-center mb-6">
<span class="material-symbols-outlined text-white" data-icon="description">description</span>
</div>
<h3 class="text-xl md:text-2xl font-bold mb-2">Formulir Permohonan</h3>
<p class="text-primary-fixed/80 mb-6 text-sm md:text-base">Ajukan permintaan informasi publik secara online dengan mudah dan cepat.</p>
</div>
<a class="z-10 inline-flex items-center gap-2 font-bold text-secondary-container hover:gap-4 transition-all" href="http://ppidbalikpapan.test/permohonan">
                    Isi Formulir <span class="material-symbols-outlined" data-icon="arrow_forward">arrow_forward</span>
</a>
<div class="absolute -right-8 -bottom-8 opacity-10 group-hover:scale-110 transition-transform hidden sm:block">
<span class="material-symbols-outlined text-[150px] md:text-[180px]" data-icon="article">article</span>
</div>
</div>
<!-- Small Cards -->
<div class="bg-surface-container-lowest p-6 md:p-8 rounded-xl shadow-sm border border-outline-variant/15 hover:shadow-md transition-all">
<div class="bg-secondary/10 text-secondary w-12 h-12 rounded-full flex items-center justify-center mb-6">
<span class="material-symbols-outlined" data-icon="report_problem">report_problem</span>
</div>
<h3 class="text-lg md:text-xl font-bold mb-2">Pengajuan Keberatan</h3>
<p class="text-on-surface-variant text-sm mb-4">Prosedur keberatan atas layanan informasi publik.</p>
<a class="text-primary font-bold text-sm flex items-center gap-1" href="http://ppidbalikpapan.test/keberatan">Isi Pengajuan <span class="material-symbols-outlined text-sm" data-icon="chevron_right">chevron_right</span></a>
</div>
<div class="bg-surface-container-lowest p-6 md:p-8 rounded-xl shadow-sm border border-outline-variant/15 hover:shadow-md transition-all">
<div class="bg-tertiary-container/10 text-tertiary-container w-12 h-12 rounded-full flex items-center justify-center mb-6">
<span class="material-symbols-outlined" data-icon="campaign">campaign</span>
</div>
<h3 class="text-lg md:text-xl font-bold mb-2">Kanal Pengaduan</h3>
<p class="text-on-surface-variant text-sm mb-4">Saluran resmi pengaduan pelayanan pemerintah.</p>
<a class="text-primary font-bold text-sm flex items-center gap-1" href="https://www.lapor.go.id/">Lapor <span class="material-symbols-outlined text-sm" data-icon="chevron_right">chevron_right</span></a>
</div>
<!-- Track Card -->
<div class="sm:col-span-2 bg-surface-container-low p-6 md:p-8 rounded-xl flex flex-col sm:flex-row items-center gap-6">
<div class="flex-1 w-full">
<h3 class="text-xl md:text-2xl font-bold mb-2 text-center sm:text-left">Lacak Permohonan</h3>
<p class="text-on-surface-variant mb-6 text-sm md:text-base text-center sm:text-left">Pantau status permohonan informasi Anda secara real-time.</p>
<div class="flex flex-col sm:flex-row gap-2">
<input class="flex-1 bg-white border-none rounded-xl px-4 py-3 text-sm focus:ring-2 focus:ring-primary shadow-sm" placeholder="Nomor Registrasi" type="text"/>
<button class="bg-primary text-white px-6 py-3 rounded-xl font-bold shadow-sm">Cari</button>
</div>
</div>
<div class="hidden lg:flex w-32 h-32 bg-primary/5 rounded-full items-center justify-center shrink-0">
<span class="material-symbols-outlined text-primary text-5xl" data-icon="distance">distance</span>
</div>
</div>
<!-- Weather Widget (Wide, real-time BMKG as requested) -->
<div class="sm:col-span-2 bg-blue-50 dark:bg-blue-900/20 p-6 rounded-xl flex items-center justify-between border border-blue-100/50" id="weather-widget">
<div class="flex items-center gap-4">
<span class="material-symbols-outlined text-blue-600 text-3xl md:text-4xl" data-icon="cloudy_snowing" id="weather-icon">partly_cloudy_day</span>
<div>
<div class="flex items-center gap-2 mb-1">
<p class="text-[10px] md:text-xs font-bold text-blue-800 uppercase tracking-widest">Cuaca Balikpapan</p>
<span class="px-1.5 py-0.5 bg-blue-600 text-white text-[8px] font-bold rounded flex items-center gap-1">
<span class="relative flex h-1.5 w-1.5">
<span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-white opacity-75"></span>
<span class="relative inline-flex rounded-full h-1.5 w-1.5 bg-white"></span>
</span>
                                LIVE UPDATE
                            </span>
</div>
<p class="font-headline font-bold text-base md:text-xl text-blue-900 dark:text-blue-100" id="weather-desc">Cerah Berawan, 29°C</p>
<p class="text-[10px] text-blue-600/70 mt-1 font-medium italic">Sumber: BMKG (Prakiraan Balikpapan)</p>
</div>
</div>
<div class="hidden sm:block text-right">
<p class="text-[10px] text-blue-800/60 uppercase font-bold">Kelembapan</p>
<p class="font-bold text-blue-900 dark:text-blue-100" id="weather-humidity">75%</p>
</div>
</div>
</div>
<!-- Whistleblower + Kontak Row (inside grid) -->
<div class="sm:col-span-2 rounded-xl overflow-hidden shadow-sm flex flex-col sm:flex-row border border-outline-variant/15">
<!-- Kontak PPID -->
<div class="bg-primary p-6 md:p-8 flex flex-col justify-between relative overflow-hidden flex-1">
<div class="absolute -right-6 -bottom-6 opacity-10">
<span class="material-symbols-outlined text-[140px] text-white">call</span>
</div>
<div>
<div class="bg-white/20 text-white text-[10px] font-bold uppercase tracking-widest px-3 py-1 rounded-full inline-flex items-center gap-1.5 mb-4">
<span class="material-symbols-outlined text-xs">headset_mic</span> Kontak Layanan PPID
</div>
<p class="text-white/80 text-sm mb-1">Hubungi kami melalui</p>
<p class="text-white text-2xl md:text-3xl font-extrabold font-headline leading-tight">0811 5440542</p>
<p class="text-white/70 text-xs font-semibold mt-1">(WhatsApp / SMS)</p>
</div>
<div class="mt-5 flex flex-wrap gap-2">
</div>
</div>
<!-- Whistleblower -->
<div class="bg-surface-container-lowest p-6 md:p-8 flex items-center justify-between relative overflow-hidden flex-1 border-t sm:border-t-0 sm:border-l border-outline-variant/20">
<div class="absolute -right-4 -bottom-4 opacity-5">
<span class="material-symbols-outlined text-[140px] text-primary">campaign</span>
</div>
<div class="flex-1">
<div class="bg-red-50 text-red-600 text-[10px] font-bold uppercase tracking-widest px-3 py-1 rounded-full inline-flex items-center gap-1.5 mb-4">
<span class="w-1.5 h-1.5 bg-red-500 rounded-full animate-pulse"></span> Sistem Pelaporan
</div>
<h3 class="text-lg md:text-xl font-extrabold font-headline text-on-surface leading-tight">Whistleblower <span class="text-primary">System</span></h3>
<p class="text-on-surface-variant text-sm mt-2 mb-4">Laporkan dugaan pelanggaran secara aman dan terpercaya.</p>
<a href="http://ppidbalikpapan.test/whistleblower" class="inline-flex items-center gap-2 bg-primary hover:bg-primary/90 text-white text-xs font-bold px-4 py-2.5 rounded-lg transition-colors shadow-sm">
<span class="material-symbols-outlined text-sm">campaign</span> Lapor Sekarang
</a>
</div>
<div class="hidden md:flex items-center justify-center w-16 h-16 bg-red-50 rounded-xl ml-4 shrink-0">
<span class="material-symbols-outlined text-red-500 text-3xl">policy</span>
</div>
</div>
</div>
</div>
</section>

<!-- News & Links Section (Updated UI) -->
<section class="bg-white py-16 md:py-24 border-t border-slate-100">
<div class="max-w-7xl mx-auto px-4 md:px-6 grid grid-cols-1 lg:grid-cols-12 gap-12">
<!-- News Section (Left/Center) -->
<div class="lg:col-span-8">
<div class="flex justify-between items-center mb-10 border-b border-slate-100 pb-4">
<h2 class="text-2xl md:text-3xl font-extrabold text-primary flex items-center gap-3">
<span class="w-2 h-8 bg-secondary-container rounded-full"></span>
                            Berita Kota
                        </h2>
<a class="text-primary font-bold text-sm hover:underline flex items-center gap-2" href="http://ppidbalikpapan.test/news">
                            Lihat Semua <span class="material-symbols-outlined text-sm" data-icon="arrow_forward">arrow_forward</span>
</a>
</div>
<!-- News Cards - Horizontal Layout -->
<div class="space-y-8">
<article class="flex flex-col md:flex-row gap-6 group">
<div class="w-full md:w-[320px] shrink-0 relative overflow-hidden rounded-2xl aspect-[16/10] md:aspect-auto">
<img alt="Sosialisasi KIP" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAkxAaH_jf3p6LEeFZ9xrg0S05ax-8QnQug5wZDbl-smspY4cl4Xo1h-OBjJkcRuam6IyPv5W_OM2LJzsAv9uYuiqNvMZm_-guJ_kQHVw1HAc5lIDsjs2ezVMJABuqTJ6xA_Xjs9Y217fZ-OjRi6z-Y7hujTgd0vChZPoLsFzi0GWBrAuXIEPb_RvFsFl-PFkGC99eLb8NWEFDDkljc3k6IKT000T5-svR4VJOAInF2Zf4u5CynQaD3lcY6Ed7X99QeEEk053_H164Z"/>
</div>
<div class="flex flex-col justify-center">
<div class="flex items-center gap-3 mb-3">
<span class="bg-primary/10 text-primary text-[10px] font-bold px-2 py-1 rounded tracking-wider uppercase">PEMERINTAHAN</span>
<span class="text-slate-400 text-xs flex items-center gap-1">
<span class="material-symbols-outlined text-sm" data-icon="schedule">schedule</span>
                                        12 Okt 2023 • 09:15 WITA
                                    </span>
</div>
<h3 class="text-xl md:text-2xl font-extrabold text-slate-900 leading-tight mb-4 group-hover:text-primary transition-colors">
                                    Sosialisasi Keterbukaan Informasi Publik di Lingkungan OPD Balikpapan
                                </h3>
<p class="text-slate-500 text-sm md:text-base line-clamp-2 md:line-clamp-3 mb-4">
                                    Pemerintah Kota Balikpapan terus mendorong setiap Organisasi Perangkat Daerah untuk meningkatkan standar pelayanan informasi publik demi kepuasan masyarakat melalui transparansi digital.
                                </p>
<a class="text-primary font-bold text-sm flex items-center gap-2 group-hover:gap-3 transition-all" href="http://ppidbalikpapan.test/insidenews">
                                    Baca Selengkapnya <span class="material-symbols-outlined text-sm" data-icon="east">east</span>
</a>
</div>
</article>
<article class="flex flex-col md:flex-row gap-6 group">
<div class="w-full md:w-[320px] shrink-0 relative overflow-hidden rounded-2xl aspect-[16/10] md:aspect-auto">
<img alt="Laporan Statistik" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAgXEVb_eVRmR9TkZ5dhgDad5CIH96oMZE8brzK6N0L4VMyyYZRk39Sap1BWf7dHWoUBiUxvqEZd5W6WY2ncrgHyR5kwxNIjLdUhNsk8vtBYicdDStB7dSQFAruBeyp0ogeuuqvLb2lbjHeQxZtdlhM5j9Ow79LUvkFFZBnx2nvdwgff-fwz8NUtuqSYtobBGouyexjbcwW1CQYKPrne6z4IY3duPb6JGcTN4bdxE335t80ptrLEv28pAdCj8wXgSJ4HIO-Qv7E7JW7"/>
</div>
<div class="flex flex-col justify-center">
<div class="flex items-center gap-3 mb-3">
<span class="bg-emerald-100 text-emerald-800 text-[10px] font-bold px-2 py-1 rounded tracking-wider uppercase">INFORMASI</span>
<span class="text-slate-400 text-xs flex items-center gap-1">
<span class="material-symbols-outlined text-sm" data-icon="schedule">schedule</span>
                                        20 Sep 2023 • 14:30 WITA
                                    </span>
</div>
<h3 class="text-xl md:text-2xl font-extrabold text-slate-900 leading-tight mb-4 group-hover:text-primary transition-colors">
                                    Laporan Statistik Pelayanan Informasi Publik Triwulan III Tahun 2023
                                </h3>
<p class="text-slate-500 text-sm md:text-base line-clamp-2 md:line-clamp-3 mb-4">
                                    Data permohonan informasi publik menunjukkan tren positif dengan tingkat penyelesaian mencapai 98% selama periode Juli hingga September.
                                </p>
<a class="text-primary font-bold text-sm flex items-center gap-2 group-hover:gap-3 transition-all" href="#">
                                    Baca Selengkapnya <span class="material-symbols-outlined text-sm" data-icon="east">east</span>
</a>
</div>
</article>
<article class="flex flex-col md:flex-row gap-6 group">
<div class="w-full md:w-[320px] shrink-0 relative overflow-hidden rounded-2xl aspect-[16/10] md:aspect-auto">
<img alt="Penghargaan PPID" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCt5KKGLhQ00fD-Han0ulVCVw5BjCWo3cE_YzkIO_N8_PBRJPVzLpI5_-P8SNbTspokfEJeCCATptyRK0kB3iBf9cVP284wk85TElszSTww7uh3LgbaTryLordHu_D0dGbOIDdfGo0GNIDKtbw06iLEo8hPc0ilPwBgcVsB5D3pwUK_zJ18gqNgOjHMcrRjnwvIN0mV7b7TS7PEiWu8CgtnFHhrak6dWFv_FAqllCHqYhzaBRZ4_KRYM3HhRr-bnZj04a8t5Lr3h9Ww"/>
</div>
<div class="flex flex-col justify-center">
<div class="flex items-center gap-3 mb-3">
<span class="bg-amber-100 text-amber-800 text-[10px] font-bold px-2 py-1 rounded tracking-wider uppercase">PEMERINTAHAN</span>
<span class="text-slate-400 text-xs flex items-center gap-1">
<span class="material-symbols-outlined text-sm" data-icon="schedule">schedule</span>
                                        05 Sep 2023 • 10:00 WITA
                                    </span>
</div>
<h3 class="text-xl md:text-2xl font-extrabold text-slate-900 leading-tight mb-4 group-hover:text-primary transition-colors">
                                    Penerimaan Penghargaan PPID Informatif Tingkat Provinsi Kalimantan Timur
                                </h3>
<p class="text-slate-500 text-sm md:text-base line-clamp-2 md:line-clamp-3 mb-4">
                                    PPID Utama Kota Balikpapan berhasil meraih kategori Informatif dalam ajang penganugerahan keterbukaan informasi badan publik tingkat provinsi.
                                </p>
<a class="text-primary font-bold text-sm flex items-center gap-2 group-hover:gap-3 transition-all" href="#">
                                    Baca Selengkapnya <span class="material-symbols-outlined text-sm" data-icon="east">east</span>
</a>
</div>
</article>
</div>
</div>
<!-- Sidebar (Right) -->
<div class="lg:col-span-4 space-y-8">
<!-- Statistik Kunjungan (Requested from IMAGE_32) -->
<div class="bg-surface-container-low p-6 rounded-2xl border border-slate-100 shadow-sm">
<div class="flex items-center justify-center gap-3 mb-6">
<div class="h-[1px] bg-slate-200 flex-1"></div>
<div class="flex items-center gap-2 text-primary">
<span class="material-symbols-outlined text-xl" data-icon="query_stats">query_stats</span>
<h3 class="font-extrabold text-base uppercase tracking-wider font-headline">STATISTIK KUNJUNGAN</h3>
</div>
<div class="h-[1px] bg-slate-200 flex-1"></div>
</div>
<div class="grid grid-cols-2 gap-3 mb-4">
<!-- Page Views -->
<div class="bg-slate-50 p-4 rounded-xl border border-slate-100 text-center">
<div class="flex items-center justify-center gap-1.5 text-slate-400 mb-1">
<span class="material-symbols-outlined text-sm" data-icon="visibility">visibility</span>
<span class="text-[10px] font-bold uppercase tracking-tight">Page Views</span>
</div>
<p class="text-2xl font-extrabold text-slate-900 leading-none">50</p>
</div>
<!-- Visitors -->
<div class="bg-slate-50 p-4 rounded-xl border border-slate-100 text-center">
<div class="flex items-center justify-center gap-1.5 text-slate-400 mb-1">
<span class="material-symbols-outlined text-sm" data-icon="person">person</span>
<span class="text-[10px] font-bold uppercase tracking-tight">Visitors</span>
</div>
<p class="text-2xl font-extrabold text-slate-900 leading-none">19</p>
</div>
<!-- Sessions -->
<div class="bg-slate-50 p-4 rounded-xl border border-slate-100 text-center">
<div class="flex items-center justify-center gap-1.5 text-slate-400 mb-1">
<span class="material-symbols-outlined text-sm" data-icon="input">input</span>
<span class="text-[10px] font-bold uppercase tracking-tight">Sessions</span>
</div>
<p class="text-2xl font-extrabold text-slate-900 leading-none">19</p>
</div>
<!-- Bounce Rate -->
<div class="bg-slate-50 p-4 rounded-xl border border-slate-100 text-center">
<div class="flex items-center justify-center gap-1.5 text-slate-400 mb-1">
<span class="material-symbols-outlined text-sm" data-icon="trending_down">trending_down</span>
<span class="text-[10px] font-bold uppercase tracking-tight">Bounce Rate</span>
</div>
<p class="text-2xl font-extrabold text-slate-900 leading-none">0.6%</p>
</div>
</div>
<div class="bg-slate-50 p-3 rounded-xl border border-slate-100 flex items-center justify-center gap-2">
<span class="material-symbols-outlined text-slate-400 text-sm" data-icon="timer">timer</span>
<span class="text-[10px] text-slate-500 font-medium">Avg. Session Duration:</span>
<span class="text-sm font-extrabold text-slate-900">01m 57s</span>
</div>
<!-- Background decoration -->
<div class="absolute -right-4 -bottom-4 opacity-10">
<span class="material-symbols-outlined text-[120px]" data-icon="partly_cloudy_day">partly_cloudy_day</span>
</div>
</div>
<!-- Survey Card -->
<div class="bg-slate-900 p-6 rounded-2xl text-white relative overflow-hidden">
<h4 class="text-lg font-bold mb-2">Survey Kepuasan</h4>
<p class="text-xs opacity-70 mb-6">Bantu kami meningkatkan kualitas layanan informasi publik dengan memberikan penilaian Anda.</p>
<button class="bg-secondary-container text-on-secondary-container font-bold px-6 py-3 rounded-xl shadow-lg relative z-10 w-full hover:brightness-110 transition-all">Mulai Survey</button>
<span class="material-symbols-outlined absolute -right-4 -bottom-4 text-7xl opacity-5" data-icon="sentiment_very_satisfied">sentiment_very_satisfied</span>
</div>

<!-- Link Tautan -->
<div class="bg-surface-container-low p-6 rounded-2xl border border-slate-100 shadow-sm">
<div class="flex items-center justify-center gap-3 mb-5">
<div class="h-[1px] bg-slate-200 flex-1"></div>
<div class="flex items-center gap-2 text-primary">
<span class="material-symbols-outlined text-xl" data-icon="link">link</span>
<h3 class="font-extrabold text-base uppercase tracking-wider font-headline">LINK TAUTAN</h3>
</div>
<div class="h-[1px] bg-slate-200 flex-1"></div>
</div>
<div class="flex flex-col gap-3">

<!-- Tombol 1: LAPOR! -->
<a href="https://www.lapor.go.id/" target="_blank" rel="noopener noreferrer"
   class="w-full h-16 flex items-center justify-between px-4 rounded-xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-md hover:-translate-y-0.5 transition-all duration-200 group"
   style="background: linear-gradient(135deg, #ffffff 25%, #ec5353 75%);">
  <div class="flex items-center gap-3">
    <div class="w-9 h-9 rounded-lg overflow-hidden flex items-center justify-center bg-white border border-slate-100 shrink-0">
      <img src="{{ asset('images/lapor.png') }}" alt="LAPOR!"
           class="w-full h-full object-contain"
           onerror="this.style.display='none'; this.parentElement.innerHTML='<span class=\'text-red-600 font-extrabold text-xs\'>L!</span>';">
    </div>
    <div>
      <div class="text-slate-800 font-extrabold text-sm leading-tight tracking-wide">LAPOR!</div>
      <div class="text-slate-800 text-[10px] leading-none">Pengaduan Pelayanan Publik</div>
    </div>
  </div>
  <span class="material-symbols-outlined text-slate-300 text-base group-hover:translate-x-0.5 group-hover:text-slate-500 transition-all">chevron_right</span>
</a>

<!-- Tombol 2: sirup -->
<a href="https://sirup.lkpp.go.id/sirup/loginctr/index" target="_blank" rel="noopener noreferrer"
   class="w-full h-16 flex items-center justify-between px-4 rounded-xl overflow-hidden shadow-sm hover:shadow-md hover:-translate-y-0.5 transition-all duration-200 group"
   style="background: linear-gradient(135deg, #ffffff 25%, #ec5353 75%);">
  <div class="flex items-center gap-3">
    <div class="w-9 h-9 bg-white/20 rounded-lg flex items-center justify-center shrink-0">
        <img src="{{ asset('images/siRUP.png') }}" alt="BKPSDM"
             class="w-full h-full object-contain"
             onerror="this.style.display='none'; this.parentElement.innerHTML='<span class=\'material-symbols-outlined text-white text-lg\'>manage_accounts</span>';">
    </div>
    <div>
      <div class="text-slate-800 font-extrabold text-sm leading-tight tracking-wide">siRUP</div>
      <div class="text-slate-800 text-[10px] leading-none">Pengadaan Barang dan Jasa</div>
    </div>
  </div>
  <span class="material-symbols-outlined text-white/60 text-base group-hover:translate-x-0.5 transition-transform">chevron_right</span>
</a>

<!-- Tombol 3: INAPROC -->
<a href="https://katalog.inaproc.id/" target="_blank" rel="noopener noreferrer"
   class="w-full h-16 flex items-center justify-between px-4 rounded-xl overflow-hidden shadow-sm hover:shadow-md hover:-translate-y-0.5 transition-all duration-200 group"
   style="background: linear-gradient(135deg, #ffffff 25%, #ec5353 75%);">
  <div class="flex items-center gap-3">
    <div class="w-9 h-9 bg-white/20 rounded-lg flex items-center justify-center shrink-0">
        <img src="{{ asset('images/inaproc.png') }}" alt="BKPSDM"
             class="w-full h-full object-contain"
             onerror="this.style.display='none'; this.parentElement.innerHTML='<span class=\'material-symbols-outlined text-white text-lg\'>manage_accounts</span>';">
    </div>
    <div>
      <div class="text-slate-800 font-extrabold text-sm leading-tight tracking-wide">INAPROC</div>
      <div class="text-slate-800 text-[10px] leading-none">Katalog Elektronik</div>
    </div>
  </div>
  <span class="material-symbols-outlined text-white/60 text-base group-hover:translate-x-0.5 transition-transform">chevron_right</span>
</a>

<!-- Tombol 4: LPSE -->
<a href="https://lpsebalikpapan.com/" target="_blank" rel="noopener noreferrer"
   class="w-full h-16 flex items-center justify-between px-4 rounded-xl overflow-hidden shadow-sm hover:shadow-md hover:-translate-y-0.5 transition-all duration-200 group"
   style="background: linear-gradient(135deg, #ffffff 25%, #014cf9 75%);">
  <div class="flex items-center gap-3">
    <div class="w-9 h-9 bg-white/20 rounded-lg flex items-center justify-center shrink-0">
        <img src="{{ asset('images/LPSE.png') }}" alt="BKPSDM"
             class="w-full h-full object-contain"
             onerror="this.style.display='none'; this.parentElement.innerHTML='<span class=\'material-symbols-outlined text-white text-lg\'>manage_accounts</span>';">
    </div>
    <div>
      <div class="text-slate-800 font-extrabold text-sm leading-tight tracking-wide">LPSE</div>
      <div class="text-slate-800 font-extrabold text-[10px] leading-none">Katalog Elektronik</div>
    </div>
  </div>
  <span class="material-symbols-outlined text-white/60 text-base group-hover:translate-x-0.5 transition-transform">chevron_right</span>
</a>

<!-- Tombol 5: SPMB -->
<a href="https://balikpapan.spmb.id/" target="_blank" rel="noopener noreferrer"
   class="w-full h-16 flex items-center justify-between px-4 rounded-xl overflow-hidden shadow-sm hover:shadow-md hover:-translate-y-0.5 transition-all duration-200 group"
   style="background: linear-gradient(135deg, #ffffff 25%, #2563eb 75%);">
  <div class="flex items-center gap-3">
    <div class="w-9 h-9 bg-white/20 rounded-lg flex items-center justify-center shrink-0">
        <img src="{{ asset('images/spmb.png') }}" alt="BKPSDM"
             class="w-full h-full object-contain"
             onerror="this.style.display='none'; this.parentElement.innerHTML='<span class=\'material-symbols-outlined text-white text-lg\'>manage_accounts</span>';">
    </div>
    <div>
      <div class="text-slate-800 font-extrabold text-sm leading-tight tracking-wide">SPMB</div>
      <div class="text-slate-800 text-[10px] leading-none">Layanan Pendaftaran Siswa Baru</div>
    </div>
  </div>
  <span class="material-symbols-outlined text-white/60 text-base group-hover:translate-x-0.5 transition-transform">chevron_right</span>
</a>

<!-- Tombol 6: BKPSDM -->
<a href="http://bkpsdm.balikpapan.go.id/" target="_blank" rel="noopener noreferrer"
   class="w-full h-16 flex items-center justify-between px-4 rounded-xl overflow-hidden shadow-sm hover:shadow-md hover:-translate-y-0.5 transition-all duration-200 group"
   style="background: linear-gradient(135deg, #2f8dff 25%, #2563eb 75%);">
  <div class="flex items-center gap-3">
    <div class="w-9 h-9 bg-white/20 rounded-lg flex items-center justify-center shrink-0">
        <img src="{{ asset('images/bkpsdm.png') }}" alt="BKPSDM"
             class="w-full h-full object-contain"
             onerror="this.style.display='none'; this.parentElement.innerHTML='<span class=\'material-symbols-outlined text-white text-lg\'>manage_accounts</span>';">
    </div>
    <div>
      <div class="text-slate-800 font-extrabold text-sm leading-tight tracking-wide">BKPSDM</div>
      <div class="text-slate-800 text-[10px] leading-none">Layanan Pengurus Kepegawaian dan Sumber Daya Alam</div>
    </div>
  </div>
  <span class="material-symbols-outlined text-white/60 text-base group-hover:translate-x-0.5 transition-transform">chevron_right</span>
</a>

</div>
</div>

</div>
</div>
</section>
<section class="py-20 bg-surface-container-lowest">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex flex-col md:flex-row justify-between items-end mb-12 gap-4">
            <div>
                <h2 class="text-3xl font-bold text-on-surface flex items-center gap-3">
                    <span class="material-symbols-outlined text-primary text-4xl">play_circle</span>
                    Video Terkini
                </h2>
                <p class="text-on-surface-variant mt-2 text-lg">Dokumentasi video kegiatan PPID Kota Balikpapan</p>
            </div>
            <a href="http://ppidbalikpapan.test/video" class="inline-flex items-center gap-2 text-primary font-semibold hover:text-secondary transition-colors group">
                Lihat Semua Video
                <span class="material-symbols-outlined text-sm group-hover:translate-x-1 transition-transform">arrow_forward</span>
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="group cursor-pointer">
                <div class="relative rounded-2xl overflow-hidden aspect-video mb-4 shadow-sm">
                    <img src="https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?auto=format&fit=crop&q=80&w=800" alt="Video 1" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    <div class="absolute inset-0 bg-black/30 flex items-center justify-center transition-colors group-hover:bg-black/20">
                        <span class="material-symbols-outlined text-white text-7xl drop-shadow-lg opacity-90 group-hover:opacity-100 group-hover:scale-110 transition-all">play_circle</span>
                    </div>
                </div>
                <h3 class="text-xl font-bold text-on-surface mb-2 group-hover:text-primary transition-colors line-clamp-2">Peluncuran Balikpapan Single Window oleh Wali Kota</h3>
                <p class="text-on-surface-variant text-sm flex items-center gap-2">
                    <span class="material-symbols-outlined text-[16px]">calendar_today</span> 12 April 2026
                </p>
            </div>

            <div class="group cursor-pointer">
                <div class="relative rounded-2xl overflow-hidden aspect-video mb-4 shadow-sm">
                    <img src="https://images.unsplash.com/photo-1540317580384-e5d43616b9aa?auto=format&fit=crop&q=80&w=800" alt="Video 2" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    <div class="absolute inset-0 bg-black/30 flex items-center justify-center transition-colors group-hover:bg-black/20">
                        <span class="material-symbols-outlined text-white text-7xl drop-shadow-lg opacity-90 group-hover:opacity-100 group-hover:scale-110 transition-all">play_circle</span>
                    </div>
                </div>
                <h3 class="text-xl font-bold text-on-surface mb-2 group-hover:text-primary transition-colors line-clamp-2">Sosialisasi Keterbukaan Informasi Publik 2026</h3>
                <p class="text-on-surface-variant text-sm flex items-center gap-2">
                    <span class="material-symbols-outlined text-[16px]">calendar_today</span> 10 April 2026
                </p>
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-surface">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex flex-col md:flex-row justify-between items-end mb-12 gap-4">
            <div>
                <h2 class="text-3xl font-bold text-on-surface flex items-center gap-3">
                    <span class="material-symbols-outlined text-primary text-4xl">photo_camera</span>
                    Galeri Foto
                </h2>
                <p class="text-on-surface-variant mt-2 text-lg">Potret kegiatan dan layanan PPID Kota Balikpapan</p>
            </div>
            <a href="http://ppidbalikpapan.test/foto" class="inline-flex items-center gap-2 text-primary font-semibold hover:text-secondary transition-colors group">
                Lihat Semua Foto
                <span class="material-symbols-outlined text-sm group-hover:translate-x-1 transition-transform">arrow_forward</span>
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="group cursor-pointer">
                <div class="rounded-2xl overflow-hidden aspect-[4/3] mb-4 shadow-sm">
                    <img src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?auto=format&fit=crop&q=80&w=600" alt="Foto 1" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                </div>
                <h3 class="text-lg font-bold text-on-surface leading-snug group-hover:text-primary transition-colors line-clamp-2">Kunjungan Kerja Kemenkominfo ke Balikpapan</h3>
                <p class="text-on-surface-variant text-sm mt-2 flex items-center gap-2">
                    <span class="material-symbols-outlined text-[16px]">calendar_today</span> 08 April 2026
                </p>
            </div>

            <div class="group cursor-pointer">
                <div class="rounded-2xl overflow-hidden aspect-[4/3] mb-4 shadow-sm">
                    <img src="https://images.unsplash.com/photo-1577415124269-3187212001e9?auto=format&fit=crop&q=80&w=600" alt="Foto 2" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                </div>
                <h3 class="text-lg font-bold text-on-surface leading-snug group-hover:text-primary transition-colors line-clamp-2">Rapat Koordinasi Pengelola Informasi Daerah</h3>
                <p class="text-on-surface-variant text-sm mt-2 flex items-center gap-2">
                    <span class="material-symbols-outlined text-[16px]">calendar_today</span> 05 April 2026
                </p>
            </div>

            <div class="group cursor-pointer">
                <div class="rounded-2xl overflow-hidden aspect-[4/3] mb-4 shadow-sm">
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&q=80&w=600" alt="Foto 3" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                </div>
                <h3 class="text-lg font-bold text-on-surface leading-snug group-hover:text-primary transition-colors line-clamp-2">Penyerahan Penghargaan Keterbukaan Informasi</h3>
                <p class="text-on-surface-variant text-sm mt-2 flex items-center gap-2">
                    <span class="material-symbols-outlined text-[16px]">calendar_today</span> 01 April 2026
                </p>
            </div>
        </div>
    </div>
</section>
</main>
<!-- Footer -->
<footer id="kontak" class="bg-slate-800 dark:bg-slate-600 w-full pt-16 md:pt-20 pb-8 border-t border-slate-600 dark:border-slate-800">
<div class="grid grid-cols-1 md:grid-cols-4 gap-12 max-w-7xl mx-auto px-4 md:px-6 font-['Inter'] text-sm leading-relaxed">
<!-- Brand & Map -->
<div class="md:col-span-2">
<div class="text-xl md:text-2xl font-bold text-yellow-600 dark:text-blue-100 mb-6 font-headline">PPID Kota Balikpapan</div>
<p class="text-slate-400 dark:text-slate-400 max-w-md mb-8">
                Pejabat Pengelola Informasi dan Dokumentasi (PPID) Utama Pemerintah Kota Balikpapan bertanggung jawab untuk penyimpanan, pendokumentasian, penyediaan, dan pelayanan informasi publik.
            </p>
<div class="w-full rounded-xl overflow-hidden shadow-md" style="aspect-ratio:16/9;"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63821.253001534766!2d116.75573272167965!3d-1.2764074999999773!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df1473bb9404897%3A0x94d96108f98b652c!2sBalikpapan%20Mayor&#39;s%20Office!5e0!3m2!1sen!2ssg!4v1776063788871!5m2!1sen!2ssg" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
</div>
<!-- Contacts -->
<div>
<h4 class="font-headline font-bold text-yellow-600 dark:text-blue-100 text-lg mb-7">Kontak Kami</h4>
<ul class="space-y-4 text-slate-400 dark:text-slate-400">
<li class="flex gap-3">
<span class="material-symbols-outlined text-secondary shrink-0" data-icon="location_on">location_on</span>
<span class="text-xs md:text-sm">Jl. Jenderal Sudirman No.1, Klandasan Ulu, Balikpapan Kota, Kota Balikpapan, Kalimantan Timur 76112</span>
</li>
<li class="flex items-center gap-3">
<span class="material-symbols-outlined text-secondary shrink-0" data-icon="call">call</span>
<span class="text-xs md:text-sm">(0542) 421420</span>
</li>
<li class="flex items-center gap-3">
<span class="material-symbols-outlined text-secondary shrink-0" data-icon="mail">mail</span>
<span class="text-xs md:text-sm break-all">ppid@balikpapan.go.id</span>
</li>
</ul>
</div>
<!-- Quick Links -->
<div>
<h4 class="font-headline font-bold text-yellow-600 dark:text-blue-100 text-lg mb-6">Peta Situs</h4>
<ul class="space-y-3">
<li><a class="text-slate-400 dark:text-slate-400 hover:text-blue-700 dark:hover:text-blue-300 underline-offset-4 hover:underline ease-in-out duration-200 text-xs md:text-sm" href="#">Whistleblower System</a></li>
<li><a class="text-slate-400 dark:text-slate-400 hover:text-blue-700 dark:hover:text-blue-300 underline-offset-4 hover:underline ease-in-out duration-200 text-xs md:text-sm" href="#">Lapor!</a></li>
<li><a class="text-slate-400 dark:text-slate-400 hover:text-blue-700 dark:hover:text-blue-300 underline-offset-4 hover:underline ease-in-out duration-200 text-xs md:text-sm" href="#">Data Terbuka</a></li>
<li><a class="text-slate-400 dark:text-slate-400 hover:text-blue-700 dark:hover:text-blue-300 underline-offset-4 hover:underline ease-in-out duration-200 text-xs md:text-sm font-semibold" href="#">Kebijakan Privasi</a></li>
</ul>
</div>
</div>
<div class="max-w-7xl mx-auto px-4 md:px-6 mt-16 pt-8 border-t border-slate-600 dark:border-slate-800 text-center">
<p class="text-slate-400 dark:text-slate-400 text-[10px] md:text-xs">
            © 2024 Pemerintah Kota Balikpapan. PPID Utama. All rights reserved.
        </p>
</div>
</footer>
<script>
    function updateClock() {
        const now = new Date();
        const days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
        const months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
        
        const dayName = days[now.getDay()];
        const day = now.getDate();
        const monthName = months[now.getMonth()];
        const year = now.getFullYear();
        
        const hours = String(now.getHours()).padStart(2, '0');
        const minutes = String(now.getMinutes()).padStart(2, '0');
        const seconds = String(now.getSeconds()).padStart(2, '0');
        
        const offset = -now.getTimezoneOffset() / 60;
        let tz = '';
        if (offset === 7) tz = 'WIB';
        else if (offset === 8) tz = 'WITA';
        else if (offset === 9) tz = 'WIT';
        else {
            tz = now.toLocaleTimeString('en-us',{timeZoneName:'short'}).split(' ')[2];
        }

        const dateString = `${dayName}, ${day} ${monthName} ${year}`;
        const timeString = `${hours}:${minutes}:${seconds} ${tz}`;
        
        const desktopDate = document.getElementById('desktop-date');
        const desktopTime = document.getElementById('desktop-time');
        const mobileDate = document.getElementById('mobile-date');
        const mobileTime = document.getElementById('mobile-time');
        
        if (desktopDate) desktopDate.textContent = dateString;
        if (desktopTime) desktopTime.textContent = timeString;
        if (mobileDate) mobileDate.textContent = dateString;
        if (mobileTime) mobileTime.textContent = timeString;
    }
    setInterval(updateClock, 1000);
    updateClock();
</script>
<script>
    // Carousel Logic - Fully functional with Infinite Loop
    const track = document.getElementById('carousel-track');
    const container = document.getElementById('carousel-container');
    const originalSlides = Array.from(track.children);
    const dots = Array.from(document.querySelectorAll('.carousel-dot'));

    const firstClone = originalSlides[0].cloneNode(true);
    const lastClone = originalSlides[originalSlides.length - 1].cloneNode(true);
    track.appendChild(firstClone);
    track.insertBefore(lastClone, originalSlides[0]);

    const slides = Array.from(track.children);
    let currentIndex = 1;
    let isTransitioning = false;
    let autoPlayTimer;
    let slideWidth = 0;

    function setSlideWidths() {
        slideWidth = container.getBoundingClientRect().width;
        slides.forEach(function(s) {
            s.style.width = slideWidth + 'px';
            s.style.minWidth = slideWidth + 'px';
            s.style.flex = '0 0 ' + slideWidth + 'px';
        });
        track.style.width = (slideWidth * slides.length) + 'px';
        updateCarousel(true);
    }

    function updateCarousel(instant) {
        track.style.transition = instant ? 'none' : 'transform 0.5s cubic-bezier(0.4,0,0.2,1)';
        track.style.transform = 'translateX(-' + (currentIndex * slideWidth) + 'px)';
        var dotIndex = currentIndex - 1;
        if (currentIndex === 0) dotIndex = originalSlides.length - 1;
        if (currentIndex === slides.length - 1) dotIndex = 0;
        dots.forEach(function(dot, idx) {
            dot.classList.toggle('bg-white', idx === dotIndex);
            dot.classList.toggle('scale-125', idx === dotIndex);
            dot.classList.toggle('bg-white/40', idx !== dotIndex);
        });
    }

    track.addEventListener('transitionend', function() {
        isTransitioning = false;
        if (currentIndex === 0) { currentIndex = slides.length - 2; updateCarousel(true); }
        if (currentIndex === slides.length - 1) { currentIndex = 1; updateCarousel(true); }
    });

    function moveNext() { if (isTransitioning) return; isTransitioning = true; currentIndex++; updateCarousel(); }
    function movePrev() { if (isTransitioning) return; isTransitioning = true; currentIndex--; updateCarousel(); }
    function startAutoPlay() { autoPlayTimer = setInterval(moveNext, 7000); }
    function resetAutoPlay() { clearInterval(autoPlayTimer); startAutoPlay(); }

    let startX = 0, isDragging = false;
    const dragStart = function(e) { startX = e.type === 'touchstart' ? e.touches[0].clientX : e.clientX; isDragging = true; };
    const dragging = function(e) {
        if (!isDragging) return;
        var x = e.type === 'touchmove' ? e.touches[0].clientX : e.clientX;
        track.style.transition = 'none';
        track.style.transform = 'translateX(-' + (currentIndex * slideWidth - (x - startX)) + 'px)';
    };
    const dragEnd = function(e) {
        if (!isDragging) return;
        isDragging = false;
        var x = e.type === 'touchend' ? e.changedTouches[0].clientX : e.clientX;
        if (Math.abs(x - startX) > 50) { if (x > startX) movePrev(); else moveNext(); }
        else updateCarousel(false);
        resetAutoPlay();
    };
    track.addEventListener('mousedown', dragStart);
    window.addEventListener('mousemove', dragging);
    window.addEventListener('mouseup', dragEnd);
    track.addEventListener('touchstart', dragStart, {passive:true});
    track.addEventListener('touchmove', dragging, {passive:true});
    track.addEventListener('touchend', dragEnd);

    window.addEventListener('resize', setSlideWidths);
    setSlideWidths();
    startAutoPlay();
</script>
<script>
    function updateWeather() {
        // Simulated dynamic data for Balikpapan
        const conditions = [
            { text: 'Cerah Berawan', icon: 'partly_cloudy_day' },
            { text: 'Berawan', icon: 'cloud' },
            { text: 'Hujan Ringan', icon: 'rainy' },
            { text: 'Cerah', icon: 'sunny' },
            { text: 'Hujan Petir', icon: 'thunderstorm' }
        ];
        
        // Create variations based on current minutes to simulate real-time changes
        const now = new Date();
        const minutes = now.getMinutes();
        const seed = minutes % conditions.length;
        
        // Base temperature for Balikpapan is around 26-32
        const baseTemp = 26;
        const tempVar = Math.floor(Math.random() * 7);
        const currentTemp = baseTemp + tempVar;
        
        // Humidity usually high in Balikpapan
        const baseHumidity = 70;
        const humidityVar = Math.floor(Math.random() * 20);
        const currentHumidity = baseHumidity + humidityVar;

        const data = conditions[seed];

        const descEl = document.getElementById('weather-desc');
        const humidityEl = document.getElementById('weather-humidity');
        const iconEl = document.getElementById('weather-icon');

        if (descEl) descEl.textContent = `${data.text}, ${currentTemp}°C`;
        if (humidityEl) humidityEl.textContent = `${currentHumidity}%`;
        if (iconEl) iconEl.textContent = data.icon;
        
        console.log('Weather Updated:', data.text, currentTemp + '°C');
    }

    // Initial update and refresh every 60 seconds for 'truly dynamic' feel
    updateWeather();
    setInterval(updateWeather, 60000);
</script>





<script>
    // Hide/show desktop nav based on screen width
    function hideShowNav() {
        var n = document.getElementById('desktop-nav');
        if (!n) return;
        if (window.innerWidth < 768) {
            n.style.cssText = 'display:none!important;height:0!important;overflow:hidden!important;';
        } else {
            n.style.cssText = 'display:block!important;height:44px!important;overflow:visible!important;position:relative;z-index:9999;';
        }
    }
    hideShowNav();
    window.addEventListener('resize', hideShowNav);

    // Active nav highlight
    (function() {
        var full = window.location.href.split('?')[0].replace(/\/$/, '');
        document.querySelectorAll('#desktop-nav a[href]').forEach(function(link) {
            var href = link.getAttribute('href').replace(/\/$/, '');
            if (full === href) {
                link.style.color = '#fdc003';
                link.style.borderBottom = '3px solid #fdc003';
            }
        });
    })();

    // Mobile menu toggle
    var openBtn = document.getElementById('open-mobile-menu');
    var closeBtn = document.getElementById('close-mobile-menu');
    var mobileMenu = document.getElementById('mobile-menu');
    if (openBtn) openBtn.addEventListener('click', function() {
        mobileMenu.classList.remove('hidden');
        mobileMenu.classList.add('flex');
        document.body.style.overflow = 'hidden';
    });
    if (closeBtn) closeBtn.addEventListener('click', function() {
        mobileMenu.classList.add('hidden');
        mobileMenu.classList.remove('flex');
        document.body.style.overflow = '';
    });

    // Mobile accordion
    function toggleMobileAccordion(id) {
        var el = document.getElementById(id);
        var icon = document.getElementById('icon-' + id);
        var isHidden = el.classList.contains('hidden');
        ['acc-profil','acc-infopub','acc-layanan','acc-ppid'].forEach(function(acc) {
            var a = document.getElementById(acc);
            if (a) { a.classList.add('hidden'); a.classList.remove('flex'); }
            var ic = document.getElementById('icon-' + acc);
            if (ic) ic.style.transform = '';
        });
        if (isHidden) {
            el.classList.remove('hidden');
            el.classList.add('flex');
            if (icon) icon.style.transform = 'rotate(180deg)';
        }
    }
</script>
<script>
// Position mega menu right below nav bar
function positionMegaMenu() {
    var megaMenu = document.getElementById('mega-infopub');
    var header = document.querySelector('header');
    if (megaMenu && header) {
        var rect = header.getBoundingClientRect();
        megaMenu.style.top = Math.max(0, rect.bottom) + 'px';
    }
}
document.addEventListener('DOMContentLoaded', positionMegaMenu);
window.addEventListener('scroll', positionMegaMenu);
window.addEventListener('resize', positionMegaMenu);
positionMegaMenu();
</script>
<script>
(function() {
    var megas = [
        { triggerId: 'profil-trigger',  menuId: 'mega-profil',   arrowId: 'profil-arrow' },
        { triggerId: 'infopub-trigger', menuId: 'mega-infopub',  arrowId: 'infopub-arrow' },
        { triggerId: 'layanan-trigger', menuId: 'mega-layanan',  arrowId: 'layanan-arrow' },
    ];

    function positionMenu(menu) {
        var header = document.querySelector('header');
        if (header) menu.style.top = header.getBoundingClientRect().bottom + 'px';
    }

    function hideAll() {
        megas.forEach(function(m) {
            var menu = document.getElementById(m.menuId);
            var arrow = document.getElementById(m.arrowId);
            if (menu) menu.style.display = 'none';
            if (arrow) arrow.style.transform = '';
        });
    }

    megas.forEach(function(m) {
        var trigger = document.getElementById(m.triggerId);
        var menu = document.getElementById(m.menuId);
        var arrow = document.getElementById(m.arrowId);
        if (!trigger || !menu) return;
        var timer;

        trigger.addEventListener('mouseenter', function() {
            clearTimeout(timer);
            hideAll();
            positionMenu(menu);
            menu.style.display = 'block';
            if (arrow) arrow.style.transform = 'rotate(180deg)';
        });
        trigger.addEventListener('mouseleave', function() {
            timer = setTimeout(function() {
                menu.style.display = 'none';
                if (arrow) arrow.style.transform = '';
            }, 100);
        });
        menu.addEventListener('mouseenter', function() { clearTimeout(timer); });
        menu.addEventListener('mouseleave', function() {
            timer = setTimeout(function() {
                menu.style.display = 'none';
                if (arrow) arrow.style.transform = '';
            }, 100);
        });
    });

    window.addEventListener('scroll', function() {
        megas.forEach(function(m) {
            var menu = document.getElementById(m.menuId);
            if (menu && menu.style.display === 'block') positionMenu(menu);
        });
    });

    document.addEventListener('click', function(e) {
        var inside = megas.some(function(m) {
            var t = document.getElementById(m.triggerId);
            var mn = document.getElementById(m.menuId);
            return (t && t.contains(e.target)) || (mn && mn.contains(e.target));
        });
        if (!inside) hideAll();
    });
})();
</script>
</body>
</html>