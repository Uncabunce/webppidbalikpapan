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
            overflow-y: auto;
            font-family: "Inter", sans-serif;
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
        .nav-item {
            position: relative;
        }
        .nav-hover-line::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background-color: #fdc003;
            transition: width 0.3s ease
        }
        .nav-hover-line:hover::after {
            width: 100%
        }
        .dropdown-menu {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            z-index: 100;
        }
        .group:hover .dropdown-menu {
            display: block;
            animation: dropdown-slide 0.2s ease-out forwards;
        }
        .nav-dropdown {
            position: absolute;
            top: 100%;
            left: 0;
            background-color: #0f172a; /* Slate 900 for matching black navbar depth */
            min-width: 200px;
            opacity: 0;
            visibility: hidden;
            transform: translateY(10px);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            z-index: 100;
            border-top: 2px solid #fdc003;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.5);
        }
        .nav-item:hover .nav-dropdown {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }
        .nav-item:hover > a {
            border-bottom: 4px solid #fdc003;
            color: white;
        }
        .dropdown-link {
            display: block;
            padding: 12px 20px;
            font-size: 11px;
            font-weight: 700;
            color: #cbd5e1;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            transition: all 0.2s;
            border-bottom: 1px solid rgba(255,255,255,0.05);
        }
        .dropdown-link:last-child {
            border-bottom: none;
        }
        .dropdown-link:hover {
            background-color: rgba(255,255,255,0.05);
            color: #fdc003;
            padding-left: 24px;
        }
    </style>
</head>
<body class="bg-surface text-on-surface">
<header class="w-full shadow-md bg-white sticky top-0 z-50">
<!-- Top Navbar (Batik Motif) -->
<div class="batik-bg border-b border-slate-500">
<div class="max-w-7xl mx-auto px-4 md:px-6 py-3 flex flex-col md:flex-row items-center justify-between gap-4 md:gap-0">
<!-- Left: Logo -->
<div class="flex items-center justify-between w-full md:w-auto">  
    <a href="http://ppidbalikpapan.test/" class="h-8 md:h-10 w-auto object-contain">
     <img src="{{ asset('logo_ppid bg removed.png') }}" alt="logo" class="h-full w-auto"></a>
<!-- Mobile clock -->
<div class="md:hidden font-headline font-bold text-xs text-primary/80 bg-white/50 px-3 py-1 rounded-full border border-white/20 shadow-sm min-w-fit" id="mobile-clock">
<div class="flex flex-col items-center">
<span class="text-[8px] leading-none opacity-70" id="mobile-date"></span>
<span class="text-[10px] leading-tight" id="mobile-time"></span>
</div>
</div>
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
</header>
<!-- Bottom Navbar (Static with Content Flow) -->
<nav class="bg-slate-950 text-white w-full h-11 overflow-x-visible">
<div class="max-w-7xl mx-auto flex h-full items-center justify-center space-x-1 px-4 whitespace-nowrap">
<a class="nav-hover-line relative px-3 py-3 text-xs font-bold font-headline transition-all text-secondary-container" href="http://ppidbalikpapan.test">Beranda</a>
<div class="group relative h-full flex items-center">
<button class="nav-hover-line relative px-3 py-3 text-xs font-bold font-headline flex items-center gap-0.5">
                    Profil <span class="material-symbols-outlined text-[10px] group-hover:rotate-180 transition-transform">expand_more</span>
</button>
<div class="dropdown-menu bg-slate-900 min-w-[200px] shadow-xl py-2 rounded-b-lg overflow-hidden border border-white/10 font-headline">
<a class="block px-4 py-2 hover:bg-slate-800 text-[11px] transition-colors" href="#">Visi &amp; Misi</a>
<a class="block px-4 py-2 hover:bg-slate-800 text-[11px] transition-colors" href="#">Struktur Organisasi</a>
<a class="block px-4 py-2 hover:bg-slate-800 text-[11px] transition-colors" href="#">Tugas &amp; Fungsi</a>
</div>
</div>
<div class="group relative h-full flex items-center">
<button class="nav-hover-line relative px-3 py-3 text-xs font-bold font-headline flex items-center gap-0.5">
                    Informasi Publik <span class="material-symbols-outlined text-[10px] group-hover:rotate-180 transition-transform">expand_more</span>
</button>
<div class="dropdown-menu bg-slate-900 min-w-[200px] shadow-xl py-2 rounded-b-lg overflow-hidden border border-white/10 font-headline">
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
<div class="dropdown-menu bg-slate-900 min-w-[200px] shadow-xl py-2 rounded-b-lg overflow-hidden border border-white/10 font-headline">
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
<div class="dropdown-menu bg-slate-900 min-w-[200px] shadow-xl py-2 rounded-b-lg overflow-hidden border border-white/10 font-headline">
<a class="block px-4 py-2 hover:bg-slate-800 text-[11px] transition-colors" href="#">Daftar PPID Pelaksana</a>
<a class="block px-4 py-2 hover:bg-slate-800 text-[11px] transition-colors" href="#">Kinerja PPID</a>
</div>
</div>
<a class="nav-hover-line relative px-3 py-3 text-xs font-bold font-headline" href="http://ppidbalikpapan.test/kontak">Kontak</a>
</div>
</nav>
</header>
<main>
<section class="relative py-28 overflow-hidden border-b border-outline-variant/10">
<!-- Background Layer -->
<div class="absolute inset-0 z-0">
<img alt="" class="w-full h-full object-cover opacity-70" src="bppbrmn.png"/>
<div class="absolute inset-0 bg-gradient-to-b from-transparent via-white/80 to-white"></div>
</div>
<div class="max-w-7xl mx-auto px-6 relative z-10">
<nav class="flex mb-4 text-xs font-medium text-outline uppercase tracking-widest gap-2">
<a href="http://ppidbalikpapan.test">Beranda</a>
<span>/</span>
<span class="text-primary">Kontak</span>
</nav>
<h1 class="text-5xl md:text-6xl font-headline font-extrabold text-primary leading-tight">
                    Kontak <span class="text-secondary">Kami</span>
</h1>
<p class="mt-6 text-lg text-on-surface-variant max-w-2xl leading-relaxed">
                    Punya Pertanyaan Berkaitan penyelenggaraan Pemerintah atau ingin tahu lokasi Pemerintah? Tim kami siap membantu memberikan informasi yang Anda butuhkan.                </p>
</div>
</section>
<!-- Main Content -->
<section class="max-w-screen-2xl mx-auto px-8">
<div class="grid grid-cols-1 lg:grid-cols-12 gap-10">
<!-- Left Column: Map & Form -->
<div class="lg:col-span-7 space-y-8">
<!-- Interactive Map Shell -->
<div class="rounded-xl overflow-hidden shadow-lg bg-surface-container-low p-1 group">
<div class="aspect-video w-full rounded-lg overflow-hidden bg-surface-container-highest relative">
<!-- Image representing the map -->
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63821.253001534766!2d116.75573272167965!3d-1.2764074999999773!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df1473bb9404897%3A0x94d96108f98b652c!2sBalikpapan%20Mayor&#39;s%20Office!5e0!3m2!1sen!2ssg!4v1776063788871!5m2!1sen!2ssg" class="w-full h-full border-0" 
    allowfullscreen="" 
    loading="lazy" 
    referrerpolicy="no-referrer-when-downgrade""></iframe>
</div>
</div>
<!-- Contact Form -->
<div class="bg-surface-container-low rounded-xl p-8 md:p-10 shadow-sm">
<div class="mb-8 flex items-center gap-4">
<div class="w-1.5 h-10 bg-secondary-container rounded-full"></div>
<h2 class="text-2xl font-headline font-bold text-primary">Kirim Pesan</h2>
</div>
<form class="space-y-6">
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<div class="space-y-2">
<label class="text-xs font-label font-bold text-outline-variant uppercase tracking-wider">Nama Lengkap</label>
<input class="w-full bg-surface-container-lowest border-none rounded-xl p-4 text-sm focus:ring-2 focus:ring-primary/10 transition-all placeholder:text-outline/40" placeholder="Masukkan nama Anda" type="text"/>
</div>
<div class="space-y-2">
<label class="text-xs font-label font-bold text-outline-variant uppercase tracking-wider">Alamat Email</label>
<input class="w-full bg-surface-container-lowest border-none rounded-xl p-4 text-sm focus:ring-2 focus:ring-primary/10 transition-all placeholder:text-outline/40" placeholder="example@email.com" type="email"/>
</div>
</div>
<div class="space-y-2">
<label class="text-xs font-label font-bold text-outline-variant uppercase tracking-wider">Nomor Telepon</label>
<input class="w-full bg-surface-container-lowest border-none rounded-xl p-4 text-sm focus:ring-2 focus:ring-primary/10 transition-all placeholder:text-outline/40" placeholder="+62 812..." type="tel"/>
</div>
<div class="space-y-2">
<label class="text-xs font-label font-bold text-outline-variant uppercase tracking-wider">Pesan Anda</label>
<textarea class="w-full bg-surface-container-lowest border-none rounded-xl p-4 text-sm focus:ring-2 focus:ring-primary/10 transition-all placeholder:text-outline/40 resize-none" placeholder="Tuliskan pertanyaan atau aspirasi Anda di sini..." rows="5"></textarea>
</div>
<button class="w-full md:w-auto px-10 py-4 bg-error text-white font-headline font-extrabold rounded-xl shadow-lg shadow-error/20 hover:scale-[1.02] active:scale-95 transition-all duration-300 flex items-center justify-center gap-3" type="submit">
<span>KIRIM PESAN</span>
<span class="material-symbols-outlined text-xl">send</span>
</button>
</form>
</div>
</div>
<!-- Right Column: Info -->
<div class="lg:col-span-5 space-y-8">
<!-- Main Office Info -->
<div class="bg-primary text-white rounded-xl p-8 md:p-10 shadow-2xl relative overflow-hidden">
<div class="absolute -right-10 -bottom-10 opacity-5 rotate-12">
<span class="material-symbols-outlined text-[200px]" data-weight="fill">location_city</span>
</div>
<div class="relative z-10">
<h2 class="text-2xl font-headline font-extrabold mb-8 border-b border-white/10 pb-4">Pemerintah Kota Balikpapan</h2>
<div class="space-y-6">
<div class="flex gap-4">
<div class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center shrink-0">
<span class="material-symbols-outlined text-secondary-container">pin_drop</span>
</div>
<div>
<p class="text-[10px] text-white/50 uppercase font-bold tracking-widest mb-1">Alamat Kantor</p>
<p class="text-sm font-medium leading-relaxed">Jl. Jenderal Sudirman No.1, Kel. Klandasan Ulu, Kec. Balikpapan Kota, Kota Balikpapan, Kalimantan Timur 76112</p>
</div>
</div>
<div class="flex gap-4">
<div class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center shrink-0">
<span class="material-symbols-outlined text-secondary-container">call</span>
</div>
<div>
<p class="text-[10px] text-white/50 uppercase font-bold tracking-widest mb-1">Telepon / Fax</p>
<p class="text-lg font-bold">(0542) 421420 / 421071</p>
</div>
</div>
<div class="flex gap-4">
<div class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center shrink-0">
<span class="material-symbols-outlined text-secondary-container">mail</span>
</div>
<div>
<p class="text-[10px] text-white/50 uppercase font-bold tracking-widest mb-1">Email Resmi</p>
<p class="text-sm font-medium">adminkota@balikpapan.go.id</p>
</div>
</div>
</div>
</div>
</div>
<!-- Service Hours -->
<div class="bg-surface-container-low rounded-xl p-8 shadow-sm">
<div class="flex items-center gap-3 mb-6">
<span class="material-symbols-outlined text-primary">schedule</span>
<h3 class="text-lg font-headline font-bold text-primary">Jam Layanan Informasi</h3>
</div>
<div class="space-y-4">
<div class="flex justify-between items-center p-4 bg-surface-container-lowest rounded-lg">
<span class="font-bold text-on-surface text-sm">Senin - Kamis</span>
<span class="text-primary font-headline font-bold">08.00 - 15.30 WITA</span>
</div>
<div class="flex justify-between items-center p-4 bg-surface-container-lowest rounded-lg">
<span class="font-bold text-on-surface text-sm">Jumat</span>
<span class="text-primary font-headline font-bold">08.00 - 11.30 WITA</span>
</div>
<div class="flex justify-between items-center p-4 bg-error-container/30 border border-error/5 rounded-lg">
<span class="font-bold text-error text-sm">Sabtu - Minggu</span>
<span class="px-3 py-1 bg-error text-white text-[10px] font-extrabold rounded-full">LIBUR</span>
</div>
</div>
</div>
<!-- Social Connect -->
<div class="bg-secondary-container rounded-xl p-8 flex flex-col items-center text-center">
<h3 class="font-headline font-extrabold text-on-secondary-container mb-6">Media Sosial Kami</h3>
<div class="flex gap-4">
<a class="w-12 h-12 bg-white rounded-full flex items-center justify-center text-primary shadow-sm hover:translate-y-[-4px] transition-all duration-300" href="#">
<span class="material-symbols-outlined" data-weight="fill">social_leaderboard</span>
</a>
<a class="w-12 h-12 bg-white rounded-full flex items-center justify-center text-primary shadow-sm hover:translate-y-[-4px] transition-all duration-300" href="#">
<span class="material-symbols-outlined" data-weight="fill">camera</span>
</a>
<a class="w-12 h-12 bg-white rounded-full flex items-center justify-center text-primary shadow-sm hover:translate-y-[-4px] transition-all duration-300" href="#">
<span class="material-symbols-outlined" data-weight="fill">alternate_email</span>
</a>
</div>
<p class="mt-6 text-on-secondary-container/70 text-xs font-medium">Ikuti kami untuk informasi terbaru seputar Balikpapan.</p>
</div>
</div>
</div>
</section>
</main>
<!-- Footer -->
<footer class="bg-slate-950 text-white w-full">
<div class="max-w-screen-2xl mx-auto px-8 py-16">
<div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-12">
<div class="md:col-span-1">
<div class="flex items-center gap-3 mb-6">
<div class="w-10 h-10 bg-white rounded-lg p-2">
<img alt="Logo" class="w-full h-full object-contain" data-alt="Small emblem of Balikpapan city on a white square background" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCdHltMLAWHF-RDzr_iXQnP_w-qT1bwS7RXkVy7Yoy99vUQu73-I5xG6Hi5tW55RDIpfIqev4checRLrvGc-xcHL7gxxR4mraS5uxCo4sNXXjNredQ0CWrkYUTIgnKzwWGBGr5NRs-Z-LO40-hqct3u0bDbqK0opj4DmEm_t_Ae4blphfP9i5GBLaXr5Ac2BsKF39OdFL03wJu65Q92YiU1mZh3OzfLbGsJMnxseJTxApGrBTf428_Pxxo4lYexhITporDmTZO7Cli6"/>
</div>
<span class="text-xl font-headline font-extrabold">PPID</span>
</div>
<p class="text-slate-400 text-sm leading-relaxed mb-6">
                        Layanan Pejabat Pengelola Informasi dan Dokumentasi Pemerintah Kota Balikpapan untuk transparansi dan keterbukaan publik.
                    </p>
</div>
<div>
<h4 class="font-headline font-bold text-amber-500 mb-6 uppercase text-xs tracking-widest">Informasi</h4>
<ul class="space-y-3 text-sm text-slate-400">
<li><a class="hover:text-white transition-colors" href="#">Profil PPID</a></li>
<li><a class="hover:text-white transition-colors" href="#">Tugas &amp; Fungsi</a></li>
<li><a class="hover:text-white transition-colors" href="#">Struktur Organisasi</a></li>
<li><a class="hover:text-white transition-colors" href="#">Dasar Hukum</a></li>
</ul>
</div>
<div>
<h4 class="font-headline font-bold text-amber-500 mb-6 uppercase text-xs tracking-widest">Layanan</h4>
<ul class="space-y-3 text-sm text-slate-400">
<li><a class="hover:text-white transition-colors" href="#">Permohonan Informasi</a></li>
<li><a class="hover:text-white transition-colors" href="#">Keberatan Informasi</a></li>
<li><a class="hover:text-white transition-colors" href="#">Penyelesaian Sengketa</a></li>
<li><a class="hover:text-white transition-colors" href="#">Standar Layanan</a></li>
</ul>
</div>
<div>
<h4 class="font-headline font-bold text-amber-500 mb-6 uppercase text-xs tracking-widest">Bantuan</h4>
<ul class="space-y-3 text-sm text-slate-400">
<li><a class="hover:text-white transition-colors" href="#">Kebijakan Privasi</a></li>
<li><a class="hover:text-white transition-colors" href="#">Peta Situs</a></li>
<li><a class="hover:text-white transition-colors" href="#">Kontak Kami</a></li>
<li><a class="hover:text-white transition-colors" href="#">FAQ</a></li>
</ul>
</div>
</div>
<div class="pt-8 border-t border-white/5 flex flex-col md:flex-row justify-between items-center gap-4">
<p class="text-slate-500 text-xs">© 2024 Pemerintah Kota Balikpapan. PPID Layanan Informasi Publik.</p>
<div class="flex gap-6 text-[10px] uppercase font-bold tracking-widest text-slate-500">
<a class="hover:text-amber-500" href="#">Diskominfo</a>
<a class="hover:text-amber-500" href="#">Portal Berita</a>
<a class="hover:text-amber-500" href="#">E-Government</a>
</div>
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
</body></html>