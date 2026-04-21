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
<main class="pt-40 pb-20 max-w-7xl mx-auto px-8">
<!-- Breadcrumb -->
<nav class="flex mb-8 items-center gap-2 text-label text-sm text-on-surface-variant font-medium">
<a class="hover:text-primary transition-colors" href="#">Beranda</a>
<span class="material-symbols-outlined text-[16px]" data-icon="chevron_right">chevron_right</span>
<a class="hover:text-primary transition-colors" href="#">Berita</a>
<span class="material-symbols-outlined text-[16px]" data-icon="chevron_right">chevron_right</span>
<span class="text-primary font-semibold">Pemerintah Kota Balikpapan Raih Penghargaan Digital Transformation</span>
</nav>
<div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
<!-- Main Content Area -->
<article class="lg:col-span-8">
<h1 class="font-headline font-extrabold text-4xl lg:text-5xl text-on-surface leading-tight mb-6">
                    Pemerintah Kota Balikpapan Raih Penghargaan Digital Transformation Award 2024
                </h1>
<!-- Metadata Row -->
<div class="flex flex-wrap items-center gap-6 mb-8 py-4 border-y border-outline-variant/15">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-primary text-[20px]" data-icon="person_edit">person_edit</span>
<span class="text-sm font-semibold">Admin Kominfo</span>
</div>
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-primary text-[20px]" data-icon="calendar_today">calendar_today</span>
<span class="text-sm">Selasa, 07 April 2026 - 08:07:26</span>
</div>
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-primary text-[20px]" data-icon="folder_open">folder_open</span>
<span class="text-xs font-bold uppercase tracking-wider bg-tertiary-container text-white px-3 py-1 rounded-full">Berita Pemerintahan</span>
</div>
</div>
<!-- Featured Image -->
<figure class="mb-10 group">
<div class="relative overflow-hidden rounded-xl">
<img alt="Digital transformation ceremony" class="w-full aspect-video object-cover group-hover:scale-105 transition-transform duration-700" data-alt="Modern government office interior with large digital screens displaying city data analytics and staff in professional attire" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDKQ2cKshplp0C5kKGMdcVBxqvTsTuKBIbFyL0oFWZDD6hG9XCFeEeYD6fWK614OKx9eTn8mzFZbeXTRBsA0zRvaCbaAJ-toKmECBtfwP9sZTrn78RmiLzIbmRj_EqJFScVP3juEh7qfOhIuafsxVJTeM6kHU5iFA7mBpqcW_NbF-9kbVz6oM1MDu2994MVGXc9s99IdnXWInfzaN_v21Xegh0czKzQbLNpYIcBDsrf10DuenWxpZBgOw7Xkquk43qfQ6XUl6b43cvZ"/>
</div>
<figcaption class="mt-4 text-sm text-on-surface-variant italic text-center">
                        Suasana penganugerahan Digital Transformation Award 2024 di Jakarta yang dihadiri jajaran Pemkot Balikpapan.
                    </figcaption>
</figure>
<!-- Article Content -->
<div class="prose prose-lg max-w-none text-on-surface leading-relaxed font-body">
<p class="mb-6 first-letter:text-5xl first-letter:font-bold first-letter:text-primary first-letter:mr-3 first-letter:float-left">
                        Balikpapan kembali menorehkan prestasi gemilang di tingkat nasional. Dalam ajang Digital Transformation Award 2024, Kota Beriman berhasil membawa pulang trofi kategori "Layanan Informasi Publik Terbaik". Penghargaan ini menegaskan komitmen PPID Balikpapan dalam mewujudkan transparansi informasi yang modern dan mudah diakses oleh seluruh lapisan masyarakat.
                    </p>
<p class="mb-6">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    </p>
<blockquote class="my-8 pl-6 border-l-4 border-secondary-container bg-surface-container-low py-6 pr-8 rounded-r-xl italic font-headline text-xl text-primary">
                        "Transparansi bukan lagi pilihan, melainkan sebuah kebutuhan dasar dalam tata kelola pemerintahan yang baik. Kami terus berinovasi untuk masyarakat Balikpapan."
                    </blockquote>
<p class="mb-6">
                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Curabitur pretium tincidunt lacus. Nulla gravida orci a odio. Nullam varius, turpis et commodo pharetra, est eros bibendum elit, nec luctus magna felis sollicitudin mauris.
                    </p>
<p class="mb-6">
                        Integer in mauris eu nibh euismod gravida. Duis ac tellus et risus vulputate vehicula. Donec lobortis risus a elit. Etiam tempor. Ut ullamcorper, ligula eu tempor congue, eros est euismod turpis, id tincidunt sapien risus a quam. Maecenas fermentum consequat mi. Donec fermentum. Pellentesque malesuada nulla a mi.
                    </p>
</div>
<!-- Tags & Share -->
<div class="mt-12 pt-8 border-t border-outline-variant/15 flex flex-col md:flex-row justify-between items-center gap-6">
<div class="flex items-center gap-2">
<span class="text-sm font-bold text-on-surface-variant uppercase tracking-widest">Tag:</span>
<div class="flex gap-2">
<span class="bg-surface-container-high px-3 py-1 rounded-lg text-xs font-medium text-on-surface">Digital</span>
<span class="bg-surface-container-high px-3 py-1 rounded-lg text-xs font-medium text-on-surface">Penghargaan</span>
<span class="bg-surface-container-high px-3 py-1 rounded-lg text-xs font-medium text-on-surface">Smart City</span>
</div>
</div>
<div class="flex items-center gap-4">
<span class="text-sm font-bold text-on-surface-variant">Bagikan:</span>
<div class="flex gap-2">
<button class="w-10 h-10 rounded-full bg-[#1877F2] text-white flex items-center justify-center hover:scale-110 transition-transform">
<span class="material-symbols-outlined text-[20px]" data-icon="facebook">social_leaderboard</span>
</button>
<button class="w-10 h-10 rounded-full bg-[#1DA1F2] text-white flex items-center justify-center hover:scale-110 transition-transform">
<span class="material-symbols-outlined text-[20px]" data-icon="share">share</span>
</button>
</div>
</div>
</div>
</article>
<!-- Sidebar -->
<aside class="lg:col-span-4 space-y-10">
<!-- Popular News Section -->
<section class="bg-surface-container-low rounded-2xl p-8">
<h3 class="font-headline font-bold text-xl text-primary mb-6 flex items-center gap-2">
<span class="material-symbols-outlined" data-icon="trending_up">trending_up</span>
                        Berita Terpopuler
                    </h3>
<div class="space-y-6">
<!-- Pop Item 1 -->
<a class="group flex gap-4" href="#">
<div class="flex-shrink-0 w-20 h-20 rounded-lg overflow-hidden">
<img alt="City view" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" data-alt="Aerial view of a coastal city skyline at dusk with glowing city lights and dark blue ocean water" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAV6Ze-HoIwtvtYg_WUWcWVJ30vL41tWZmXhHXojoK_6Mhg5PaTM0daSfjyc56Vsh0NJRWg_oQ1jlliu69Jisc8gp79B-79f74p_I3pTrK_T_h7d6j9ELFVSgMy6cdCRcDOPqV8AHwq1JyFd7UAPC1PwshiTXrunPPx35YX-nFV8oWXCwyEQe3eJwbKK6I6nVJVjkNglOsDMiIgxoU9AeKUhWj-FdM1uBFQLuGsngUfcwjejrZ2AOlncQs6ZCxyY9WrpqK6Y4qQd3ib"/>
</div>
<div>
<h4 class="font-headline font-bold text-sm leading-snug group-hover:text-primary transition-colors">Pengumuman Hasil Seleksi Administrasi CASN 2024</h4>
<p class="text-[10px] uppercase font-bold text-on-surface-variant mt-2 tracking-wider">12 Maret 2024</p>
</div>
</a>
<!-- Pop Item 2 -->
<a class="group flex gap-4" href="#">
<div class="flex-shrink-0 w-20 h-20 rounded-lg overflow-hidden">
<img alt="Statistics" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" data-alt="High quality close up of financial charts and growth graphs displayed on a sleek glass tablet screen" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBw1dsRMUgmQS9nCv6nPOHkAoK6q2i0-WOTXHC-DgBCIPdyGwZhM6efFG0eoURGJz1ywwUSJ_ECCAcU_WyzgKNmVtHubaTKIp-olqeapVan-Gwz4SNfjR-VQktHtYox_bs55yTFQ2bBihCVYMYU1Nin46QDnd1awp63t9gXAppMVbPsf3I6Ui3cPIA-OK2hIPeIzyaLEC75tY8jdjTZNz_IU6PaG1CP1fFAiBygQEHS0eK-xkDtJXzBLfrNo1e1_OeCRO0QUYbACCGo"/>
</div>
<div>
<h4 class="font-headline font-bold text-sm leading-snug group-hover:text-primary transition-colors">Laporan Realisasi Anggaran Triwulan I Balikpapan</h4>
<p class="text-[10px] uppercase font-bold text-on-surface-variant mt-2 tracking-wider">10 Maret 2024</p>
</div>
</a>
<!-- Pop Item 3 -->
<a class="group flex gap-4" href="#">
<div class="flex-shrink-0 w-20 h-20 rounded-lg overflow-hidden">
<img alt="Meeting" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" data-alt="Group of diverse professionals collaborating in a bright modern sunlit meeting room with greenery" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC-XGSQPy3F-NaY1Zv2mZ9EKkLkqeh3L9nZnSMQcNOX3Jx6UuYC5rGOITvioatJ3xPQIXXAUROeT8jkVx9De5ntlAk-bnb9wRc7y5M-zqAJRJ9p0_6YWCs6crdPBcCG2yiUeJQkWlo0GCMv8DSVJ-47SmFkY7yETjDHzItFnFNV_oW8yGxBaRFjyXsglwYsuYJGWXFEKU097Y_yZo1s3e_gSy5WX8UoKZccrKcX6W2_b3yJqk-YnlKZWe-o6WY2DeNGYoNmGqkMUNev"/>
</div>
<div>
<h4 class="font-headline font-bold text-sm leading-snug group-hover:text-primary transition-colors">Workshop Keterbukaan Informasi Publik Bagi Kelurahan</h4>
<p class="text-[10px] uppercase font-bold text-on-surface-variant mt-2 tracking-wider">08 Maret 2024</p>
</div>
</a>
</div>
<button class="w-full mt-8 py-3 border border-primary/20 rounded-xl font-headline font-bold text-sm text-primary hover:bg-primary hover:text-white transition-all">Lihat Semua Berita</button>
</section>
<!-- CTA Card -->
<div class="relative overflow-hidden bg-primary rounded-2xl p-8 text-white group shadow-xl">
<div class="absolute top-0 right-0 w-32 h-32 bg-secondary-container rounded-bl-full opacity-20 -mr-10 -mt-10 group-hover:scale-110 transition-transform duration-700"></div>
<div class="relative z-10">
<span class="material-symbols-outlined text-secondary-container text-4xl mb-4" data-icon="contact_support" data-weight="fill">contact_support</span>
<h3 class="font-headline font-extrabold text-2xl mb-3">Butuh Informasi?</h3>
<p class="text-white/80 text-sm leading-relaxed mb-6">Ajukan permohonan informasi publik Anda secara online melalui portal resmi PPID Balikpapan.</p>
<a class="inline-flex items-center gap-2 bg-secondary-container text-on-secondary-fixed font-headline font-bold px-6 py-3 rounded-xl hover:shadow-lg transition-shadow" href="#">
                            Mulai Permohonan
                            <span class="material-symbols-outlined text-[18px]" data-icon="arrow_forward">arrow_forward</span>
</a>
</div>
</div>
<!-- Calendar/Event Placeholder -->
<div class="p-8 border border-outline-variant/30 rounded-2xl">
<h3 class="font-headline font-bold text-lg text-on-surface mb-4">Agenda Kota</h3>
<div class="space-y-4">
<div class="flex items-start gap-4 p-3 hover:bg-surface-container-low rounded-lg transition-colors cursor-pointer">
<div class="bg-primary-container text-on-primary-container p-2 rounded-lg flex flex-col items-center min-w-[50px]">
<span class="text-xs font-bold">MAR</span>
<span class="text-lg font-black">20</span>
</div>
<div class="text-sm">
<h5 class="font-bold">Musrenbang RKPD 2025</h5>
<p class="text-xs text-on-surface-variant">Aula Kantor Walikota</p>
</div>
</div>
</div>
</div>
</aside>
</div>
</main>
<!-- Footer -->
<footer class="w-full bg-slate-50 border-t border-slate-200">
<div class="max-w-7xl mx-auto py-12 px-8 flex flex-col md:flex-row justify-between items-start gap-12">
<div class="max-w-xs">
<div class="text-lg font-black text-[#003f74] mb-4">PPID Balikpapan</div>
<p class="text-sm text-slate-600 leading-relaxed">Penyedia layanan informasi dan dokumentasi publik pemerintah Kota Balikpapan yang transparan dan akuntabel.</p>
</div>
<div class="grid grid-cols-2 gap-12">
<div class="flex flex-col gap-3">
<span class="font-bold text-sm text-[#003f74] uppercase tracking-widest mb-2">Pintasan</span>
<a class="text-slate-500 hover:text-[#003f74] text-sm transition-all hover:underline" href="#">Kebijakan Privasi</a>
<a class="text-slate-500 hover:text-[#003f74] text-sm transition-all hover:underline" href="#">Peta Situs</a>
<a class="text-slate-500 hover:text-[#003f74] text-sm transition-all hover:underline" href="#">Aksesibilitas</a>
</div>
<div class="flex flex-col gap-3">
<span class="font-bold text-sm text-[#003f74] uppercase tracking-widest mb-2">Kontak</span>
<a class="text-slate-500 hover:text-[#003f74] text-sm transition-all hover:underline" href="#">Kontak Kami</a>
<p class="text-slate-500 text-sm">Jl. Jenderal Sudirman No. 1, Balikpapan, Kalimantan Timur</p>
</div>
</div>
</div>
<div class="max-w-7xl mx-auto px-8 py-6 border-t border-slate-200 flex flex-col md:flex-row justify-between items-center gap-4 text-slate-500 text-xs">
<p>© 2024 Pejabat Pengelola Informasi dan Dokumentasi Kota Balikpapan</p>
<div class="flex gap-4">
<span class="material-symbols-outlined text-[18px] opacity-60" data-icon="language">language</span>
<span class="material-symbols-outlined text-[18px] opacity-60" data-icon="alternate_email">alternate_email</span>
</div>
</div>
</footer>
<!-- FAB for Info Request - Suppressed on News Detail as per instructions (not shown) -->
</body></html>