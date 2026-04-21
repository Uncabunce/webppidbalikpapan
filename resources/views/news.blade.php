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
            overflow-x: hidden;
            max-width: 100vw;
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
            max-width: 100vw;
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
        .carousel-slide {
            flex: 0 0 100vw;
            width: 100vw;
            max-width: 100vw;
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
<div class="max-w-7xl mx-auto flex h-full items-center justify-start md:justify-center space-x-1 px-2 md:px-4 whitespace-nowrap">
<a class="nav-hover-line relative px-3 py-3 text-xs font-bold font-headline transition-all text-white" href="http://ppidbalikpapan.test">Beranda</a>
<div class="group relative h-full flex items-center">
<button class="nav-hover-line relative px-3 py-3 text-xs font-bold font-headline flex items-center gap-0.5">
                    Profil <span class="material-symbols-outlined text-[10px] group-hover:rotate-180 transition-transform">expand_more</span>
</button>
<div class="dropdown-menu bg-slate-900 min-w-[200px] shadow-xl py-2 rounded-b-lg border border-white/10 font-headline">
<a class="block px-4 py-2 hover:bg-slate-800 text-[11px] transition-colors" href="#">Visi &amp; Misi</a>
<a class="block px-4 py-2 hover:bg-slate-800 text-[11px] transition-colors" href="#">Struktur Organisasi</a>
<a class="block px-4 py-2 hover:bg-slate-800 text-[11px] transition-colors" href="#">Tugas &amp; Fungsi</a>
</div>
</div>
<div class="group relative h-full flex items-center">
<button class="nav-hover-line relative px-3 py-3 text-xs font-bold font-headline flex items-center gap-0.5">
                    Informasi Publik <span class="material-symbols-outlined text-[10px] group-hover:rotate-180 transition-transform">expand_more</span>
</button>
<div class="dropdown-menu bg-slate-900 min-w-[150px] shadow-xl py-2 rounded-b-lg border border-white/10 font-headline">
<a class="block px-4 py-2 hover:bg-slate-800 text-[11px] transition-colors" href="#">Informasi Berkala</a>
<a class="block px-4 py-2 hover:bg-slate-800 text-[11px] transition-colors" href="#">Informasi Serta Merta</a>
<a class="block px-4 py-2 hover:bg-slate-800 text-[11px] transition-colors" href="#">Informasi Setiap Saat</a>
<a class="block px-4 py-2 hover:bg-slate-800 text-[11px] transition-colors" href="#">Daftar Informasi Publik</a>
</div>
</div>
<div class="group relative h-full flex items-center">
<button class="nav-hover-line relative px-3 py-3 text-xs font-bold font-headline flex items-center gap-0.5">
                    Layanan Informasi <span class="material-symbols-outlined text-[10px] group-hover:rotate-180 transition-transform">expand_more</span>
</button>
<div class="dropdown-menu bg-slate-900 min-w-[150px] shadow-xl py-2 rounded-b-lg border border-white/10 font-headline">
<a class="block px-4 py-2 hover:bg-slate-800 text-[11px] transition-colors" href="#">Prosedur Permohonan</a>
<a class="block px-4 py-2 hover:bg-slate-800 text-[11px] transition-colors" href="#">Prosedur Keberatan</a>
<a class="block px-4 py-2 hover:bg-slate-800 text-[11px] transition-colors" href="#">SOP Layanan PPID</a>
<a class="block px-4 py-2 hover:bg-slate-800 text-[11px] transition-colors" href="#">Biaya Layanan</a>
</div>
</div>
<a class="nav-hover-line relative px-3 py-3 text-xs font-bold font-headline" href="http://ppidbalikpapan.test/news">Berita
</a>
<a class="nav-hover-line relative px-3 py-3 text-xs font-bold font-headline" href="http://ppidbalikpapan.test/stats">Data Statistik</a>
<div class="group relative h-full flex items-center">
<button class="nav-hover-line relative px-3 py-3 text-xs font-bold font-headline flex items-center gap-0.5">
                    PPID Pelaksana <span class="material-symbols-outlined text-[10px] group-hover:rotate-180 transition-transform">expand_more</span>
</button>
<div class="dropdown-menu bg-slate-900 min-w-[125px] shadow-xl py-2 rounded-b-lg border border-white/10 font-headline">
<a class="block px-4 py-2 hover:bg-slate-800 text-[11px] transition-colors" href="#">Badan</a>
<a class="block px-4 py-2 hover:bg-slate-800 text-[11px] transition-colors" href="#">Dinas</a>
</div>
</div>
<a class="nav-hover-line relative px-3 py-3 text-xs font-bold font-headline" href="http://ppidbalikpapan.test/kontak">Kontak</a>
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
<a href="#" class="block px-5 py-2.5 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Visi &amp; Misi</a>
<a href="#" class="block px-5 py-2.5 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Struktur Organisasi</a>
<a href="#" class="block px-5 py-2.5 text-xs text-slate-300 hover:text-secondary-container">Tugas &amp; Fungsi</a>
</div>
</div>
<div class="border-b border-white/10">
<button onclick="toggleMobileAccordion('acc-infopub')" class="w-full flex items-center justify-between px-3 py-3.5 text-sm font-bold text-white">
<span class="flex items-center gap-3"><span class="material-symbols-outlined text-base">folder_open</span> Informasi Publik</span>
<span class="material-symbols-outlined text-base transition-transform duration-300" id="icon-acc-infopub">expand_more</span>
</button>
<div id="acc-infopub" class="hidden flex-col bg-white/5 rounded-lg mx-2 mb-2 overflow-hidden">
<a href="#" class="block px-5 py-2.5 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Informasi Berkala</a>
<a href="#" class="block px-5 py-2.5 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Informasi Serta Merta</a>
<a href="#" class="block px-5 py-2.5 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Informasi Setiap Saat</a>
<a href="#" class="block px-5 py-2.5 text-xs text-slate-300 hover:text-secondary-container">Daftar Informasi Publik</a>
</div>
</div>
<div class="border-b border-white/10">
<button onclick="toggleMobileAccordion('acc-layanan')" class="w-full flex items-center justify-between px-3 py-3.5 text-sm font-bold text-white">
<span class="flex items-center gap-3"><span class="material-symbols-outlined text-base">support_agent</span> Layanan Informasi</span>
<span class="material-symbols-outlined text-base transition-transform duration-300" id="icon-acc-layanan">expand_more</span>
</button>
<div id="acc-layanan" class="hidden flex-col bg-white/5 rounded-lg mx-2 mb-2 overflow-hidden">
<a href="#" class="block px-5 py-2.5 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Prosedur Permohonan</a>
<a href="#" class="block px-5 py-2.5 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Prosedur Keberatan</a>
<a href="#" class="block px-5 py-2.5 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">SOP Layanan PPID</a>
<a href="#" class="block px-5 py-2.5 text-xs text-slate-300 hover:text-secondary-container">Biaya Layanan</a>
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
<li><a class="text-slate-500 dark:text-slate-400 hover:text-blue-700 dark:hover:text-blue-300 underline-offset-4 hover:underline ease-in-out duration-200 text-xs md:text-sm" href="#">Whistleblower System</a></li>
<li><a class="text-slate-500 dark:text-slate-400 hover:text-blue-700 dark:hover:text-blue-300 underline-offset-4 hover:underline ease-in-out duration-200 text-xs md:text-sm" href="#">Lapor!</a></li>
<li><a class="text-slate-500 dark:text-slate-400 hover:text-blue-700 dark:hover:text-blue-300 underline-offset-4 hover:underline ease-in-out duration-200 text-xs md:text-sm" href="#">Data Terbuka</a></li>
<li><a class="text-slate-500 dark:text-slate-400 hover:text-blue-700 dark:hover:text-blue-300 underline-offset-4 hover:underline ease-in-out duration-200 text-xs md:text-sm text-amber-600 dark:text-amber-400 font-semibold" href="#">Kebijakan Privasi</a></li>
</ul>
</div>
</div>
<div class="max-w-7xl mx-auto px-4 md:px-6 mt-16 pt-8 border-t border-slate-200 dark:border-slate-800 text-center">
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
</body></html>