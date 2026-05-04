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
            background-image: linear-gradient(rgba(240, 240, 240, 0.9), rgba(240, 240, 240, 0.9)), url("/batik%20dayak.png");
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
     <img src="/logo_ppid%20bg%20removed.png" alt="logo" class="h-full w-auto"></a>
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
<div class="dropdown-menu bg-slate-100 min-w-[125px] shadow-xl py-2 rounded-b-lg border border-white/10 font-headline">
<a class="block px-4 py-2 hover:bg-slate-200 text-[11px] text-slate-600 transition-colors" href="https://data.balikpapan.go.id/organization">Badan</a>
<a class="block px-4 py-2 hover:bg-slate-200 text-[11px] text-slate-600 transition-colors" href="https://data.balikpapan.go.id/organization">Dinas</a>
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

<main class="pt-10 md:pt-28 pb-20 min-h-screen">
    <div class="max-w-4xl mx-auto px-6">
        <div class="mb-12">
            <div class="inline-block px-4 py-1.5 bg-secondary-container text-on-secondary-container rounded-full text-xs font-bold tracking-widest uppercase mb-4">Layanan Publik</div>
            <h1 class="text-3xl md:text-5xl font-extrabold text-primary tracking-tight leading-tight mb-4">Permohonan Informasi Publik</h1>
            <p class="text-sm md:text-lg text-on-surface-variant max-w-2xl leading-relaxed">Sampaikan permohonan informasi Anda melalui formulir resmi PPID Kota Balikpapan sesuai dengan UU No. 14 Tahun 2008.</p>
        </div>

        <form class="space-y-8">
            <section class="form-card bg-surface-container-lowest p-6 md:p-8 rounded-xl shadow-[0_32px_32px_-4px_rgba(25,28,29,0.06)]">
                <div class="flex items-center gap-3 mb-8">
                    <div class="w-10 h-10 rounded-full bg-primary flex items-center justify-center text-on-primary font-bold">I</div>
                    <h2 class="text-lg md:text-xl font-bold text-primary uppercase">Data Pemohon Informasi</h2>
                </div>
                <div class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-3 items-center gap-2 md:gap-4">
                        <label class="text-sm font-bold text-primary">Jenis Pemohon</label>
                        <div class="md:col-span-2">
                            <div class="relative w-full group">
                                <button class="w-full flex justify-between items-center bg-surface-container-high border-none rounded-lg px-4 py-3 focus:ring-2 focus:ring-primary text-left text-sm" onclick="this.nextElementSibling.classList.toggle('show'); this.querySelector('.arrow').classList.toggle('rotate-180')" type="button">
                                    <span class="selected-text">-- pilih --</span>
                                    <span class="material-symbols-outlined arrow transition-transform">expand_more</span>
                                </button>
                                <div class="dropdown-content absolute left-0 right-0 top-full mt-1 bg-white border border-outline-variant rounded-lg shadow-xl z-10 overflow-hidden hidden [&.show]:block">
                                    <div class="px-4 py-3 text-sm hover:bg-primary hover:text-white cursor-pointer transition-colors" onclick="let container=this.closest('.relative'); container.querySelector('.selected-text').innerText=this.innerText; container.querySelector('.dropdown-content').classList.remove('show'); container.querySelector('.arrow').classList.remove('rotate-180')">-- pilih --</div>
                                    <div class="px-4 py-3 text-sm hover:bg-primary hover:text-white cursor-pointer transition-colors" onclick="let container=this.closest('.relative'); container.querySelector('.selected-text').innerText=this.innerText; container.querySelector('.dropdown-content').classList.remove('show'); container.querySelector('.arrow').classList.remove('rotate-180')">Perorangan</div>
                                    <div class="px-4 py-3 text-sm hover:bg-primary hover:text-white cursor-pointer transition-colors" onclick="let container=this.closest('.relative'); container.querySelector('.selected-text').innerText=this.innerText; container.querySelector('.dropdown-content').classList.remove('show'); container.querySelector('.arrow').classList.remove('rotate-180')">Kelompok Orang</div>
                                    <div class="px-4 py-3 text-sm hover:bg-primary hover:text-white cursor-pointer transition-colors" onclick="let container=this.closest('.relative'); container.querySelector('.selected-text').innerText=this.innerText; container.querySelector('.dropdown-content').classList.remove('show'); container.querySelector('.arrow').classList.remove('rotate-180')">Badan Hukum</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 items-center gap-2 md:gap-4">
                        <label class="text-sm font-bold text-primary">Jenis Identitas</label>
                        <div class="md:col-span-2">
                            <div class="relative w-full group">
                                <button class="w-full flex justify-between items-center bg-surface-container-high border-none rounded-lg px-4 py-3 focus:ring-2 focus:ring-primary text-left text-sm" onclick="this.nextElementSibling.classList.toggle('show'); this.querySelector('.arrow').classList.toggle('rotate-180')" type="button">
                                    <span class="selected-text">-- pilih --</span>
                                    <span class="material-symbols-outlined arrow transition-transform">expand_more</span>
                                </button>
                                <div class="dropdown-content absolute left-0 right-0 top-full mt-1 bg-white border border-outline-variant rounded-lg shadow-xl z-10 overflow-hidden hidden [&.show]:block">
                                    <div class="px-4 py-3 text-sm hover:bg-primary hover:text-white cursor-pointer transition-colors" onclick="let container=this.closest('.relative'); container.querySelector('.selected-text').innerText=this.innerText; container.querySelector('.dropdown-content').classList.remove('show'); container.querySelector('.arrow').classList.remove('rotate-180')">-- pilih --</div>
                                    <div class="px-4 py-3 text-sm hover:bg-primary hover:text-white cursor-pointer transition-colors" onclick="let container=this.closest('.relative'); container.querySelector('.selected-text').innerText=this.innerText; container.querySelector('.dropdown-content').classList.remove('show'); container.querySelector('.arrow').classList.remove('rotate-180')">KTP</div>
                                    <div class="px-4 py-3 text-sm hover:bg-primary hover:text-white cursor-pointer transition-colors" onclick="let container=this.closest('.relative'); container.querySelector('.selected-text').innerText=this.innerText; container.querySelector('.dropdown-content').classList.remove('show'); container.querySelector('.arrow').classList.remove('rotate-180')">Anggaran Dasar yang disahkan oleh Pejabat</div>
                                    <div class="px-4 py-3 text-sm hover:bg-primary hover:text-white cursor-pointer transition-colors" onclick="let container=this.closest('.relative'); container.querySelector('.selected-text').innerText=this.innerText; container.querySelector('.dropdown-content').classList.remove('show'); container.querySelector('.arrow').classList.remove('rotate-180')">Surat Kuasa</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 items-center gap-2 md:gap-4">
                        <label class="text-sm font-bold text-primary">No. Identitas</label>
                        <div class="md:col-span-2">
                            <input class="w-full bg-surface-container-high border-none rounded-lg px-4 py-3 focus:ring-2 focus:ring-primary text-sm" type="text"/>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 items-center gap-2 md:gap-4">
                        <label class="text-sm font-bold text-primary">Nama Lengkap</label>
                        <div class="md:col-span-2">
                            <input class="w-full bg-surface-container-high border-none rounded-lg px-4 py-3 focus:ring-2 focus:ring-primary text-sm" type="text"/>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 items-start gap-2 md:gap-4">
                        <label class="text-sm font-bold text-primary mt-2 md:mt-3">Alamat</label>
                        <div class="md:col-span-2">
                            <textarea class="w-full bg-surface-container-high border-none rounded-lg px-4 py-3 focus:ring-2 focus:ring-primary text-sm" rows="3"></textarea>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 items-start gap-2 md:gap-4">
                        <label class="text-sm font-bold text-primary mt-2 md:mt-3">Email</label>
                        <div class="md:col-span-2">
                            <input class="w-full bg-surface-container-high border-none rounded-lg px-4 py-3 focus:ring-2 focus:ring-primary mb-1 text-sm" type="email"/>
                            <p class="text-xs text-on-surface-variant font-medium italic">* email harus aktif</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 items-center gap-2 md:gap-4">
                        <label class="text-sm font-bold text-primary">No. Telp</label>
                        <div class="md:col-span-2">
                            <input class="w-full bg-surface-container-high border-none rounded-lg px-4 py-3 focus:ring-2 focus:ring-primary text-sm" type="tel"/>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 items-start gap-2 md:gap-4">
                        <label class="text-sm font-bold text-primary mt-2 md:mt-3">Informasi Yang Dibutuhkan</label>
                        <div class="md:col-span-2">
                            <textarea class="w-full bg-surface-container-high border-none rounded-lg px-4 py-3 focus:ring-2 focus:ring-primary text-sm" placeholder="Jelaskan secara spesifik informasi yang Anda minta..." rows="4"></textarea>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 items-start gap-2 md:gap-4">
                        <label class="text-sm font-bold text-primary mt-2 md:mt-3">Alasan Permintaan Informasi</label>
                        <div class="md:col-span-2">
                            <textarea class="w-full bg-surface-container-high border-none rounded-lg px-4 py-3 focus:ring-2 focus:ring-primary text-sm" placeholder="Jelaskan alasan permintaan informasi..." rows="4"></textarea>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 items-center gap-2 md:gap-4">
                        <label class="text-sm font-bold text-primary">Lampiran Identitas</label>
                        <div class="md:col-span-2">
                            <input class="w-full bg-surface-container-high border-none rounded-lg px-4 py-3 focus:ring-2 focus:ring-primary text-sm file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-bold file:bg-primary file:text-white hover:file:bg-primary/90" type="file" accept=".jpg,.jpeg,.png,.pdf"/>
                            <p class="text-xs text-on-surface-variant mt-1 italic">Format: JPG, PNG, PDF (Maks. 2MB)</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="form-card bg-surface-container-lowest p-6 md:p-8 rounded-xl shadow-[0_32px_32px_-4px_rgba(25,28,29,0.06)]">
                <div class="flex items-center gap-3 mb-8">
                    <div class="w-10 h-10 rounded-full bg-primary flex items-center justify-center text-on-primary font-bold">II</div>
                    <h2 class="text-lg md:text-xl font-bold text-primary uppercase">Data Pengguna Informasi</h2>
                </div>
                <div class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-3 items-center gap-2 md:gap-4">
                        <label class="text-sm font-bold text-primary">Data Pengguna</label>
                        <div class="md:col-span-2">
                            <div class="relative w-full group">
                                <button class="w-full flex justify-between items-center bg-surface-container-high border-none rounded-lg px-4 py-3 focus:ring-2 focus:ring-primary text-left text-sm" onclick="this.nextElementSibling.classList.toggle('show'); this.querySelector('.arrow').classList.toggle('rotate-180')" type="button">
                                    <span class="selected-text">-- pilih --</span>
                                    <span class="material-symbols-outlined arrow transition-transform">expand_more</span>
                                </button>
                                <div class="dropdown-content absolute left-0 right-0 top-full mt-1 bg-white border border-outline-variant rounded-lg shadow-xl z-10 overflow-hidden hidden [&.show]:block">
                                    <div class="px-4 py-3 text-sm hover:bg-primary hover:text-white cursor-pointer transition-colors" onclick="let c=this.closest('.relative');c.querySelector('.selected-text').innerText=this.innerText;c.querySelector('.dropdown-content').classList.remove('show');c.querySelector('.arrow').classList.remove('rotate-180')">-- pilih --</div>
                                    <div class="px-4 py-3 text-sm hover:bg-primary hover:text-white cursor-pointer transition-colors" onclick="let c=this.closest('.relative');c.querySelector('.selected-text').innerText=this.innerText;c.querySelector('.dropdown-content').classList.remove('show');c.querySelector('.arrow').classList.remove('rotate-180')">Sama dengan data pemohon</div>
                                    <div class="px-4 py-3 text-sm hover:bg-primary hover:text-white cursor-pointer transition-colors" onclick="let c=this.closest('.relative');c.querySelector('.selected-text').innerText=this.innerText;c.querySelector('.dropdown-content').classList.remove('show');c.querySelector('.arrow').classList.remove('rotate-180')">Berbeda dengan data pemohon</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 items-center gap-2 md:gap-4">
                        <label class="text-sm font-bold text-primary">Nama Lengkap</label>
                        <div class="md:col-span-2">
                            <input class="w-full bg-surface-container-high border-none rounded-lg px-4 py-3 focus:ring-2 focus:ring-primary text-sm" type="text"/>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 items-center gap-2 md:gap-4">
                        <label class="text-sm font-bold text-primary">No. KTP</label>
                        <div class="md:col-span-2">
                            <input class="w-full bg-surface-container-high border-none rounded-lg px-4 py-3 focus:ring-2 focus:ring-primary text-sm" type="text" maxlength="16"/>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 items-start gap-2 md:gap-4">
                        <label class="text-sm font-bold text-primary mt-2 md:mt-3">Alamat</label>
                        <div class="md:col-span-2">
                            <textarea class="w-full bg-surface-container-high border-none rounded-lg px-4 py-3 focus:ring-2 focus:ring-primary text-sm" rows="3"></textarea>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 items-center gap-2 md:gap-4">
                        <label class="text-sm font-bold text-primary">No. Telp</label>
                        <div class="md:col-span-2">
                            <input class="w-full bg-surface-container-high border-none rounded-lg px-4 py-3 focus:ring-2 focus:ring-primary text-sm" type="tel"/>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 items-start gap-2 md:gap-4">
                        <label class="text-sm font-bold text-primary mt-2 md:mt-3">Email</label>
                        <div class="md:col-span-2">
                            <input class="w-full bg-surface-container-high border-none rounded-lg px-4 py-3 focus:ring-2 focus:ring-primary mb-1 text-sm" type="email"/>
                            <p class="text-xs text-on-surface-variant font-medium italic">* email harus aktif</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 items-start gap-2 md:gap-4">
                        <label class="text-sm font-bold text-primary mt-2 md:mt-3">Alasan Penggunaan</label>
                        <div class="md:col-span-2">
                            <textarea class="w-full bg-surface-container-high border-none rounded-lg px-4 py-3 focus:ring-2 focus:ring-primary text-sm" placeholder="Jelaskan tujuan penggunaan informasi..." rows="4"></textarea>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 items-center gap-2 md:gap-4">
                        <label class="text-sm font-bold text-primary">Cara Memperoleh</label>
                        <div class="md:col-span-2">
                            <div class="relative w-full group">
                                <button class="w-full flex justify-between items-center bg-surface-container-high border-none rounded-lg px-4 py-3 focus:ring-2 focus:ring-primary text-left text-sm" onclick="this.nextElementSibling.classList.toggle('show'); this.querySelector('.arrow').classList.toggle('rotate-180')" type="button">
                                    <span class="selected-text">-- pilih --</span>
                                    <span class="material-symbols-outlined arrow transition-transform">expand_more</span>
                                </button>
                                <div class="dropdown-content absolute left-0 right-0 top-full mt-1 bg-white border border-outline-variant rounded-lg shadow-xl z-10 overflow-hidden hidden [&.show]:block">
                                    <div class="px-4 py-3 text-sm hover:bg-primary hover:text-white cursor-pointer transition-colors" onclick="let c=this.closest('.relative');c.querySelector('.selected-text').innerText=this.innerText;c.querySelector('.dropdown-content').classList.remove('show');c.querySelector('.arrow').classList.remove('rotate-180')">-- pilih --</div>
                                    <div class="px-4 py-3 text-sm hover:bg-primary hover:text-white cursor-pointer transition-colors" onclick="let c=this.closest('.relative');c.querySelector('.selected-text').innerText=this.innerText;c.querySelector('.dropdown-content').classList.remove('show');c.querySelector('.arrow').classList.remove('rotate-180')">Langsung</div>
                                    <div class="px-4 py-3 text-sm hover:bg-primary hover:text-white cursor-pointer transition-colors" onclick="let c=this.closest('.relative');c.querySelector('.selected-text').innerText=this.innerText;c.querySelector('.dropdown-content').classList.remove('show');c.querySelector('.arrow').classList.remove('rotate-180')">Website</div>
                                    <div class="px-4 py-3 text-sm hover:bg-primary hover:text-white cursor-pointer transition-colors" onclick="let c=this.closest('.relative');c.querySelector('.selected-text').innerText=this.innerText;c.querySelector('.dropdown-content').classList.remove('show');c.querySelector('.arrow').classList.remove('rotate-180')">Email</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <button class="w-full md:w-auto px-12 py-4 bg-primary text-on-primary rounded-xl font-extrabold text-lg shadow-lg hover:shadow-xl hover:translate-y-[-2px] transition-all flex items-center justify-center gap-3" type="submit">
                Kirim Permohonan
                <span class="material-symbols-outlined">send</span>
            </button>
        </form>
    </div>
</main>

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
    © {{ date('Y') }} Pemerintah Kota Balikpapan. PPID Utama. All rights reserved.
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

    // Mobile accordion logic
    function toggleMobileAccordion(id) {
        var el = document.getElementById(id);
        var icon = document.getElementById('icon-' + id);
        var isHidden = el.classList.contains('hidden');
        
        // Hide all accordions
        ['acc-profil','acc-infopub','acc-layanan','acc-ppid'].forEach(function(acc) {
            var a = document.getElementById(acc);
            if (a) { a.classList.add('hidden'); a.classList.remove('flex'); }
            var ic = document.getElementById('icon-' + acc);
            if (ic) ic.style.transform = '';
        });
        
        // Open target accordion if it was hidden
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