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
        html {
            height: auto;
            font-family: "Inter", sans-serif;
        }
        body {
            font-family: "Inter", sans-serif;
            overflow-x: hidden;
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
        }
        #carousel-track {
            display: flex;
            transition: transform 0.5s cubic-bezier(0.4, 0, 0.2, 1);
            cursor: grab;
            user-select: none;
        }
        #carousel-track:active {
            cursor: grabbing;
        }
        .carousel-slide {
            flex: 0 0 100%;
            width: 100%;
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
            top: 44px;
            left: 0;
            z-index: 99999;
            min-width: 180px;
            background-color: #0f172a;
            border-top: 2px solid #fdc003;
            box-shadow: 0 10px 20px rgba(0,0,0,0.5);
            border-radius: 0 0 8px 8px;
        }
        .dropdown-menu.open {
            display: block;
            animation: dropdownFade 0.18s ease-out forwards;
        }
        @keyframes dropdownFade {
            from { opacity: 0; transform: translateY(-4px); }
            to   { opacity: 1; transform: translateY(0); }
        }
        /* Navbar: hidden on mobile, visible on desktop */
        #desktop-nav {
            display: none;
        }
        @media (min-width: 768px) {
            #desktop-nav {
                display: block;
            }
        }
    </style>
</head>
<body class="bg-surface text-on-surface">
<header class="w-full shadow-md bg-white sticky top-0 z-50 overflow-visible">
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
<nav id="desktop-nav" class="bg-slate-950 text-white w-full relative" style="overflow:visible; height:44px;">
<div class="max-w-7xl mx-auto flex h-full items-center justify-start md:justify-center space-x-1 px-2 md:px-4 whitespace-nowrap">
<a class="nav-hover-line relative px-3 py-3 text-xs font-bold font-headline transition-all text-secondary-container" href="http://ppidbalikpapan.test">Beranda</a>
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

<!-- Mobile Fullscreen Menu Overlay -->
<div id="mobile-menu" class="hidden fixed inset-0 z-[300] bg-slate-950 flex-col md:hidden overflow-y-auto">
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
<span class="text-primary">Statistik</span>
</nav>
<h1 class="text-5xl md:text-6xl font-headline font-extrabold text-primary leading-tight">
                    Statistik <span class="text-secondary">Permohonan</span>
</h1>
<p class="mt-6 text-lg text-on-surface-variant max-w-2xl leading-relaxed">
                    Statistik Permohonan Informasi Publik Kota Balikpapan.
                </p>
</div>
</section>
<!-- Overview Cards -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
<!-- Card 1 -->
<div class="bg-surface-container-lowest p-6 rounded-xl shadow-sm border-l-4 border-primary hover:shadow-md transition-shadow">
<div class="flex justify-between items-start mb-4">
<span class="material-symbols-outlined text-primary bg-primary-fixed p-3 rounded-full">description</span>
<span class="text-primary font-bold text-2xl">2.721</span>
</div>
<p class="text-xs font-bold text-on-surface-variant uppercase tracking-wider">Daftar Informasi Publik</p>
</div>
<!-- Card 2 -->
<div class="bg-surface-container-lowest p-6 rounded-xl shadow-sm border-l-4 border-secondary hover:shadow-md transition-shadow">
<div class="flex justify-between items-start mb-4">
<span class="material-symbols-outlined text-secondary bg-secondary-fixed p-3 rounded-full">group_add</span>
<span class="text-secondary font-bold text-2xl">1.584</span>
</div>
<p class="text-xs font-bold text-on-surface-variant uppercase tracking-wider">Jumlah Permohonan</p>
</div>
<!-- Card 3 -->
<div class="bg-surface-container-lowest p-6 rounded-xl shadow-sm border-l-4 border-error hover:shadow-md transition-shadow">
<div class="flex justify-between items-start mb-4">
<span class="material-symbols-outlined text-error bg-error-container p-3 rounded-full">cancel</span>
<span class="text-error font-bold text-2xl">371</span>
</div>
<p class="text-xs font-bold text-on-surface-variant uppercase tracking-wider">Permohonan Ditolak</p>
</div>
<!-- Card 4 -->
<div class="bg-surface-container-lowest p-6 rounded-xl shadow-sm border-l-4 border-tertiary hover:shadow-md transition-shadow">
<div class="flex justify-between items-start mb-4">
<span class="material-symbols-outlined text-tertiary bg-tertiary-fixed p-3 rounded-full">task_alt</span>
<span class="text-tertiary font-bold text-2xl">1.194</span>
</div>
<p class="text-xs font-bold text-on-surface-variant uppercase tracking-wider">Permohonan Selesai</p>
</div>
</div>
<!-- Visualizations -->
<div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-12">
<!-- Gauge/Donut Chart Container -->
<div class="bg-surface-container-low p-8 rounded-xl flex flex-col items-center justify-center">
<h3 class="font-headline font-bold text-lg mb-8 text-primary">PERSENTASE PERMOHONAN SELESAI</h3>
<div class="relative w-64 h-64 flex items-center justify-center">
<!-- Gauge SVG -->
<svg class="w-full h-full transform -rotate-90">
<circle class="text-surface-container-highest" cx="128" cy="128" fill="transparent" r="100" stroke="currentColor" stroke-width="20"></circle>
<circle class="text-primary" cx="128" cy="128" fill="transparent" r="100" stroke="currentColor" stroke-dasharray="628" stroke-dashoffset="10" stroke-width="20"></circle>
</svg>
<div class="absolute flex flex-col items-center">
<span class="text-4xl font-black text-primary">98.43%</span>
<span class="text-[10px] text-on-surface-variant font-bold uppercase">Success Rate</span>
</div>
</div>
<p class="mt-8 text-center text-sm text-on-surface-variant italic">Data real-time penyelesaian permohonan informasi publik tahun berjalan.</p>
</div>
<!-- Pie Chart Container -->
<div class="bg-surface-container-low p-8 rounded-xl">
<h3 class="font-headline font-bold text-lg mb-8 text-primary">JENIS INFORMASI</h3>
<div class="flex flex-col md:flex-row items-center gap-8">
<div class="relative w-48 h-48">
<svg class="w-full h-full transform -rotate-90" viewbox="0 0 32 32">
<circle cx="16" cy="16" fill="transparent" r="16" stroke="#003f74" stroke-dasharray="70 100" stroke-width="32"></circle>
<circle cx="16" cy="16" fill="transparent" r="16" stroke="#fdc003" stroke-dasharray="20 100" stroke-dashoffset="-70" stroke-width="32"></circle>
<circle cx="16" cy="16" fill="transparent" r="16" stroke="#005e67" stroke-dasharray="10 100" stroke-dashoffset="-90" stroke-width="32"></circle>
</svg>
</div>
<div class="flex-1 space-y-3">
<div class="flex items-center gap-3">
<div class="w-4 h-4 bg-primary rounded-sm"></div>
<span class="text-sm font-medium">Informasi Berkala</span>
<span class="text-sm font-bold ml-auto">70%</span>
</div>
<div class="flex items-center gap-3">
<div class="w-4 h-4 bg-secondary-container rounded-sm"></div>
<span class="text-sm font-medium">Informasi Serta Merta</span>
<span class="text-sm font-bold ml-auto">20%</span>
</div>
<div class="flex items-center gap-3">
<div class="w-4 h-4 bg-tertiary-container rounded-sm"></div>
<span class="text-sm font-medium">Informasi Tersedia Setiap Saat</span>
<span class="text-sm font-bold ml-auto">10%</span>
</div>
</div>
</div>
</div>
</div>
<!-- Detailed Table -->
<div class="bg-surface-container-lowest rounded-xl shadow-sm overflow-hidden">
<div class="px-8 py-6 border-b border-surface-container-high flex justify-between items-center">
<h3 class="font-headline font-bold text-lg text-primary uppercase">Jumlah Permohonan Berdasarkan Bulan - Tahun 2026</h3>
<button class="flex items-center gap-2 text-primary font-bold text-sm hover:underline">
<span class="material-symbols-outlined text-sm">download</span>
                        Export Data
                    </button>
</div>
<div class="overflow-x-auto">
<table class="w-full text-left border-collapse">
<thead>
<tr class="bg-surface-container-low">
<th class="px-8 py-4 text-xs font-bold text-on-surface-variant uppercase tracking-wider">Status Permohonan</th>
<th class="px-4 py-4 text-xs font-bold text-on-surface-variant uppercase">JAN</th>
<th class="px-4 py-4 text-xs font-bold text-on-surface-variant uppercase">FEB</th>
<th class="px-4 py-4 text-xs font-bold text-on-surface-variant uppercase">MAR</th>
<th class="px-4 py-4 text-xs font-bold text-on-surface-variant uppercase">APR</th>
<th class="px-4 py-4 text-xs font-bold text-on-surface-variant uppercase">MEI</th>
<th class="px-4 py-4 text-xs font-bold text-on-surface-variant uppercase">JUN</th>
<th class="px-4 py-4 text-xs font-bold text-on-surface-variant uppercase bg-primary-fixed">TOTAL</th>
</tr>
</thead>
<tbody class="divide-y divide-surface-container-high">
<tr class="hover:bg-surface-container-low transition-colors">
<td class="px-8 py-4 font-bold text-primary">JUMLAH</td>
<td class="px-4 py-4 text-sm">124</td>
<td class="px-4 py-4 text-sm">156</td>
<td class="px-4 py-4 text-sm">142</td>
<td class="px-4 py-4 text-sm">168</td>
<td class="px-4 py-4 text-sm">145</td>
<td class="px-4 py-4 text-sm">130</td>
<td class="px-4 py-4 text-sm font-black bg-primary-fixed/30">865</td>
</tr>
<tr class="hover:bg-surface-container-low transition-colors">
<td class="px-8 py-4 font-bold text-tertiary">DIPROSES</td>
<td class="px-4 py-4 text-sm">12</td>
<td class="px-4 py-4 text-sm">24</td>
<td class="px-4 py-4 text-sm">18</td>
<td class="px-4 py-4 text-sm">15</td>
<td class="px-4 py-4 text-sm">20</td>
<td class="px-4 py-4 text-sm">22</td>
<td class="px-4 py-4 text-sm font-black bg-primary-fixed/30">111</td>
</tr>
<tr class="hover:bg-surface-container-low transition-colors">
<td class="px-8 py-4 font-bold text-secondary">DISETUJUI</td>
<td class="px-4 py-4 text-sm">100</td>
<td class="px-4 py-4 text-sm">120</td>
<td class="px-4 py-4 text-sm">115</td>
<td class="px-4 py-4 text-sm">140</td>
<td class="px-4 py-4 text-sm">112</td>
<td class="px-4 py-4 text-sm">98</td>
<td class="px-4 py-4 text-sm font-black bg-primary-fixed/30">685</td>
</tr>
<tr class="hover:bg-surface-container-low transition-colors">
<td class="px-8 py-4 font-bold text-error">DITOLAK</td>
<td class="px-4 py-4 text-sm">12</td>
<td class="px-4 py-4 text-sm">12</td>
<td class="px-4 py-4 text-sm">9</td>
<td class="px-4 py-4 text-sm">13</td>
<td class="px-4 py-4 text-sm">13</td>
<td class="px-4 py-4 text-sm">10</td>
<td class="px-4 py-4 text-sm font-black bg-primary-fixed/30">69</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
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
    // Mobile Menu Toggle
    document.getElementById('open-mobile-menu').addEventListener('click', function() {
        var menu = document.getElementById('mobile-menu');
        menu.classList.remove('hidden');
        menu.classList.add('flex');
        document.body.style.overflow = 'hidden';
    });
    document.getElementById('close-mobile-menu').addEventListener('click', function() {
        var menu = document.getElementById('mobile-menu');
        menu.classList.add('hidden');
        menu.classList.remove('flex');
        document.body.style.overflow = '';
    });

    // Mobile Accordion Toggle
    function toggleMobileAccordion(id) {
        var el = document.getElementById(id);
        var icon = document.getElementById('icon-' + id);
        var isHidden = el.classList.contains('hidden');
        // Close all
        ['acc-profil','acc-infopub','acc-layanan','acc-ppid'].forEach(function(acc) {
            document.getElementById(acc).classList.add('hidden');
            document.getElementById(acc).classList.remove('flex');
            var ic = document.getElementById('icon-' + acc);
            if (ic) ic.style.transform = '';
        });
        // Open clicked if it was closed
        if (isHidden) {
            el.classList.remove('hidden');
            el.classList.add('flex');
            if (icon) icon.style.transform = 'rotate(180deg)';
        }
    }
</script>
<script>
    // Desktop dropdown via JS (more reliable than CSS hover)
    document.querySelectorAll('#desktop-nav .group').forEach(function(group) {
        var menu = group.querySelector('.dropdown-menu');
        if (!menu) return;
        var timer;
        group.addEventListener('mouseenter', function() {
            clearTimeout(timer);
            // close all others
            document.querySelectorAll('#desktop-nav .dropdown-menu.open').forEach(function(m) {
                if (m !== menu) m.classList.remove('open');
            });
            menu.classList.add('open');
        });
        group.addEventListener('mouseleave', function() {
            timer = setTimeout(function() { menu.classList.remove('open'); }, 80);
        });
        menu.addEventListener('mouseenter', function() { clearTimeout(timer); });
        menu.addEventListener('mouseleave', function() {
            timer = setTimeout(function() { menu.classList.remove('open'); }, 80);
        });
    });
    // Close dropdown when clicking outside
    document.addEventListener('click', function(e) {
        if (!e.target.closest('#desktop-nav')) {
            document.querySelectorAll('#desktop-nav .dropdown-menu.open').forEach(function(m) {
                m.classList.remove('open');
            });
        }
    });
</script>
<script>
    // Auto-detect and report overflowing elements
    window.addEventListener('load', function() {
        var docW = document.documentElement.offsetWidth;
        document.querySelectorAll('*').forEach(function(el) {
            if (el.offsetWidth > docW) {
                el.style.maxWidth = '100%';
                el.style.overflowX = 'hidden';
                console.warn('Overflow fixed on:', el.tagName, el.className, 'width:', el.offsetWidth);
            }
        });
    });
</script>
</body></html>