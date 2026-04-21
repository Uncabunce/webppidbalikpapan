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
<main class="pt-32 pb-24">
<div class="max-w-screen-2xl mx-auto px-8 grid grid-cols-1 lg:grid-cols-12 gap-12">
<!-- Article Content Column -->
<article class="lg:col-span-8">
<!-- Breadcrumbs -->
<div class="max-w-7xl mx-auto px-6 relative z-10">
<nav class="flex mb-4 text-xs font-medium text-outline uppercase tracking-widest gap-2">
<a href="http://ppidbalikpapan.test">Beranda</a>
<span>/</span>
<span class="text-primary">Berita</span>
</nav>
<!-- Article Header -->
<header class="mb-8">
<h1 class="font-headline font-extrabold text-4xl lg:text-5xl text-on-surface leading-tight mb-6">
                        Optimalkan Keterbukaan Informasi, Pemkot Balikpapan Gelar Bimtek PPID Pelaksana se-Kota
                    </h1>
<div class="flex flex-wrap items-center gap-6 py-6 border-y border-outline-variant/20">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-full bg-surface-container-high flex items-center justify-center">
<span class="material-symbols-outlined text-primary">person</span>
</div>
<div>
<p class="text-xs text-on-surface-variant">Penulis</p>
<p class="text-sm font-bold">Admin PPID Utama</p>
</div>
</div>
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-full bg-surface-container-high flex items-center justify-center">
<span class="material-symbols-outlined text-primary">calendar_today</span>
</div>
<div>
<p class="text-xs text-on-surface-variant">Waktu Terbit</p>
<p class="text-sm font-bold">15 April 2026</p>
<p>09:21:27</p>
</div>
</div>
<div class="flex items-center gap-3">
</div>
</div>
</header>
<!-- Featured Image Section -->
<figure class="mb-10 group">
<div class="overflow-hidden rounded-xl bg-surface-container-high aspect-video relative">
<img alt="Government meeting" class="w-full h-full object-cover transform transition-transform duration-700 group-hover:scale-105" data-alt="Dignified government officials in a modern conference hall with warm ambient lighting during a formal information technology seminar" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCmlYslgtalQyJs-DdOX5VLtCp40py7qo9WKCbuNBVCHQUkx8Gw4OrfcQwal5O-f1IGOZv4isa0CsPW6yfAQZJMCLIk7J-XpLGyN9ZKeZOT4RjB2_AlCyxEvwLOa8WFM5I8Vk7YROmQhU4IEuq3yorKbeGzyhVKCnAzmaRYvNOQ4ZPrdsnoMXUz7JKEgk_uZqVC0S_k37ws5AeNwM35sQKA3eKCCT_cw3vMCwxwMvVF8lW_IYY6vcHZJGzt2hHVdgG2SrVBCc0dmva5"/>
</div>
<figcaption class="mt-4 text-sm italic text-on-surface-variant flex items-center gap-2">
<span class="material-symbols-outlined text-sm">photo_camera</span>
                        Suasana Bimbingan Teknis PPID Pelaksana di Aula Kantor Walikota Balikpapan (Dok. Diskominfo).
                    </figcaption>
</figure>
<!-- Body Content -->
<div class="font-body text-lg leading-relaxed text-on-surface space-y-6">
<p class="first-letter:text-5xl first-letter:font-bold first-letter:mr-3 first-letter:float-left first-letter:text-primary">
                        Pemerintah Kota Balikpapan melalui Dinas Komunikasi dan Informatika terus memperkuat komitmen dalam mewujudkan tata kelola pemerintahan yang transparan dan akuntabel. Melalui kegiatan Bimbingan Teknis (Bimtek) bagi para Pejabat Pengelola Informasi dan Dokumentasi (PPID) Pelaksana, diharapkan standar pelayanan informasi publik dapat ditingkatkan secara merata di seluruh Organisasi Perangkat Daerah (OPD).
                    </p>
<p>
                        Acara yang dibuka langsung oleh Sekretaris Daerah Kota Balikpapan ini menekankan pentingnya responsibilitas dalam menanggapi permohonan informasi masyarakat. "Informasi bukan lagi sekadar data, melainkan hak asasi warga negara yang harus dipenuhi dengan cepat, akurat, dan tidak menyesatkan," tegas beliau dalam sambutannya.
                    </p>
<div class="bg-surface-container-low p-8 rounded-xl border-l-4 border-primary my-8">
<h3 class="font-headline font-bold text-xl mb-4">Poin Penting Strategi Transparansi 2026:</h3>
<ul class="space-y-3 list-none">
<li class="flex items-start gap-3">
<span class="material-symbols-outlined text-primary mt-1">check_circle</span>
<span>Digitalisasi seluruh arsip informasi publik kategori berkala.</span>
</li>
<li class="flex items-start gap-3">
<span class="material-symbols-outlined text-primary mt-1">check_circle</span>
<span>Integrasi sistem permohonan informasi antar OPD satu pintu.</span>
</li>
<li class="flex items-start gap-3">
<span class="material-symbols-outlined text-primary mt-1">check_circle</span>
<span>Pelatihan rutin kompetensi petugas front-office PPID.</span>
</li>
</ul>
</div>
<p>
                        Selain pemaparan materi, peserta juga melakukan simulasi klasifikasi informasi, membedakan mana informasi yang bersifat terbuka dan mana yang dikecualikan berdasarkan Undang-Undang Nomor 14 Tahun 2008. Hal ini krusial untuk mencegah terjadinya sengketa informasi di kemudian hari.
                    </p>
</div>
<!-- Tags and Sharing -->
<footer class="mt-12 pt-8 border-t border-outline-variant/20 flex flex-col md:flex-row justify-between items-start md:items-center gap-6">
<div class="flex flex-wrap gap-2">
<a class="px-4 py-1.5 bg-surface-container text-sm font-medium rounded-full hover:bg-primary hover:text-white transition-colors" href="#">#BalikpapanNyaman</a>
<a class="px-4 py-1.5 bg-surface-container text-sm font-medium rounded-full hover:bg-primary hover:text-white transition-colors" href="#">#PPIDUtama</a>
<a class="px-4 py-1.5 bg-surface-container text-sm font-medium rounded-full hover:bg-primary hover:text-white transition-colors" href="#">#Transparansi</a>
</div>
<div class="flex items-center gap-4">
<span class="text-sm font-bold text-on-surface-variant">Bagikan:</span>
<div class="flex gap-2">
<button class="w-10 h-10 rounded-full bg-blue-600 text-white flex items-center justify-center hover:shadow-lg transition-shadow">
<svg class="w-5 h-5 fill-current" viewbox="0 0 24 24"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path></svg>
</button>
<button class="w-10 h-10 rounded-full bg-sky-500 text-white flex items-center justify-center hover:shadow-lg transition-shadow">
<svg class="w-5 h-5 fill-current" viewbox="0 0 24 24"><path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path></svg>
</button>
<button class="w-10 h-10 rounded-full bg-green-600 text-white flex items-center justify-center hover:shadow-lg transition-shadow">
<svg class="w-5 h-5 fill-current" viewbox="0 0 24 24"><path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path></svg>
</button>
</div>
</div>
</footer>
</article>
<!-- Sidebar -->
<aside class="lg:col-span-4 space-y-10">
<!-- Trending News Card -->
<section class="bg-surface-container-lowest rounded-2xl p-6 shadow-sm border border-outline-variant/10">
<h3 class="font-headline font-bold text-xl mb-6 flex items-center gap-2">
<span class="material-symbols-outlined text-secondary">trending_up</span>
                        Berita Populer
                    </h3>
<div class="space-y-6">
<div class="flex gap-4 group cursor-pointer">
<div class="w-20 h-20 rounded-lg overflow-hidden flex-shrink-0">
<img alt="Coastal development" class="w-full h-full object-cover transition-transform group-hover:scale-110" data-alt="Wide panoramic shot of Balikpapan coastal skyline at sunset with calm turquoise water and modern infrastructure" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCkcu4g9Q2I5lo05Nl-7Mxla-1wIK06YJypL5PdSYbK1XrTQaoWQfU5bO3lqfTdH12AD7Mg3gynlXf9owQeKIgupI7piu9tkXUKn8AdQwPQWZqXS5CXCAjy12A9cSoyZtFlojwJwhDr9_nOZAQR5AWOHm2qPVMwRGkONqfykHRbfahpsO7NnoE2EJFmcU3zSMKKzjCP-GIKRBjbEKj5-lLQz3_Y8xWiDqy4L8Z3HUl7XWSG6XZSz20n1LKMXsEE6OVIJzwG6Dhuhvc_"/>
</div>
<div class="flex-1">
<span class="text-[10px] font-bold text-secondary uppercase tracking-widest">Infrastruktur</span>
<h4 class="font-bold text-sm leading-tight group-hover:text-primary transition-colors">Progress Pembangunan IKN Memberi Dampak Positif Ekonomi Balikpapan</h4>
<p class="text-[11px] text-on-surface-variant mt-1">12 Apr 2026</p>
</div>
</div>
<div class="flex gap-4 group cursor-pointer">
<div class="w-20 h-20 rounded-lg overflow-hidden flex-shrink-0">
<img alt="Tech workshop" class="w-full h-full object-cover transition-transform group-hover:scale-110" data-alt="Close up of diverse hands working on tablets and laptops in a bright modern tech environment with digital interface elements" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAcKap_O2LgmHB5dathxXV0e8alSz4VVdoOIWLL-ZgWjcyuFvKU7OxskgNDqYtlttEOxsITw3BDJQsBWJ-DYjJDkcl7TiZ1dsTqIxonJAdMcK2UylopTWHQ-5BpI5pDXgQzLbfYyEDa993QLevGL7rs1rThBytGvo789f1As2KRuThGN_z_w1VEdCZWzKqWiZBQ2GO382sCocnfnVtckbNGXp17IZS41FZZbQ-ufr-VI50FZ0WcFZKsdU8XFa7gBDtSsugNCsAb4onQ"/>
</div>
<div class="flex-1">
<span class="text-[10px] font-bold text-secondary uppercase tracking-widest">Digitalisasi</span>
<h4 class="font-bold text-sm leading-tight group-hover:text-primary transition-colors">Luncurkan SuperApp, Pelayanan Publik Balikpapan Kini dalam Genggaman</h4>
<p class="text-[11px] text-on-surface-variant mt-1">10 Apr 2026</p>
</div>
</div>
<div class="flex gap-4 group cursor-pointer">
<div class="w-20 h-20 rounded-lg overflow-hidden flex-shrink-0">
<img alt="Chart analytics" class="w-full h-full object-cover transition-transform group-hover:scale-110" data-alt="Modern office desk with tablet showing financial charts and clean data visualization in soft natural lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD-k7XihsuOCTjWGwIea9WcMpLb5Ux-MilOQoLA5klpoHIDPJrUzvwEdhJcUnyZKMzIAsIhFMmoSvbHLOXSAsitOr70zhDVzI4Uqxl6K-II9DEfmv-YB3yxGrfe6IrT6zUwrIU2__nqC5n-2VY7PDaqjKski0XrGc3v6qcaJmK1peNbuqH7FJkaVnje4QQQ2oRlT-f38voWGjSLbma5GyLccnfoFFMNbUIJ_kt7n_r4fHmA1z7Sm3yQ_zDnrmJZHSOP9_wHwOqEFA00"/>
</div>
<div class="flex-1">
<span class="text-[10px] font-bold text-secondary uppercase tracking-widest">Ekonomi</span>
<h4 class="font-bold text-sm leading-tight group-hover:text-primary transition-colors">Realisasi Investasi Triwulan I Lampaui Target, Kota Balikpapan Optimis</h4>
<p class="text-[11px] text-on-surface-variant mt-1">08 Apr 2026</p>
</div>
</div>
</div>
<button class="w-full mt-8 py-3 border border-primary text-primary font-bold rounded-xl text-sm hover:bg-primary hover:text-white transition-all">Lihat Semua Berita</button>
</section>
<!-- Information Links (Editorial Style) -->
<section class="bg-primary text-white rounded-2xl p-8 relative overflow-hidden">
<div class="absolute inset-0 batik-overlay"></div>
<div class="relative z-10">
<h3 class="font-headline font-bold text-2xl mb-4 leading-tight">Butuh Informasi Publik?</h3>
<p class="text-primary-fixed text-sm mb-6 leading-relaxed">Ajukan permohonan informasi secara online. Cepat, Mudah, dan Transparan.</p>
<a class="inline-flex items-center gap-2 bg-secondary-container text-on-secondary-container px-6 py-3 rounded-xl font-bold text-sm hover:translate-x-1 transition-transform" href="#">
                            Ajukan Sekarang
                            <span class="material-symbols-outlined text-sm">arrow_forward</span>
</a>
</div>
</section>
<!-- Newsletter/Aspirasi -->
<section class="bg-surface-container-high rounded-2xl p-6">
<h4 class="font-bold mb-2">Suara Warga</h4>
<p class="text-xs text-on-surface-variant mb-4">Punya saran atau pertanyaan terkait keterbukaan informasi?</p>
<div class="space-y-3">
<input class="w-full bg-surface rounded-lg border-none text-sm px-4 py-2 focus:ring-2 focus:ring-primary" placeholder="Nama Lengkap" type="text"/>
<textarea class="w-full bg-surface rounded-lg border-none text-sm px-4 py-2 focus:ring-2 focus:ring-primary" placeholder="Pesan Anda" rows="3"></textarea>
<button class="w-full py-2 bg-on-surface text-white rounded-lg text-sm font-bold">Kirim Aspirasi</button>
</div>
</section>
</aside>
</div>
</main>
<!-- Footer (Shared Component Logic) -->
<footer class="w-full border-t border-white/5 bg-blue-900 dark:bg-slate-950 text-slate-300 font-['Inter'] text-sm font-normal">
<div class="w-full py-16 px-8 max-w-screen-2xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-12">
<div class="col-span-1 md:col-span-1">
<div class="text-2xl font-bold text-white mb-6">PPID Balikpapan</div>
<p class="text-slate-400 leading-relaxed mb-6">
                    Pejabat Pengelola Informasi dan Dokumentasi Kota Balikpapan. Berkomitmen dalam keterbukaan informasi publik demi Balikpapan yang Nyaman.
                </p>
<div class="flex gap-4">
<a class="w-8 h-8 rounded-lg bg-white/10 flex items-center justify-center hover:bg-amber-400 hover:text-blue-900 transition-all" href="#"><span class="material-symbols-outlined text-lg">public</span></a>
<a class="w-8 h-8 rounded-lg bg-white/10 flex items-center justify-center hover:bg-amber-400 hover:text-blue-900 transition-all" href="#"><span class="material-symbols-outlined text-lg">mail</span></a>
<a class="w-8 h-8 rounded-lg bg-white/10 flex items-center justify-center hover:bg-amber-400 hover:text-blue-900 transition-all" href="#"><span class="material-symbols-outlined text-lg">phone_in_talk</span></a>
</div>
</div>
<div>
<h4 class="text-white font-bold mb-6 flex items-center gap-2">Peta Situs</h4>
<ul class="space-y-3">
<li><a class="hover:text-amber-400 transition-colors" href="#">Profil PPID</a></li>
<li><a class="hover:text-amber-400 transition-colors" href="#">Informasi Berkala</a></li>
<li><a class="hover:text-amber-400 transition-colors" href="#">Informasi Serta Merta</a></li>
<li><a class="hover:text-amber-400 transition-colors" href="#">Informasi Tersedia Setiap Saat</a></li>
</ul>
</div>
<div>
<h4 class="text-white font-bold mb-6 flex items-center gap-2">Layanan</h4>
<ul class="space-y-3">
<li><a class="hover:text-amber-400 transition-colors" href="#">Permohonan Informasi</a></li>
<li><a class="hover:text-amber-400 transition-colors" href="#">Pengajuan Keberatan</a></li>
<li><a class="hover:text-amber-400 transition-colors" href="#">Cek Status Permohonan</a></li>
<li><a class="hover:text-amber-400 transition-colors" href="#">Standar Operasional Prosedur</a></li>
</ul>
</div>
<div>
<h4 class="text-white font-bold mb-6 flex items-center gap-2">Kontak Kami</h4>
<div class="space-y-4">
<div class="flex items-start gap-3">
<span class="material-symbols-outlined text-amber-400">location_on</span>
<span>Jl. Jenderal Sudirman No. 1, Kota Balikpapan, Kalimantan Timur</span>
</div>
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-amber-400">call</span>
<span>(0542) 421420</span>
</div>
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-amber-400">mail</span>
<span>ppid@balikpapan.go.id</span>
</div>
</div>
</div>
</div>
<div class="w-full py-8 px-8 border-t border-white/5 flex flex-col md:flex-row justify-between items-center gap-6 max-w-screen-2xl mx-auto">
<p class="text-xs">© 2024 Pejabat Pengelola Informasi dan Dokumentasi (PPID) Kota Balikpapan. The Civic Curator Editorial System.</p>
<div class="flex gap-8 text-xs">
<a class="hover:text-amber-400 transition-colors" href="#">Kebijakan Privasi</a>
<a class="hover:text-amber-400 transition-colors" href="#">Aksesibilitas</a>
<a class="hover:text-amber-400 transition-colors" href="#">Peta Situs</a>
</div>
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

</body></html>