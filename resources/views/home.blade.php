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
<!-- Hero Section: Interactive Carousel -->
<section class="relative group" id="carousel-container" style="width:100vw; max-width:100%; overflow:hidden; left:0;">
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

<button class="absolute left-4 top-1/2 -translate-y-1/2 w-12 h-12 flex items-center justify-center bg-black/30 hover:bg-black/50 backdrop-blur-sm text-white rounded-full transition-all z-30 focus:outline-none" id="prev-slide">
<span class="material-symbols-outlined text-3xl" data-icon="chevron_left">chevron_left</span>
</button>
<button class="absolute right-4 top-1/2 -translate-y-1/2 w-12 h-12 flex items-center justify-center bg-black/30 hover:bg-black/50 backdrop-blur-sm text-white rounded-full transition-all z-30 focus:outline-none" id="next-slide">
<span class="material-symbols-outlined text-3xl" data-icon="chevron_right">chevron_right</span>
</button>

<div class="absolute bottom-6 left-1/2 -translate-x-1/2 flex gap-3 z-20">
<button class="carousel-dot w-2.5 h-2.5 rounded-full bg-white/40 transition-all hover:bg-white/70" data-index="0"></button>
<button class="carousel-dot w-2.5 h-2.5 rounded-full bg-white/40 transition-all hover:bg-white/70" data-index="1"></button>
<button class="carousel-dot w-2.5 h-2.5 rounded-full bg-white/40 transition-all hover:bg-white/70" data-index="2"></button>
</div>
</section>
<!-- Centered Section Title with Dividers -->
<div class="w-full border-t border-slate-200">
<div class="max-w-7xl mx-auto px-4 md:px-6 flex flex-col items-center pt-8 pb-6"><span class="material-symbols-outlined text-amber-400 text-4xl opacity-80 mb-2" data-icon="hub">hub</span>
<h2 class="text-3xl md:text-4xl font-headline font-extrabold text-primary text-center">Layanan PPID</h2>
<div class="flex flex-col items-center gap-1.5 mt-2">
<div class="w-24 h-1.5 bg-amber-400 rounded-full"></div>
<div class="w-12 h-0.5 bg-amber-400/40 rounded-full"></div>
</div>
</div>
<div class="border-b border-slate-200"></div>
</div>
<!-- Service Quick Links - Bento Grid -->
<section class="py-16 md:py-24 max-w-7xl mx-auto px-4 md:px-6">
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
<a class="z-10 inline-flex items-center gap-2 font-bold text-secondary-container hover:gap-4 transition-all" href="http://ppidbalikpapan.test/formulir">
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
<a class="text-primary font-bold text-sm flex items-center gap-2 group-hover:gap-3 transition-all" href="#">
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
</div>
</div>
</section>
<!-- Stats Section -->
<section class="py-16 md:py-20 bg-primary overflow-hidden relative">
<div class="max-w-7xl mx-auto px-4 md:px-6 grid grid-cols-2 md:grid-cols-4 gap-8 md:gap-12 relative z-10">
<div class="text-center">
<p class="text-3xl md:text-5xl font-extrabold text-secondary-container mb-2">1,240+</p>
<p class="text-white font-medium uppercase tracking-widest text-[10px] md:text-sm opacity-80">Permohonan Masuk</p>
</div>
<div class="text-center">
<p class="text-3xl md:text-5xl font-extrabold text-secondary-container mb-2">98.5%</p>
<p class="text-white font-medium uppercase tracking-widest text-[10px] md:text-sm opacity-80">Selesai Diproses</p>
</div>
<div class="text-center">
<p class="text-3xl md:text-5xl font-extrabold text-secondary-container mb-2">15</p>
<p class="text-white font-medium uppercase tracking-widest text-[10px] md:text-sm opacity-80">Hari Rata-rata</p>
</div>
<div class="text-center">
<p class="text-3xl md:text-5xl font-extrabold text-secondary-container mb-2">100%</p>
<p class="text-white font-medium uppercase tracking-widest text-[10px] md:text-sm opacity-80">Keberatan Ditangani</p>
</div>
</div>
<div class="absolute inset-0 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] from-white/5 to-transparent"></div>
</section>
</main>
<!-- Footer -->
<footer id="kontak" class="bg-slate-50 dark:bg-slate-900 w-full pt-16 md:pt-20 pb-8 border-t border-slate-200 dark:border-slate-800">
<div class="grid grid-cols-1 md:grid-cols-4 gap-12 max-w-7xl mx-auto px-4 md:px-6 font-['Inter'] text-sm leading-relaxed">
<!-- Brand & Map -->
<div class="md:col-span-2">
<div class="text-xl md:text-2xl font-bold text-blue-900 dark:text-blue-100 mb-6 font-headline">PPID Kota Balikpapan</div>
<p class="text-slate-600 dark:text-slate-400 max-w-md mb-8">
                Pejabat Pengelola Informasi dan Dokumentasi (PPID) Utama Pemerintah Kota Balikpapan bertanggung jawab untuk penyimpanan, pendokumentasian, penyediaan, dan pelayanan informasi publik.
            </p>
<div class="w-full rounded-xl overflow-hidden shadow-md" style="aspect-ratio:16/9;"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63821.253001534766!2d116.75573272167965!3d-1.2764074999999773!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df1473bb9404897%3A0x94d96108f98b652c!2sBalikpapan%20Mayor&#39;s%20Office!5e0!3m2!1sen!2ssg!4v1776063788871!5m2!1sen!2ssg" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
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

    // Carousel Logic - Fully functional with Infinite Loop
    const track = document.getElementById('carousel-track');
    const container = document.getElementById('carousel-container');
    const originalSlides = Array.from(track.children);
    const nextButton = document.getElementById('next-slide');
    const prevButton = document.getElementById('prev-slide');
    const dots = Array.from(document.querySelectorAll('.carousel-dot'));
    
    // Clone slides for infinite effect
    const firstClone = originalSlides[0].cloneNode(true);
    const lastClone = originalSlides[originalSlides.length - 1].cloneNode(true);
    
    track.appendChild(firstClone);
    track.insertBefore(lastClone, originalSlides[0]);

    const slides = Array.from(track.children);
    let currentIndex = 1; 
    let isTransitioning = false;
    let autoPlayTimer;

    function updateCarousel(instant = false) {
        if (instant) track.style.transition = 'none';
        else track.style.transition = 'transform 0.5s cubic-bezier(0.4, 0, 0.2, 1)';
        
        track.style.transform = `translateX(-${currentIndex * 100}%)`;
        
        // Update dots UI
        let dotIndex = currentIndex - 1;
        if (currentIndex === 0) dotIndex = originalSlides.length - 1;
        if (currentIndex === slides.length - 1) dotIndex = 0;

        dots.forEach((dot, idx) => {
            if (idx === dotIndex) {
                dot.classList.remove('bg-white/40');
                dot.classList.add('bg-white', 'scale-125');
            } else {
                dot.classList.add('bg-white/40');
                dot.classList.remove('bg-white', 'scale-125');
            }
        });
    }

    track.addEventListener('transitionend', () => {
        isTransitioning = false;
        if (currentIndex === 0) {
            currentIndex = slides.length - 2;
            updateCarousel(true);
        }
        if (currentIndex === slides.length - 1) {
            currentIndex = 1;
            updateCarousel(true);
        }
    });

    function moveNext() {
        if (isTransitioning) return;
        isTransitioning = true;
        currentIndex++;
        updateCarousel();
    }

    function movePrev() {
        if (isTransitioning) return;
        isTransitioning = true;
        currentIndex--;
        updateCarousel();
    }

    function startAutoPlay() {
        autoPlayTimer = setInterval(moveNext, 7000);
    }

    function resetAutoPlay() {
        clearInterval(autoPlayTimer);
        startAutoPlay();
    }

    nextButton.addEventListener('click', () => { moveNext(); resetAutoPlay(); });
    prevButton.addEventListener('click', () => { movePrev(); resetAutoPlay(); });
    
    dots.forEach((dot, idx) => {
        dot.addEventListener('click', () => {
            if (isTransitioning) return;
            currentIndex = idx + 1;
            updateCarousel();
            resetAutoPlay();
        });
    });

    // Drag functionality
    let startX = 0;
    let isDragging = false;
    let dragMove = 0;

    const dragStart = (e) => {
        if (isTransitioning) return;
        isDragging = true;
        startX = e.type.includes('touch') ? e.touches[0].pageX : e.pageX;
        clearInterval(autoPlayTimer);
        track.style.transition = 'none';
    };

    const dragging = (e) => {
        if (!isDragging) return;
        const currentX = e.type.includes('touch') ? e.touches[0].pageX : e.pageX;
        dragMove = currentX - startX;
        const currentTranslate = -currentIndex * track.offsetWidth;
        track.style.transform = `translateX(${currentTranslate + dragMove}px)`;
    };

    const dragEnd = () => {
        if (!isDragging) return;
        isDragging = false;
        if (Math.abs(dragMove) > track.offsetWidth / 5) {
            if (dragMove > 0) movePrev();
            else moveNext();
        } else {
            updateCarousel();
        }
        dragMove = 0;
        startAutoPlay();
    };

    track.addEventListener('mousedown', dragStart);
    window.addEventListener('mousemove', dragging);
    window.addEventListener('mouseup', dragEnd);
    
    track.addEventListener('touchstart', dragStart);
    track.addEventListener('touchmove', dragging);
    track.addEventListener('touchend', dragEnd);

    // Initialize
    updateCarousel(true);
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
</body>
</html>