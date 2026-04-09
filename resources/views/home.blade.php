<!DOCTYPE html>

<html lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>PPID Kota Balikpapan - Layanan Informasi Publik</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries">function updateClock() {
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
        
        // Detect Timezone
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
    updateClock();</script>
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
            font-family: "Inter", sans-serif;
            margin: 0;
            padding: 0;
        }
        h1, h2, h3, .font-headline {
            font-family: "Manrope", sans-serif
        }
        .batik-bg {
            background-image: linear-gradient(rgba(240, 240, 240, 0.9), rgba(240, 240, 240, 0.9)), url(https://lh3.googleusercontent.com/aida/ADBb0ujfrpcUV1V7FdK7queyxCEwAhtyHOSqYG_Fo2lBZURN2lZ8cirN2GV5oN2DlH-PMTOwc16WcTCITVB0zHbY22wWpifJU1FSzO8I37DdIsn88g_h9wg4T_WbUUEjdYvts8Dwf05aD0x8OwsLQPnzDNk05cT_XotfSxMJIo_5v7tv_SmO1Qm7-uO6XwRxFsPlaqCt5lMIT_e6FBDt5yIa7yvwSZRpey_GzSyD46cgOmDoMaCCt1B6xPltDEgOZ5FT8JH68xqQI_0Yrgg);
            background-repeat: repeat;
            background-size: 300px
        }
        /* Custom scrollbar for horizontal nav */
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }
        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
<link rel="icon" type="image/png" href="{{ asset('Kota Balikpapan.png') }}">
</head>
<body class="bg-surface text-on-surface">
<header class="w-full shadow-md bg-white">
    <div class="batik-bg border-b border-slate-200 sticky top-0 z-[100] shadow-sm">
        <div class="max-w-7xl mx-auto px-4 md:px-6 py-3 flex flex-col md:flex-row items-center justify-between gap-4 md:gap-0">
            <div class="flex items-center justify-between w-full md:w-auto">
                <img alt="Logo PPID Balikpapan" class="h-8 md:h-10 w-auto object-contain" src="https://lh3.googleusercontent.com/aida/ADBb0uhJR2DwTfoWDQYEGNjQilFqt1DuyVgkxzNXBFBlDO9llMjC2PlYNVnB2s4BJl2_y2hVAjNsaMjjnKZhnpo5O_eCzVnmkRnVGvHc-SrcsfsNDgBJZfttDuDAKCCXSGXqi-p-tDTyrovusFt9cdgLaUWUb1slW_gFJDgX6Ik4s6Wo3TX0x2FqPCnG-9KDpbxZieFR_E4IIVIUwRuG9Owqy9eY2kD4nsk9ILADGwzcKsmNuIoCC8Wp4zXS8wZtSNk9k0tW49zvPmrHog"/>
                <div class="md:hidden font-headline font-bold text-xs text-primary/80 bg-white/50 px-3 py-1 rounded-full border border-white/20 shadow-sm" id="mobile-clock">
                    <div class="flex flex-col items-center">
                        <span class="text-[8px] leading-none opacity-70" id="mobile-date"></span>
                        <span class="text-[10px] leading-tight" id="mobile-time"></span>
                    </div>
                </div>
            </div>
            
            <div class="w-full max-w-md">
                <div class="relative flex items-center">
                    <input class="w-full bg-white/90 border border-slate-300 rounded-full px-4 py-1.5 pr-10 text-xs focus:ring-2 focus:ring-primary focus:border-transparent shadow-inner" placeholder="Cari informasi..." type="text"/>
                    <span class="material-symbols-outlined absolute right-3 text-slate-400 text-lg">search</span>
                </div>
            </div>
            
            <div class="hidden md:flex items-center">
                <div class="font-headline font-bold text-sm text-primary/80 bg-white/50 px-4 py-1 rounded-full border border-white/20 shadow-sm" id="real-time-clock">
                    <div class="flex flex-col items-center">
                        <span class="text-[10px] leading-none opacity-70" id="desktop-date"></span>
                        <span class="text-sm leading-tight" id="desktop-time"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <nav class="bg-slate-950 text-white overflow-x-auto no-scrollbar">
        <div class="max-w-7xl mx-auto px-4 md:px-6 flex">
            <div class="flex flex-nowrap">
                <a class="whitespace-nowrap px-4 md:px-6 py-3 font-headline font-bold text-sm tracking-wide text-secondary-container border-b-2 border-secondary-container bg-white/5" href="#">Beranda</a>
                <a class="whitespace-nowrap px-4 md:px-6 py-3 font-headline font-bold text-sm tracking-wide text-slate-300 hover:text-white hover:bg-white/10 transition-all" href="#">Profil</a>
                <a class="whitespace-nowrap px-4 md:px-6 py-3 font-headline font-bold text-sm tracking-wide text-slate-300 hover:text-white hover:bg-white/10 transition-all" href="#">Layanan Informasi</a>
                <a class="whitespace-nowrap px-4 md:px-6 py-3 font-headline font-bold text-sm tracking-wide text-slate-300 hover:text-white hover:bg-white/10 transition-all" href="#">Statistik Publik</a>
                <a class="whitespace-nowrap px-4 md:px-6 py-3 font-headline font-bold text-sm tracking-wide text-slate-300 hover:text-white hover:bg-white/10 transition-all" href="#">Data Statistik</a>
                <a class="whitespace-nowrap px-4 md:px-6 py-3 font-headline font-bold text-sm tracking-wide text-slate-300 hover:text-white hover:bg-white/10 transition-all" href="#">PPID Pelaksana</a>
                <a class="whitespace-nowrap px-4 md:px-6 py-3 font-headline font-bold text-sm tracking-wide text-slate-300 hover:text-white hover:bg-white/10 transition-all" href="#">Kontak Kami</a>
            </div>
        </div>
    </nav>
</header>
<main>
<!-- Hero Section -->
<section class="relative min-h-[500px] md:h-[600px] flex items-center bg-gradient-to-br from-[#003f74] via-[#00569c] to-[#1860a6] py-16 md:py-0">
<div class="absolute inset-0 opacity-10 pointer-events-none batik-bg" style="background-size: 600px; filter: invert(1);"></div>
<div class="relative z-10 max-w-7xl mx-auto px-4 md:px-6 w-full">
<div class="max-w-2xl text-center md:text-left mx-auto md:mx-0">
<span class="inline-block bg-secondary-container text-on-secondary-container px-4 py-1.5 rounded-full text-xs md:text-sm font-bold mb-6 tracking-wide uppercase">Portal Resmi PPID</span>
<h1 class="text-4xl md:text-7xl font-extrabold text-white leading-tight mb-6">
                    PPID Kota <br/><span class="text-secondary-container">Balikpapan</span>
</h1>
<p class="text-lg md:text-xl text-primary-fixed leading-relaxed mb-10 max-w-lg mx-auto md:mx-0">
                    Melayani dengan transparan untuk mewujudkan keterbukaan informasi publik bagi masyarakat Kota Balikpapan.
                </p>
<div class="flex flex-col sm:flex-row flex-wrap gap-4 justify-center md:justify-start">
<button class="bg-secondary-container text-on-secondary-container px-8 py-4 rounded-xl font-bold hover:brightness-110 transition-all flex items-center justify-center gap-2 w-full sm:w-auto">
<span class="material-symbols-outlined" data-icon="info">info</span>
                        Layanan Informasi Publik
                    </button>
<button class="bg-white/10 backdrop-blur-md border border-white/20 text-white px-8 py-4 rounded-xl font-bold hover:bg-white/20 transition-all w-full sm:w-auto">
                        Statistik Pelayanan
                    </button>
</div>
</div>
</div>
</section>
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
<a class="z-10 inline-flex items-center gap-2 font-bold text-secondary-container hover:gap-4 transition-all" href="#">
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
<a class="text-primary font-bold text-sm flex items-center gap-1" href="#">Prosedur <span class="material-symbols-outlined text-sm" data-icon="chevron_right">chevron_right</span></a>
</div>
<div class="bg-surface-container-lowest p-6 md:p-8 rounded-xl shadow-sm border border-outline-variant/15 hover:shadow-md transition-all">
<div class="bg-tertiary-container/10 text-tertiary-container w-12 h-12 rounded-full flex items-center justify-center mb-6">
<span class="material-symbols-outlined" data-icon="campaign">campaign</span>
</div>
<h3 class="text-lg md:text-xl font-bold mb-2">Kanal Pengaduan</h3>
<p class="text-on-surface-variant text-sm mb-4">Saluran resmi pengaduan pelayanan pemerintah.</p>
<a class="text-primary font-bold text-sm flex items-center gap-1" href="#">Lapor <span class="material-symbols-outlined text-sm" data-icon="chevron_right">chevron_right</span></a>
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
<!-- Weather & Alerts -->
<div class="bg-blue-50 dark:bg-blue-900/20 p-6 rounded-xl flex items-center gap-4 border border-blue-100/50">
<span class="material-symbols-outlined text-blue-600 text-3xl md:text-4xl" data-icon="cloudy_snowing">cloudy_snowing</span>
<div>
<p class="text-[10px] md:text-xs font-bold text-blue-800 uppercase tracking-widest">Cuaca Hari Ini</p>
<p class="font-headline font-bold text-base md:text-lg">Cerah Berawan, 29°C</p>
</div>
</div>
<div class="bg-amber-50 dark:bg-amber-900/20 p-6 rounded-xl flex items-center gap-4 border border-amber-100/50">
<span class="material-symbols-outlined text-amber-600 text-3xl md:text-4xl" data-icon="security">security</span>
<div>
<p class="text-[10px] md:text-xs font-bold text-amber-800 uppercase tracking-widest">Whistleblower</p>
<p class="font-headline font-bold text-base md:text-lg">Sistem Pelaporan</p>
</div>
</div>
</div>
</section>
<!-- News & Links Section -->
<section class="bg-surface-container-low py-16 md:py-24">
<div class="max-w-7xl mx-auto px-4 md:px-6 grid grid-cols-1 lg:grid-cols-3 gap-12">
<!-- Main News -->
<div class="lg:col-span-2">
<div class="flex flex-col sm:flex-row justify-between items-start sm:items-end mb-10 gap-4 sm:gap-0">
<div>
<h2 class="text-2xl md:text-3xl font-extrabold text-primary mb-2">Berita Kota</h2>
<p class="text-on-surface-variant text-sm md:text-base">Update terkini informasi publik Balikpapan</p>
</div>
<a class="text-primary font-bold hover:underline" href="#">Lihat Semua</a>
</div>
<div class="grid grid-cols-1 gap-8">
<article class="bg-surface-container-lowest rounded-2xl overflow-hidden shadow-sm group">
<div class="flex flex-col md:flex-row h-full">
<div class="w-full md:w-2/5 relative overflow-hidden aspect-video md:aspect-auto">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="Official government meeting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAkxAaH_jf3p6LEeFZ9xrg0S05ax-8QnQug5wZDbl-smspY4cl4Xo1h-OBjJkcRuam6IyPv5W_OM2LJzsAv9uYuiqNvMZm_-guJ_kQHVw1HAc5lIDsjs2ezVMJABuqTJ6xA_Xjs9Y217fZ-OjRi6z-Y7hujTgd0vChZPoLsFzi0GWBrAuXIEPb_RvFsFl-PFkGC99eLb8NWEFDDkljc3k6IKT000T5-svR4VJOAInF2Zf4u5CynQaD3lcY6Ed7X99QeEEk053_H164Z"/>
</div>
<div class="w-full md:w-3/5 p-6 md:p-8 flex flex-col justify-center">
<span class="text-[10px] md:text-xs font-bold text-secondary-fixed-dim uppercase tracking-wider mb-2">Pemerintahan</span>
<h3 class="text-xl md:text-2xl font-bold text-primary mb-4 leading-tight group-hover:text-secondary transition-colors">
                                    Sosialisasi Keterbukaan Informasi Publik di Lingkungan OPD Balikpapan
                                </h3>
<p class="text-on-surface-variant text-sm mb-6 line-clamp-2">
                                    Pemerintah Kota Balikpapan terus mendorong setiap Organisasi Perangkat Daerah untuk meningkatkan standar pelayanan informasi publik demi kepuasan masyarakat.
                                </p>
<div class="flex items-center gap-4 text-[10px] md:text-xs text-outline">
<span class="flex items-center gap-1"><span class="material-symbols-outlined text-sm" data-icon="calendar_today">calendar_today</span> 12 Okt 2023</span>
<span class="flex items-center gap-1"><span class="material-symbols-outlined text-sm" data-icon="person">person</span> Admin PPID</span>
</div>
</div>
</div>
</article>
<div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
<article class="bg-surface-container-lowest p-5 md:p-6 rounded-2xl shadow-sm">
<img class="w-full h-32 md:h-40 object-cover rounded-xl mb-4" data-alt="Statistics" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAgXEVb_eVRmR9TkZ5dhgDad5CIH96oMZE8brzK6N0L4VMyyYZRk39Sap1BWf7dHWoUBiUxvqEZd5W6WY2ncrgHyR5kwxNIjLdUhNsk8vtBYicdDStB7dSQFAruBeyp0ogeuuqvLb2lbjHeQxZtdlhM5j9Ow79LUvkFFZBnx2nvdwgff-fwz8NUtuqSYtobBGouyexjbcwW1CQYKPrne6z4IY3duPb6JGcTN4bdxE335t80ptrLEv28pAdCj8wXgSJ4HIO-Qv7E7JW7"/>
<h4 class="font-bold text-primary mb-2 line-clamp-2 text-sm md:text-base">Laporan Statistik Pelayanan Informasi Triwulan III</h4>
<p class="text-[10px] md:text-xs text-on-surface-variant">20 Sep 2023</p>
</article>
<article class="bg-surface-container-lowest p-5 md:p-6 rounded-2xl shadow-sm">
<img class="w-full h-32 md:h-40 object-cover rounded-xl mb-4" data-alt="Award ceremony" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCt5KKGLhQ00fD-Han0ulVCVw5BjCWo3cE_YzkIO_N8_PBRJPVzLpI5_-P8SNbTspokfEJeCCATptyRK0kB3iBf9cVP284wk85TElszSTww7uh3LgbaTryLordHu_D0dGbOIDdfGo0GNIDKtbw06iLEo8hPc0ilPwBgcVsB5D3pwUK_zJ18gqNgOjHMcrRjnwvIN0mV7b7TS7PEiWu8CgtnFHhrak6dWFv_FAqllCHqYhzaBRZ4_KRYM3HhRr-bnZj04a8t5Lr3h9Ww"/>
<h4 class="font-bold text-primary mb-2 line-clamp-2 text-sm md:text-base">Penerimaan Penghargaan PPID Informatif Tingkat Provinsi</h4>
<p class="text-[10px] md:text-xs text-on-surface-variant">05 Sep 2023</p>
</article>
</div>
</div>
</div>
<!-- Important Links Sidebar -->
<aside>
<h2 class="text-2xl md:text-3xl font-extrabold text-primary mb-10">Tautan Penting</h2>
<div class="space-y-4">
<a class="flex items-center justify-between p-4 md:p-6 bg-surface-container-lowest rounded-xl shadow-sm border border-outline-variant/10 hover:border-primary/30 transition-all group" href="#">
<div class="flex items-center gap-4">
<div class="bg-red-50 p-3 rounded-lg group-hover:bg-red-100 transition-colors">
<span class="material-symbols-outlined text-red-600" data-icon="emergency">emergency</span>
</div>
<div>
<p class="font-bold text-primary text-sm md:text-base">LAPOR!</p>
<p class="text-[10px] md:text-xs text-on-surface-variant">Layanan Aspirasi &amp; Pengaduan</p>
</div>
</div>
<span class="material-symbols-outlined text-outline" data-icon="open_in_new">open_in_new</span>
</a>
<a class="flex items-center justify-between p-4 md:p-6 bg-surface-container-lowest rounded-xl shadow-sm border border-outline-variant/10 hover:border-primary/30 transition-all group" href="#">
<div class="flex items-center gap-4">
<div class="bg-blue-50 p-3 rounded-lg group-hover:bg-blue-100 transition-colors">
<span class="material-symbols-outlined text-blue-600" data-icon="school">school</span>
</div>
<div>
<p class="font-bold text-primary text-sm md:text-base">Beasiswa Pemkot</p>
<p class="text-[10px] md:text-xs text-on-surface-variant">Program Bantuan Pendidikan</p>
</div>
</div>
<span class="material-symbols-outlined text-outline" data-icon="open_in_new">open_in_new</span>
</a>
<a class="flex items-center justify-between p-4 md:p-6 bg-surface-container-lowest rounded-xl shadow-sm border border-outline-variant/10 hover:border-primary/30 transition-all group" href="#">
<div class="flex items-center gap-4">
<div class="bg-emerald-50 p-3 rounded-lg group-hover:bg-emerald-100 transition-colors">
<span class="material-symbols-outlined text-emerald-600" data-icon="groups">groups</span>
</div>
<div>
<p class="font-bold text-primary text-sm md:text-base">PPDB Online</p>
<p class="text-[10px] md:text-xs text-on-surface-variant">Penerimaan Peserta Didik Baru</p>
</div>
</div>
<span class="material-symbols-outlined text-outline" data-icon="open_in_new">open_in_new</span>
</a>
<a class="flex items-center justify-between p-4 md:p-6 bg-surface-container-lowest rounded-xl shadow-sm border border-outline-variant/10 hover:border-primary/30 transition-all group" href="#">
<div class="flex items-center gap-4">
<div class="bg-amber-50 p-3 rounded-lg group-hover:bg-amber-100 transition-colors">
<span class="material-symbols-outlined text-amber-600" data-icon="database">database</span>
</div>
<div>
<p class="font-bold text-primary text-sm md:text-base">Data Terbuka</p>
<p class="text-[10px] md:text-xs text-on-surface-variant">Portal Open Data Balikpapan</p>
</div>
</div>
<span class="material-symbols-outlined text-outline" data-icon="open_in_new">open_in_new</span>
</a>
</div>
<div class="mt-8 bg-primary-container p-6 md:p-8 rounded-2xl text-on-primary-container relative overflow-hidden">
<h4 class="text-lg md:text-xl font-bold mb-2">Survey Kepuasan</h4>
<p class="text-xs md:text-sm opacity-80 mb-6">Bantu kami meningkatkan kualitas layanan informasi publik.</p>
<button class="bg-white text-primary font-bold px-6 py-3 rounded-xl shadow-lg relative z-10 w-full sm:w-auto">Mulai Survey</button>
<span class="material-symbols-outlined absolute -right-4 -bottom-4 text-7xl md:text-8xl opacity-10" data-icon="sentiment_very_satisfied">sentiment_very_satisfied</span>
</div>
</aside>
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
<footer class="bg-slate-50 dark:bg-slate-900 w-full pt-16 md:pt-20 pb-8 border-t border-slate-200 dark:border-slate-800">
<div class="grid grid-cols-1 md:grid-cols-4 gap-12 max-w-7xl mx-auto px-4 md:px-6 font-['Inter'] text-sm leading-relaxed">
<!-- Brand & Map -->
<div class="md:col-span-2">
<div class="text-xl md:text-2xl font-bold text-blue-900 dark:text-blue-100 mb-6 font-headline">PPID Kota Balikpapan</div>
<p class="text-slate-600 dark:text-slate-400 max-w-md mb-8">
                Pejabat Pengelola Informasi dan Dokumentasi (PPID) Utama Pemerintah Kota Balikpapan bertanggung jawab untuk penyimpanan, pendokumentasian, penyediaan, dan pelayanan informasi publik.
            </p>
<div class="rounded-2xl overflow-hidden shadow-sm aspect-video border border-slate-200">
<img class="w-full h-full object-cover" data-alt="Map view" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDjpopvFvbZ7IspCxsCVumCXpPO-yRLQ3GXptmxjhZDFBDme1dxw4a4vWVI7ntBn1OAXjN5QKL5BUFU4Y7vomE-IgDXVREk68eApo7lJd71pr3PSsb19ee_y4gvzeKtcodCwFnsGI9BZByfat4Qa9txdoC81ONhbhsgG6pApDYseCDI5EpsTZ5ZJvH6DB-acjHGnWWWrOe_UmpzdNbD9yS9pHu5_jn86fnPdJqcIBkhWAnVVrXIvM_oRWPgNp7KmzvbILMEsEY_yvC6"/>
</div>
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
<div class="mt-8 flex gap-4">
<a class="w-10 h-10 rounded-full bg-slate-200 dark:bg-slate-800 flex items-center justify-center hover:bg-primary hover:text-white transition-all" href="#">
<span class="material-symbols-outlined text-lg" data-icon="facebook">social_leaderboard</span>
</a>
<a class="w-10 h-10 rounded-full bg-slate-200 dark:bg-slate-800 flex items-center justify-center hover:bg-primary hover:text-white transition-all" href="#">
<span class="material-symbols-outlined text-lg" data-icon="photo_camera">photo_camera</span>
</a>
<a class="w-10 h-10 rounded-full bg-slate-200 dark:bg-slate-800 flex items-center justify-center hover:bg-primary hover:text-white transition-all" href="#">
<span class="material-symbols-outlined text-lg" data-icon="alternate_email">alternate_email</span>
</a>
</div>
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
<script>function updateClock() {
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
        
        // Detect Timezone
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
    updateClock();</script>
</body></html>