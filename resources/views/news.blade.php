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
<a href="/profil/profil" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Informasi Tentang Kedudukan atau Domisili</a>
<a href="/profil/visimisi" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Visi &amp; Misi</a>
<a href="/profil/struktur" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Struktur Organisasi</a>
<a href="/profil/tugas" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Tugas &amp; Laporan Harta Kekayaan Pejabat Negara</a>
<a href="/profil/rekapLHKPN" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Rekapitulasi Penyampaian LHKPN Pemkot Balikpapan</a>
<p class="px-5 py-2 text-[10px] font-extrabold text-secondary-container uppercase tracking-widest border-t border-white/10">Profil PPID Kota Balikpapan</p>
<a href="/profil/profil" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Profil Singkat</a>
<a href="/profil/struktur" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Struktur PPID</a>
<a href="/profil/tugas" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Tugas &amp; Wewenang</a>
<a href="/profil/maklumat" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Maklumat Layanan</a>
<a href="/profil/media" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Media Layanan</a>
<a href="/profil/waktu" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Waktu Pelayanan</a>
<a href="/profil/biaya" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Biaya</a>
<a href="/profil/visimisi" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Visi &amp; Misi PPID</a>
<a href="/profil/pelaksana" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">PPID Pelaksana</a>
<a href="/profil/regulasi" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Regulasi Dasar Hukum PPID</a>
<p class="px-5 py-2 text-[10px] font-extrabold text-secondary-container uppercase tracking-widest border-t border-white/10">Pejabat Badan Publik</p>
<a href="/pejabat/walwakot" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Profil Wali Kota dan Wakil Wali Kota</a>
<a href="/pejabat/kepalaperangkat" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Profil Kepala Perangkat Daerah</a>
<a href="/pejabat/sekda" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Profil Sekretaris Daerah</a>
<a href="/pejabat/asistenadmin" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Profil Asisten Administrasi Umum</a>
<a href="/pejabat/asistentata" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Profil Asisten Tata Pemerintahan</a>
<a href="/pejabat/asistenperekonomian" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Profil Asisten Perekonomian Pembangunan dan Kesejahteraan Rakyat</a>
<a href="/pejabat/stafahli" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Profil Staf Ahli</a>
<a href="/pejabat/kepalabadan" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Profil Kepala Badan</a>
<a href="/pejabat/kepaladinas" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Profil Kepala Dinas</a>
<a href="/pejabat/camat" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Profil Camat</a>
</div>
</div>
<div class="border-b border-white/10">
<button onclick="toggleMobileAccordion('acc-infopub')" class="w-full flex items-center justify-between px-3 py-3.5 text-sm font-bold text-white">
<span class="flex items-center gap-3"><span class="material-symbols-outlined text-base">folder_open</span> Informasi Publik</span>
<span class="material-symbols-outlined text-base transition-transform duration-300" id="icon-acc-infopub">expand_more</span>
</button>
<div id="acc-infopub" class="hidden flex-col bg-white/5 rounded-lg mx-2 mb-2 overflow-hidden">
<p class="px-5 py-2 text-[10px] font-extrabold text-secondary-container uppercase tracking-widest">Informasi Berkala</p>
<a href="/informasi/RKPD" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">RKPD</a>
<a href="/informasi/LAKIP" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">LAKIP</a>
<a href="/informasi/LaporanKeuangan" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Laporan Keuangan</a>
<a href="/informasi/LaporanAksesInformasiPublik" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Laporan Akses Informasi Publik</a>
<a href="/informasi/ProdukHukum" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Produk Hukum</a>
<a href="/informasi/Ketenagakerjaan" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Ketenagakerjaan</a>
<a href="/informasi/prosedurperingatandini" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Prosedur Peringatan Dini dan Evakuasi Keadaan Darurat</a>
<a href="/informasi/Realisasi2022" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Realisasi Kegiatan dan Kinerja Pemkot Balikpapan Tahun 2022</a>
<a href="/informasi/Realisasi2023" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Realisasi Kegiatan dan Kinerja Pemkot Balikpapan Tahun 2023</a>
<a href="/informasi/ProgramKegiatan2023" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Program dan Kegiatan Tahun 2023</a>
<a href="/informasi/SKKlasifikasi" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">SK Klasifikasi Dikecualikan</a>
<a href="/informasi/SKMaklumat" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">SK Maklumat Pelayanan Diskominfo</a>
<p class="px-5 py-2 text-[10px] font-extrabold text-secondary-container uppercase tracking-widest border-t border-white/10">Informasi Setiap Saat</p>
<a href="/informasi/StatistikDaerah" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Statistik Daerah</a>
<a href="/informasi/DaftarInformasiPublik" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Daftar Informasi Publik</a>
<a href="/informasi/InformasiTentangOrganisasi" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Informasi Tentang Organisasi, Administrasi Kepegawaian dan Keuangan</a>
<a href="/informasi/PerjanjianKerjaSama" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Perjanjian Kerja Sama</a>
<a href="/informasi/Perizinan" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Perizinan</a>
<a href="/informasi/AsetDaerah" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Aset Daerah</a>
<a href="/informasi/RencanaStrategis" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Rencana Strategis</a>
<a href="/informasi/RencanaKerjaBadanPublik" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Rencana Kerja Badan Publik</a>
<p class="px-5 py-2 text-[10px] font-extrabold text-secondary-container uppercase tracking-widest border-t border-white/10">Informasi Serta Merta</p>
<a href="/informasi/InformasiTentangPDAM" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Informasi Tentang PDAM</a>
<a href="/informasi/InformasiTentangSiapSiagaBencana" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Informasi Tentang Siap Siaga Bencana</a>
<a href="/informasi/InformasiTentangPenutupanJalan" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Informasi Tentang Penutupan Jalan</a>
<a href="/informasi/4UpayaMitigasi" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">4 Upaya Mitigasi</a>
<a href="/informasi/ProsedurEvakuasiDaruratBencana" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container">Prosedur Evakuasi Darurat Bencana</a>
</div>
</div>
<div class="border-b border-white/10">
<button onclick="toggleMobileAccordion('acc-layanan')" class="w-full flex items-center justify-between px-3 py-3.5 text-sm font-bold text-white">
<span class="flex items-center gap-3"><span class="material-symbols-outlined text-base">support_agent</span> Layanan Informasi</span>
<span class="material-symbols-outlined text-base transition-transform duration-300" id="icon-acc-layanan">expand_more</span>
</button>
<div id="acc-layanan" class="hidden flex-col bg-white/5 rounded-lg mx-2 mb-2 overflow-hidden">
<p class="px-5 py-2 text-[10px] font-extrabold text-secondary-container uppercase tracking-widest">SOP PPID</p>
<a href="/sop/TataCaraPermohonanInformasi" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Tata Cara Permohonan Informasi</a>
<a href="/sop/TataCaraPengajuanKeberatan" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Tata Cara Pengajuan Keberatan</a>
<a href="/sop/TataCaraPenyelesaianSengketaInformasi" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Tata Cara Penyelesaian Sengketa Informasi</a>
<a href="/sop/StandarPelayananInformasi" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Standar Pelayanan Informasi</a>
<a href="/sop/SOPUjiKonsekuensiPenetapanInformasiDikecualikan" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">SOP Uji Konsekuensi Penetapan Informasi Dikecualikan</a>
<a href="/sop/SOPPelayananPermohonanInformasiPublikdiPPID" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">SOP Pelayanan Permohonan Informasi Publik di PPID</a>
<a href="/sop/SOPPemenuhanPemutakhiranDaftarInformasiPublik" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">SOP Pemenuhan, Pemutakhiran Daftar Informasi Publik</a>
<a href="/sop/SOPPemantauandanEvaluasiPelayananInformasiPublik" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">SOP Pemantauan dan Evaluasi Pelayanan Informasi Publik</a>
<a href="/sop/SOPPengembanganInfrastruktur" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">SOP Pengembangan Infrastruktur</a>
<a href="/sop/SOPPendokumentasianInformasiPublik" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">SOP Pendokumentasian Informasi Publik</a>
<a href="/sop/SOPPengolahanDataStatistikSektoral" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">SOP Pengolahan Data Statistik Sektoral</a>
<a href="/sop/SOPPengumpulanDataStatistikSektoral" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">SOP Pengumpulan Data Statistik Sektoral</a>
<a href="/sop/MaklumatPelayananInformasiPublikPemkotBalikpapan" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Maklumat Pelayanan Informasi Publik Pemkot Balikpapan</a>
<a href="/sop/SKPengelolaPPID" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">SK Pengelola PPID</a>
<p class="px-5 py-2 text-[10px] font-extrabold text-secondary-container uppercase tracking-widest border-t border-white/10">Layanan Online</p>
<a href="https://www.lapor.go.id/" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">LAPOR!</a>
<a href="/permohonan" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Formulir Permintaan Informasi Online</a>
<a href="/keberatan" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Formulir Keberatan</a>
<a href="/sop/tatacarapengaduan" class="block px-5 py-2 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Tata Cara Pengaduan Masyarakat</a>
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
<!-- Title Section: Background Image with Fade -->
<section class="relative py-28 overflow-hidden border-b border-outline-variant/10">
<!-- Background Layer -->
<div class="absolute inset-0 z-0">
<img alt="" class="w-full h-full object-cover opacity-70" src="sinarmasbpp.jpg"/>
<div class="absolute inset-0 bg-gradient-to-b from-transparent via-white/80 to-white"></div>
</div>
<div class="max-w-7xl mx-auto px-6 relative z-10">
<nav class="flex mb-4 text-xs font-medium text-outline uppercase tracking-widest gap-2">
<a href="http://ppidbalikpapan.test">Beranda</a>
<span>/</span>
<span class="text-primary">Berita</span>
</nav>
<h1 class="text-5xl md:text-6xl font-headline font-extrabold text-primary leading-tight">
                    Berita <span class="text-secondary">Balikpapan</span>
</h1>
<p class="mt-6 text-lg text-on-surface-variant max-w-2xl leading-relaxed">
                    Akses informasi terkini mengenai kebijakan, layanan publik, dan perkembangan terbaru Kota Balikpapan secara transparan dan akuntabel.
                </p>
</div>
</section>
<!-- Search & Filter Section -->
<section class="top-[58px] z-40 bg-white/80 backdrop-blur-md border-y border-outline-variant/10">
<div class="max-w-7xl mx-auto px-6 py-6 flex flex-col md:flex-row justify-between items-center gap-6">
<div class="flex flex-wrap items-center gap-2">
</div>
<div class="relative w-full md:w-80">
<input class="w-full pl-4 pr-12 py-3 bg-surface-container-low border-none rounded-xl focus:ring-2 focus:ring-primary text-sm" placeholder="Cari berita..." type="text"/>
<button class="absolute right-2 top-1/2 -translate-y-1/2 w-8 h-8 bg-primary rounded-lg flex items-center justify-center text-white">
<span class="material-symbols-outlined text-sm">search</span>
</button>
</div>
</div>
</section>
<!-- News Grid -->
<section class="py-12 max-w-7xl mx-auto px-6">
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="news-grid">
<!-- News Card 1 -->
<article class="news-card group bg-surface-container-lowest rounded-2xl overflow-hidden hover:shadow-2xl transition-all duration-300 flex flex-col" data-page="1">
<div class="relative overflow-hidden aspect-video">
<img alt="Gedung Balai Kota Balikpapan" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="images/1.jpg"/>
<div class="absolute top-4 left-4">
<span class="px-3 py-1 bg-secondary text-white text-[10px] font-bold uppercase tracking-widest rounded-full">Pemerintahan</span>
</div>
</div>
<div class="p-6 flex flex-col flex-grow">
<time class="text-xs font-semibold text-outline mb-3 uppercase tracking-tighter">07 APRIL 2026</time>
<h3 class="text-xl font-headline font-bold text-on-surface leading-snug group-hover:text-primary transition-colors mb-3">
                            Pemerintah Kota Balikpapan Raih Penghargaan Transparansi Publik 2024Wakil Wali Kota Paparkan LKPj 2025, Dorong Percepatan Program dan Minimalkan SILPA
                        </h3>
<p class="text-on-surface-variant text-sm line-clamp-3 mb-6">
                            BALIKPAPAN — Wakil Wali Kota Bagus Susetyo menyampaikan Laporan Keterangan Pertanggungjawaban (LKPj) Wali Kota Balikpapan Tahun Anggaran 2025 dalam Rapat Paripurna ke-2 Masa Sidang II Tahun Sidang 2025/2026 di Ballroom Hotel Gran Senyiur, pada Senin (6/4/2026).
                        </p>
<div class="mt-auto flex items-center justify-between">
<a class="text-primary font-bold text-sm flex items-center gap-2 group/btn" href="http://ppidbalikpapan.test/insidenews">
                                Selengkapnya
                                <span class="material-symbols-outlined text-sm group-hover/btn:translate-x-1 transition-transform">arrow_forward</span>
</a>
</div>
</div>
</article>
<!-- News Card 2 -->
<article class="news-card group bg-surface-container-lowest rounded-2xl overflow-hidden hover:shadow-2xl transition-all duration-300 flex flex-col" data-page="1">
<div class="relative overflow-hidden aspect-video">
<img alt="Interior puskesmas modern" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCON1MnTytj9ujS8_J-v81rXKNMRNuqd78bSqIPlrG4c97t1eXZm-hLSn4UijawKvKCO62xXBDCKMs9yUGdaFfTrdfAX8LCPk120gMmcCs9d7Zpy_sseEdvASl9YC2vxKTziTINUVKgTA3YvFSGhdeVjIbcCqbKMDt479oKhxqzXI7WHddbe0wRVv-1Oe-2PmFMpqEEMSVPYhGOifupt-UBvwnhp2TY6e_64z0_JqKhzlRCm9jKwN_8xpvfmmbNj4fOCPYpnuxrvqiq"/>
<div class="absolute top-4 left-4">
<span class="px-3 py-1 bg-tertiary text-white text-[10px] font-bold uppercase tracking-widest rounded-full">Layanan</span>
</div>
</div>
<div class="p-6 flex flex-col flex-grow">
<time class="text-xs font-semibold text-outline mb-3 uppercase tracking-tighter">12 MEI 2024</time>
<h3 class="text-xl font-headline font-bold text-on-surface leading-snug group-hover:text-primary transition-colors mb-3">
                            Digitalisasi Puskesmas: Pendaftaran Online Kini Tersedia di Seluruh Kecamatan
                        </h3>
<p class="text-on-surface-variant text-sm line-clamp-3 mb-6">
                            Meningkatkan aksesibilitas kesehatan, Dinas Kesehatan Kota Balikpapan resmi meluncurkan modul pendaftaran pasien online untuk meminimalisir antrean fisik.
                        </p>
<div class="mt-auto flex items-center justify-between">
<a class="text-primary font-bold text-sm flex items-center gap-2 group/btn" href="#">
                                Selengkapnya
                                <span class="material-symbols-outlined text-sm group-hover/btn:translate-x-1 transition-transform">arrow_forward</span>
</a>
</div>
</div>
</article>
<!-- News Card 3 -->
<article class="news-card group bg-surface-container-lowest rounded-2xl overflow-hidden hover:shadow-2xl transition-all duration-300 flex flex-col" data-page="1">
<div class="relative overflow-hidden aspect-video">
<img alt="Pasar tradisional Balikpapan" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCUble0jS2EKmg7CMXdxK6REg9Zc-24sz9RVQrK3M79QDxmZz2NJrd5T2IaFtZ98YSKrUBAHlsRcKVQtMw3G3dxD4RQiSnGpsjFAEAyqnJr9Yy7-_bvrZdvAe-y-_h_myyLpAeCPG4hBNvwKbUnj0YDGWShQwsqlsXkm-j0oklqol8ChMJjNzlNcmBlJHNExUQnoidzCE084Y30ukVMG8Tam7H3FP6v7cO4WJh6BzCuMiPUKVNZLanm_DvpUpg2cO_1e9ls4qT4I_aW"/>
<div class="absolute top-4 left-4">
<span class="px-3 py-1 bg-primary-container text-on-primary-container text-[10px] font-bold uppercase tracking-widest rounded-full">Ekonomi</span>
</div>
</div>
<div class="p-6 flex flex-col flex-grow">
<time class="text-xs font-semibold text-outline mb-3 uppercase tracking-tighter">10 MEI 2024</time>
<h3 class="text-xl font-headline font-bold text-on-surface leading-snug group-hover:text-primary transition-colors mb-3">
                            Penguatan UMKM Lokal Menuju Balikpapan sebagai Gerbang Ibu Kota Negara
                        </h3>
<p class="text-on-surface-variant text-sm line-clamp-3 mb-6">
                            Diskusi panel lintas sektoral membahas strategi penguatan ekonomi kerakyatan bagi pelaku usaha kecil menengah di tengah perkembangan IKN.
                        </p>
<div class="mt-auto flex items-center justify-between">
<a class="text-primary font-bold text-sm flex items-center gap-2 group/btn" href="#">
                                Selengkapnya
                                <span class="material-symbols-outlined text-sm group-hover/btn:translate-x-1 transition-transform">arrow_forward</span>
</a>
</div>
</div>
</article>
<!-- News Card 4 -->
<article class="news-card group bg-surface-container-lowest rounded-2xl overflow-hidden hover:shadow-2xl transition-all duration-300 flex flex-col" data-page="1">
<div class="relative overflow-hidden aspect-video">
<img alt="Taman kota Balikpapan" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCLFMCuPjFiWoSPcefr2k0C90CInnKiNplmJkprc2s4u_jcWVjf98m-d6y4scUWeNDjT5HtI2pPanXnfy7tDT8FHtJb_MC-6oVhbfNBgbQ-tG96u1FdgRSJhWBoAZXtviKLqzhoiB90XKm5qdBoC9-_3-JXV6D-GXpRwoPSNWE6gUl1EEwyVKH-qD54XWhUtyJyfDbkpJyWrrVNENNa2yiRpxV3NJb_BB6yqgcaepAFtgkslcwtSReLOvJlPlIw8UOJycfDbIX70Pv3"/>
<div class="absolute top-4 left-4">
<span class="px-3 py-1 bg-secondary text-white text-[10px] font-bold uppercase tracking-widest rounded-full">Pemerintahan</span>
</div>
</div>
<div class="p-6 flex flex-col flex-grow">
<time class="text-xs font-semibold text-outline mb-3 uppercase tracking-tighter">08 MEI 2024</time>
<h3 class="text-xl font-headline font-bold text-on-surface leading-snug group-hover:text-primary transition-colors mb-3">
                            Revitalisasi Ruang Terbuka Hijau di Kawasan Sudirman Capai 90 Persen
                        </h3>
<p class="text-on-surface-variant text-sm line-clamp-3 mb-6">
                            Proyek perbaikan trotoar dan penambahan taman kota di pusat Balikpapan hampir selesai, menjanjikan kenyamanan lebih bagi pejalan kaki.
                        </p>
<div class="mt-auto flex items-center justify-between">
<a class="text-primary font-bold text-sm flex items-center gap-2 group/btn" href="#">
                                Selengkapnya
                                <span class="material-symbols-outlined text-sm group-hover/btn:translate-x-1 transition-transform">arrow_forward</span>
</a>
</div>
</div>
</article>
<!-- News Card 5 -->
<article class="news-card group bg-surface-container-lowest rounded-2xl overflow-hidden hover:shadow-2xl transition-all duration-300 flex flex-col" data-page="1">
<div class="relative overflow-hidden aspect-video">
<img alt="Laboratorium sekolah modern" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB5UCaWY4xAq0ecXUR_NNnK5pVbKJ8DB5hoBlCyRxGaiF94o1OQdiFvX5PaSeF5mEmTYwc_dqDHVECM0Z-1sdKHDFBrQBIE996172ZppIBRlTpToFxU7UAPBcTBBpwbQ_hiE55lQhpMO6Jv9SFUgNJYkcJID40ToJGlHxVAvFhIeKj9n63SzbHfd3G5RKV2aqi6501uthjs6UlJuODokdWGO29kXsMvh50ueqdAu7ni10C7chrvQ8NmnAwA3h1XD1nnlu4t56HLojyi"/>
<div class="absolute top-4 left-4">
<span class="px-3 py-1 bg-tertiary text-white text-[10px] font-bold uppercase tracking-widest rounded-full">Pendidikan</span>
</div>
</div>
<div class="p-6 flex flex-col flex-grow">
<time class="text-xs font-semibold text-outline mb-3 uppercase tracking-tighter">05 MEI 2024</time>
<h3 class="text-xl font-headline font-bold text-on-surface leading-snug group-hover:text-primary transition-colors mb-3">
                            Beasiswa Prestasi Balikpapan 2024 Resmi Dibuka, Simak Persyaratannya
                        </h3>
<p class="text-on-surface-variant text-sm line-clamp-3 mb-6">
                            Dinas Pendidikan mengumumkan pembukaan pendaftaran beasiswa bagi mahasiswa asal Balikpapan yang berprestasi di tingkat nasional dan internasional.
                        </p>
<div class="mt-auto flex items-center justify-between">
<a class="text-primary font-bold text-sm flex items-center gap-2 group/btn" href="#">
                                Selengkapnya
                                <span class="material-symbols-outlined text-sm group-hover/btn:translate-x-1 transition-transform">arrow_forward</span>
</a>
</div>
</div>
</article>
<!-- News Card 6 -->
<article class="news-card group bg-surface-container-lowest rounded-2xl overflow-hidden hover:shadow-2xl transition-all duration-300 flex flex-col" data-page="1">
<div class="relative overflow-hidden aspect-video">
<img alt="Smart city command center" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD4ZjUvliKY0ZCuorwN-5toGXZ_QABJtnYZ2F5wFUDm9QIT2Gja9XLlxjkxP0X8rP1jaKp0tKPQeujsEI1KPSEnHe0y3CvmA02b_egw-AJrCuT5lE0p12J7XfhDYhwRygdscFlhBe7DX43xGrTFHHO4sPdzFb47UZuxbxfs4W_k3qQIutXANviY5X89m_pURTtmkJW_F-vJX27BRbDqbjHfUDkZ_FKiil3PDS143F-y-VBqi_qLBR1PFMAtALPD_sRF-n0_m1Q5aTME"/>
<div class="absolute top-4 left-4">
<span class="px-3 py-1 bg-primary text-white text-[10px] font-bold uppercase tracking-widest rounded-full">Smart City</span>
</div>
</div>
<div class="p-6 flex flex-col flex-grow">
<time class="text-xs font-semibold text-outline mb-3 uppercase tracking-tighter">01 MEI 2024</time>
<h3 class="text-xl font-headline font-bold text-on-surface leading-snug group-hover:text-primary transition-colors mb-3">
                            Optimalisasi CCTV Kota untuk Pemantauan Arus Lalu Lintas Real-Time
                        </h3>
<p class="text-on-surface-variant text-sm line-clamp-3 mb-6">
                            Dinas Perhubungan meningkatkan kapasitas server pemantauan untuk integrasi data lalu lintas yang lebih akurat melalui platform Balikpapan Single Window.
                        </p>
<div class="mt-auto flex items-center justify-between">
<a class="text-primary font-bold text-sm flex items-center gap-2 group/btn" href="#">
                                Selengkapnya
                                <span class="material-symbols-outlined text-sm group-hover/btn:translate-x-1 transition-transform">arrow_forward</span>
</a>
</div>
</div>
</article>
</div>
<!-- Pagination -->
<div class="mt-20 flex justify-center items-center gap-2" id="pagination-container">
</div>
</section>
</main>
<!-- Footer -->
<footer class="bg-slate-50 dark:bg-slate-900 w-full pt-16 md:pt-20 pb-8 border-t border-slate-200 dark:border-slate-800">
<div class="grid grid-cols-1 md:grid-cols-4 gap-12 max-w-7xl mx-auto px-4 md:px-6 font-['Inter'] text-sm leading-relaxed">
<!-- Brand & Map -->
<div class="md:col-span-2">
<div class="text-xl md:text-2xl font-bold text-blue-900 dark:text-blue-100 mb-6 font-headline">PPID Kota Balikpapan</div>
<p class="text-slate-600 dark:text-slate-400 max-w-md mb-8">
                Pejabat Pengelola Informasi dan Dokumentasi (PPID) Utama Pemerintah Kota Balikpapan bertanggung jawab untuk penyimpanan, pendokumentasian, penyediaan, dan pelayanan informasi publik.
            </p>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63821.253001534766!2d116.75573272167965!3d-1.2764074999999773!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df1473bb9404897%3A0x94d96108f98b652c!2sBalikpapan%20Mayor&#39;s%20Office!5e0!3m2!1sen!2ssg!4v1776063788871!5m2!1sen!2ssg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<!-- Contacts -->
<div>
<h4 class="font-headline font-bold text-blue-900 dark:text-blue-100 text-lg mb-6">Kontak Kami</h4>
<ul class="space-y-4 text-slate-500 dark:text-slate-400">
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
<h4 class="font-headline font-bold text-blue-900 dark:text-blue-100 text-lg mb-6">Peta Situs</h4>
<ul class="space-y-3">
<li><a class="text-slate-500 dark:text-slate-400 hover:text-blue-700 dark:hover:text-blue-300 underline-offset-4 hover:underline ease-in-out duration-200 text-xs md:text-sm" href="whistleblower.blade.php">Whistleblower System</a></li>
<li><a class="text-slate-500 dark:text-slate-400 hover:text-blue-700 dark:hover:text-blue-300 underline-offset-4 hover:underline ease-in-out duration-200 text-xs md:text-sm" link href="lapor.go.id">Lapor!</a></li>
<li><a class="text-slate-500 dark:text-slate-400 hover:text-blue-700 dark:hover:text-blue-300 underline-offset-4 hover:underline ease-in-out duration-200 text-xs md:text-sm" href="#">Data Terbuka</a></li>
<li><a class="text-slate-500 dark:text-slate-400 hover:text-blue-700 dark:hover:text-blue-300 underline-offset-4 hover:underline ease-in-out duration-200 text-xs md:text-sm text-amber-600 dark:text-amber-400 font-semibold" href="#">Kebijakan Privasi</a></li>
</ul>
</div>
</div>
<div class="max-w-7xl mx-auto px-4 md:px-6 mt-16 pt-8 border-t border-slate-100 dark:border-slate-800 text-center">
<p class="text-slate-500 dark:text-slate-400 text-[10px] md:text-xs">
            © 2024 Pemerintah Kota Balikpapan. PPID Utama. All rights reserved.
        </p>
</div>
</footer>
<!-- FAB for Info Request -->
<button class="fixed bottom-8 right-8 w-14 h-14 bg-secondary-container text-on-secondary-container rounded-full shadow-2xl flex items-center justify-center group hover:scale-110 transition-all z-50">
<span class="material-symbols-outlined text-2xl group-hover:rotate-12 transition-transform" data-weight="fill">add_comment</span>
<div class="absolute right-full mr-4 bg-white px-4 py-2 rounded-xl shadow-xl border border-outline-variant/10 whitespace-nowrap opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none">
<p class="text-sm font-bold text-primary">Butuh Informasi?</p>
</div>
</button>
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
// =====================
// NEWS PAGINATION SYSTEM
// =====================
var allNewsData = [
    // Page 1 cards - use existing DOM cards
    {page:1, useDOM: true},
    // Pages 2-12 - generated data
];

// All news items data (72 total = 12 pages x 6)
var newsItems = [
    {cat:'Pemerintahan', catColor:'bg-secondary', date:'07 APRIL 2026', img:'images/1.jpg', title:'Pemerintah Kota Balikpapan Raih Penghargaan Transparansi Publik 2024', desc:'BALIKPAPAN — Wakil Wali Kota Bagus Susetyo menyampaikan Laporan Keterangan Pertanggungjawaban (LKPj) Wali Kota Balikpapan Tahun Anggaran 2025 dalam Rapat Paripurna ke-2.', href:'http://ppidbalikpapan.test/insidenews'},
    {cat:'Layanan', catColor:'bg-tertiary-container', date:'12 MEI 2024', img:'https://lh3.googleusercontent.com/aida-public/AB6AXuCON1MnTytj9ujS8_J-v81rXKNMRNuqd78bSqIPlrG4c97t1eXZm-hLSn4UijawKvKCO62xXBDCKMs9yUGdaFfTrdfAX8LCPk120gMmcCs9d7Zpy_sseEdvASl9YC2vxKTziTINUVKgTA3YvFSGhdeVjIbcCqbKMDt479oKhxqzXI7WHddbe0wRVv-1Oe-2PmFMpqEEMSVPYhGOifupt-UBvwnhp2TY6e_64z0_JqKhzlRCm9jKwN_8xpvfmmbNj4fOCPYpnuxrvqiq', title:'Digitalisasi Puskesmas: Pendaftaran Online Kini Tersedia di Seluruh Kecamatan', desc:'Dinas Pendidikan mengumumkan pembukaan pendaftaran beasiswa bagi mahasiswa asal Balikpapan yang berprestasi di tingkat nasional dan internasional.', href:'http://ppidbalikpapan.test/insidenews'},
    {cat:'Ekonomi', catColor:'bg-primary', date:'10 MEI 2024', img:'https://lh3.googleusercontent.com/aida-public/AB6AXuD4ZjUvliKY0ZCuorwN-5toGXZ_QABJtnYZ2F5wFUDm9QIT2Gja9XLlxjkxP0X8rP1jaKp0tKPQeujsEI1KPSEnHe0y3CvmA02b_egw-AJrCuT5lE0p12J7XfhDYhwRygdscFlhBe7DX43xGrTFHHO4sPdzFb47UZuxbxfs4W_k3qQIutXANviY5X89m_pURTtmkJW_F-vJX27BRbDqbjHfUDkZ_FKiil3PDS143F-y-VBqi_qLBR1PFMAtALPD_sRF-n0_m1Q5aTME', title:'Penguatan UMKM Lokal Menuju Balikpapan sebagai Gerbang Ibu Kota Negara', desc:'Diskusi panel lintas sektoral membahas strategi penguatan ekonomi kerakyatan bagi pelaku usaha kecil menengah di tengah perkembangan IKN.', href:'http://ppidbalikpapan.test/insidenews'},
    {cat:'Infrastruktur', catColor:'bg-primary-container', date:'08 MEI 2024', img:'https://lh3.googleusercontent.com/aida-public/AB6AXuA0e-dZU4LdNm4R6_nJqnA8sU9HxhB8IERpfQILakKkJhYA3SFdUb-0KpVCzNOETa_IUQ9y3iB6n1LW0Vs0XcJFrOIiSWblS2j3YSU5_bOSW-P4gPEVS-4ZW9mKkCIXXMrncZjNI2Hx9JjHvgTlR7dLz8DiyI5kFY0RFqUGiHHovlkxCQlbL0JDJL97cBPkq1Vot_VCmf5YaJ41u3r5bZ7WTEuvKFlTRnmn-UH0HiP-dADgBrPJQbzORFEJB7D7K3rjGMFjG-O8', title:'Revitalisasi Kawasan Sudirman Capai 90 Persen, Target Selesai Akhir Tahun', desc:'Proyek perbaikan trotoar dan penambahan taman kota di pusat Balikpapan hampir selesai, menjanjikan kenyamanan lebih bagi pejalan kaki.', href:'http://ppidbalikpapan.test/insidenews'},
    {cat:'Pendidikan', catColor:'bg-secondary', date:'05 MEI 2024', img:'https://lh3.googleusercontent.com/aida-public/AB6AXuCt5KKGLhQ00fD-Han0ulVCVw5BjCWo3cE_YzkIO_N8_PBRJPVzLpI5_-P8SNbTspokfEJeCCATptyRK0kB3iBf9cVP284wk85TElszSTww7uh3LgbaTryLordHu_D0dGbOIDdfGo0GNIDKtbw06iLEo8hPc0ilPwBgcVsB5D3pwUK_zJ18gqNgOjHMcrRjnwvIN0mV7b7TS7PEiWu8CgtnFHhrak6dWFv_FAqllCHqYhzaBRZ4_KRYM3HhRr-bnZj04a8t5Lr3h9Ww', title:'Beasiswa Prestasi Balikpapan 2024 Resmi Dibuka, Simak Persyaratannya', desc:'Dinas Pendidikan mengumumkan pembukaan pendaftaran beasiswa bagi mahasiswa asal Balikpapan yang berprestasi di tingkat nasional dan internasional.', href:'http://ppidbalikpapan.test/insidenews'},
    {cat:'Smart City', catColor:'bg-primary', date:'01 MEI 2024', img:'https://lh3.googleusercontent.com/aida-public/AB6AXuD4ZjUvliKY0ZCuorwN-5toGXZ_QABJtnYZ2F5wFUDm9QIT2Gja9XLlxjkxP0X8rP1jaKp0tKPQeujsEI1KPSEnHe0y3CvmA02b_egw-AJrCuT5lE0p12J7XfhDYhwRygdscFlhBe7DX43xGrTFHHO4sPdzFb47UZuxbxfs4W_k3qQIutXANviY5X89m_pURTtmkJW_F-vJX27BRbDqbjHfUDkZ_FKiil3PDS143F-y-VBqi_qLBR1PFMAtALPD_sRF-n0_m1Q5aTME', title:'Optimalisasi CCTV Kota untuk Pemantauan Arus Lalu Lintas Real-Time', desc:'Dinas Perhubungan meningkatkan kapasitas server pemantauan untuk integrasi data lalu lintas yang lebih akurat melalui platform Balikpapan Single Window.', href:'http://ppidbalikpapan.test/insidenews'},
    // Duplicate with slight variation for pages 2-12
    {cat:'Pemerintahan', catColor:'bg-secondary', date:'15 APRIL 2026', img:'images/4.jpg', title:'Rapat Koordinasi PPID Se-Kalimantan Timur Digelar di Balikpapan', desc:'Pertemuan rutin PPID seluruh kabupaten/kota di Kaltim membahas standar pelayanan informasi publik yang lebih baik dan transparan.', href:'http://ppidbalikpapan.test/insidenews'},
    {cat:'Layanan', catColor:'bg-tertiary-container', date:'14 APRIL 2026', img:'https://lh3.googleusercontent.com/aida-public/AB6AXuCON1MnTytj9ujS8_J-v81rXKNMRNuqd78bSqIPlrG4c97t1eXZm-hLSn4UijawKvKCO62xXBDCKMs9yUGdaFfTrdfAX8LCPk120gMmcCs9d7Zpy_sseEdvASl9YC2vxKTziTINUVKgTA3YvFSGhdeVjIbcCqbKMDt479oKhxqzXI7WHddbe0wRVv-1Oe-2PmFMpqEEMSVPYhGOifupt-UBvwnhp2TY6e_64z0_JqKhzlRCm9jKwN_8xpvfmmbNj4fOCPYpnuxrvqiq', title:'Peluncuran Aplikasi PPID Mobile untuk Kemudahan Akses Informasi', desc:'Pemkot Balikpapan meluncurkan aplikasi mobile PPID yang memudahkan masyarakat mengakses informasi publik kapan saja dan di mana saja.', href:'http://ppidbalikpapan.test/insidenews'},
    {cat:'Ekonomi', catColor:'bg-primary', date:'13 APRIL 2026', img:'https://lh3.googleusercontent.com/aida-public/AB6AXuD4ZjUvliKY0ZCuorwN-5toGXZ_QABJtnYZ2F5wFUDm9QIT2Gja9XLlxjkxP0X8rP1jaKp0tKPQeujsEI1KPSEnHe0y3CvmA02b_egw-AJrCuT5lE0p12J7XfhDYhwRygdscFlhBe7DX43xGrTFHHO4sPdzFb47UZuxbxfs4W_k3qQIutXANviY5X89m_pURTtmkJW_F-vJX27BRdqbjHfUDkZ_FKiil3PDS143F-y-VBqi_qLBR1PFMAtALPD_sRF-n0_m1Q5aTME', title:'Festival UMKM Balikpapan 2026 Hadirkan 500 Pelaku Usaha Lokal', desc:'Event tahunan yang menampilkan produk-produk unggulan UMKM Balikpapan berhasil menarik ribuan pengunjung dari berbagai daerah.', href:'http://ppidbalikpapan.test/insidenews'},
    {cat:'Infrastruktur', catColor:'bg-primary-container', date:'12 APRIL 2026', img:'https://lh3.googleusercontent.com/aida-public/AB6AXuA0e-dZU4LdNm4R6_nJqnA8sU9HxhB8IERpfQILakKkJhYA3SFdUb-0KpVCzNOETa_IUQ9y3iB6n1LW0Vs0XcJFrOIiSWblS2j3YSU5_bOSW-P4gPEVS-4ZW9mKkCIXXMrncZjNI2Hx9JjHvgTlR7dLz8DiyI5kFY0RFqUGiHHovlkxCQlbL0JDJL97cBPkq1Vot_VCmf5YaJ41u3r5bZ7WTEuvKFlTRnmn-UH0HiP-dADgBrPJQbzORFEJB7D7K3rjGMFjG-O8', title:'Pembangunan Jalan Lingkar Selatan Balikpapan Dimulai Tahun Ini', desc:'Proyek infrastruktur senilai ratusan miliar rupiah ini diharapkan dapat mengurangi kemacetan di jalur utama kota Balikpapan.', href:'http://ppidbalikpapan.test/insidenews'},
    {cat:'Kesehatan', catColor:'bg-secondary', date:'11 APRIL 2026', img:'https://lh3.googleusercontent.com/aida-public/AB6AXuCON1MnTytj9ujS8_J-v81rXKNMRNuqd78bSqIPlrG4c97t1eXZm-hLSn4UijawKvKCO62xXBDCKMs9yUGdaFfTrdfAX8LCPk120gMmcCs9d7Zpy_sseEdvASl9YC2vxKTziTINUVKgTA3YvFSGhdeVjIbcCqbKMDt479oKhxqzXI7WHddbe0wRVv-1Oe-2PmFMpqEEMSVPYhGOifupt-UBvwnhp2TY6e_64z0_JqKhzlRCm9jKwN_8xpvfmmbNj4fOCPYpnuxrvqiq', title:'Program Vaksinasi Gratis untuk Lansia Dimulai di 10 Puskesmas', desc:'Dinas Kesehatan Balikpapan menggulirkan program vaksinasi gratis bagi warga lanjut usia sebagai bagian dari program kesehatan masyarakat 2026.', href:'http://ppidbalikpapan.test/insidenews'},
    {cat:'Lingkungan', catColor:'bg-tertiary-container', date:'10 APRIL 2026', img:'https://lh3.googleusercontent.com/aida-public/AB6AXuCt5KKGLhQ00fD-Han0ulVCVw5BjCWo3cE_YzkIO_N8_PBRJPVzLpI5_-P8SNbTspokfEJeCCATptyRK0kB3iBf9cVP284wk85TElszSTww7uh3LgbaTryLordHu_D0dGbOIDdfGo0GNIDKtbw06iLEo8hPc0ilPwBgcVsB5D3pwUK_zJ18gqNgOjHMcrRjnwvIN0mV7b7TS7PEiWu8CgtnFHhrak6dWFv_FAqllCHqYhzaBRZ4_KRYM3HhRr-bnZj04a8t5Lr3h9Ww', title:'Balikpapan Raih Penghargaan Kota Hijau Nasional 2026', desc:'Program penghijauan kota dan pengelolaan sampah yang baik membuat Balikpapan kembali meraih penghargaan bergengsi di tingkat nasional.', href:'http://ppidbalikpapan.test/insidenews'},
];

// Fill remaining pages with repeated data
while(newsItems.length < 72) {
    var idx = newsItems.length % 12;
    var item = Object.assign({}, newsItems[idx]);
    newsItems.push(item);
}

var ITEMS_PER_PAGE = 6;
var TOTAL_PAGES = 12;
var currentPage = 1;

function renderCards(page) {
    var grid = document.getElementById('news-grid');
    var start = (page - 1) * ITEMS_PER_PAGE;
    var items = newsItems.slice(start, start + ITEMS_PER_PAGE);
    
    grid.innerHTML = items.map(function(item) {
        return '<article class="group bg-surface-container-lowest rounded-2xl overflow-hidden hover:shadow-2xl transition-all duration-300 flex flex-col">' +
            '<div class="relative overflow-hidden aspect-video">' +
            '<img alt="' + item.cat + '" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="' + item.img + '"/>' +
            '<div class="absolute top-4 left-4"><span class="px-3 py-1 ' + item.catColor + ' text-white text-[10px] font-bold uppercase tracking-widest rounded-full">' + item.cat + '</span></div>' +
            '</div>' +
            '<div class="p-6 flex flex-col flex-grow">' +
            '<time class="text-xs font-semibold text-outline mb-3 uppercase tracking-tighter">' + item.date + '</time>' +
            '<h3 class="text-xl font-headline font-bold text-on-surface leading-snug group-hover:text-primary transition-colors mb-3">' + item.title + '</h3>' +
            '<p class="text-on-surface-variant text-sm line-clamp-3 mb-6">' + item.desc + '</p>' +
            '<div class="mt-auto flex items-center justify-between">' +
            '<a class="text-primary font-bold text-sm flex items-center gap-2 group/btn" href="' + item.href + '">' +
            'Selengkapnya <span class="material-symbols-outlined text-sm group-hover/btn:translate-x-1 transition-transform">arrow_forward</span></a>' +
            '</div></div></article>';
    }).join('');
}

function renderPagination(page) {
    var container = document.getElementById('pagination-container');
    var btnBase = 'w-10 h-10 flex items-center justify-center rounded-lg font-bold transition-colors cursor-pointer ';
    var btnActive = btnBase + 'bg-primary text-white';
    var btnNormal = btnBase + 'bg-surface-container text-on-surface hover:bg-surface-container-high';
    var btnNav = btnBase + 'bg-surface-container text-outline hover:bg-primary hover:text-white';

    var html = '<button class="' + btnNav + '" onclick="goPage(' + (page-1) + ')"><span class="material-symbols-outlined">chevron_left</span></button>';
    
    // Show pages: 1, ..., prev, current, next, ..., 12
    var pages = [];
    pages.push(1);
    if(page > 3) pages.push('...');
    for(var i = Math.max(2, page-1); i <= Math.min(TOTAL_PAGES-1, page+1); i++) pages.push(i);
    if(page < TOTAL_PAGES - 2) pages.push('...');
    if(TOTAL_PAGES > 1) pages.push(TOTAL_PAGES);

    pages.forEach(function(p) {
        if(p === '...') {
            html += '<span class="px-2 text-outline">...</span>';
        } else {
            html += '<button class="' + (p === page ? btnActive : btnNormal) + '" onclick="goPage(' + p + ')">' + p + '</button>';
        }
    });

    html += '<button class="' + btnNav + '" onclick="goPage(' + (page+1) + ')"><span class="material-symbols-outlined">chevron_right</span></button>';
    container.innerHTML = html;
}

function goPage(page) {
    if(page < 1 || page > TOTAL_PAGES) return;
    currentPage = page;
    renderCards(page);
    renderPagination(page);
    window.scrollTo({top: document.getElementById('news-grid').offsetTop - 100, behavior: 'smooth'});
}

// Init
renderCards(1);
renderPagination(1);
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
// Position mega menu below nav bar
document.addEventListener('DOMContentLoaded', function() {
    var megaMenu = document.getElementById('mega-infopub');
    var nav = document.getElementById('desktop-nav');
    if (megaMenu && nav) {
        var rect = nav.getBoundingClientRect();
        megaMenu.style.top = (rect.bottom) + 'px';
    }
    window.addEventListener('scroll', function() {
        var nav = document.getElementById('desktop-nav');
        if (megaMenu && nav) {
            var rect = nav.getBoundingClientRect();
            megaMenu.style.top = (rect.bottom) + 'px';
        }
    });
});
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