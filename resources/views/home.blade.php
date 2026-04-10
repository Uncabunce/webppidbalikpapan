<!DOCTYPE html>

<html lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>PPID Kota Balikpapan - Layanan Informasi Publik</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;700;800&amp;family=Inter:wght@400;500;600&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        function updateClock() {
            const now = new Date();
            
            const days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
            const months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
            const dayName = days[now.getDay()];
            const dateStr = `${now.getDate()} ${months[now.getMonth()]} ${now.getFullYear()}`;
            const fullDateString = `${dayName}, ${dateStr}`;

            const hours = String(now.getHours()).padStart(2, '0');
            const minutes = String(now.getMinutes()).padStart(2, '0');
            const seconds = String(now.getSeconds()).padStart(2, '0');
            
            const offset = -now.getTimezoneOffset() / 60;
            let tz = 'WITA';
            if (offset === 7) tz = 'WIB';
            else if (offset === 8) tz = 'WITA';
            else if (offset === 9) tz = 'WIT';
            else tz = 'UTC' + (offset >= 0 ? '+' + offset : offset);

            const timeString = `${hours}:${minutes}:${seconds} ${tz}`;
            
            const desktopClock = document.getElementById('real-time-clock');
            const mobileClock = document.getElementById('mobile-clock');
            
            [desktopClock, mobileClock].forEach(clock => {
                if (clock) {
                    const dateEl = clock.querySelector('.date-line');
                    const timeEl = clock.querySelector('.time-line');
                    if (dateEl) dateEl.textContent = fullDateString;
                    if (timeEl) timeEl.textContent = timeString;
                }
            });
        }

        function updateWeather() {
            const statuses = ['Cerah', 'Cerah Berawan', 'Berawan', 'Hujan Ringan'];
            const icons = ['sunny', 'cloudy_snowing', 'cloud', 'rainy'];
            
            const randomIdx = Math.floor(Math.random() * statuses.length);
            // Requested range: 29-32°C
            const temp = Math.floor(Math.random() * (32 - 29 + 1)) + 29;
            
            const weatherStatusEl = document.getElementById('weather-status');
            const weatherIconEl = document.getElementById('weather-icon');
            
            if (weatherStatusEl) {
                weatherStatusEl.textContent = `${statuses[randomIdx]}, ${temp}°C`;
            }
            if (weatherIconEl) {
                weatherIconEl.setAttribute('data-icon', icons[randomIdx]);
                weatherIconEl.textContent = icons[randomIdx];
            }
        }

        setInterval(updateClock, 1000);
        updateClock();
        
        setInterval(updateWeather, 60000); // Update every minute for 'real-time' feel in demo
        updateWeather();
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: "FILL" 0, "wght" 400, "GRAD" 0, "opsz" 24
        }
        body {
            font-family: "Inter", sans-serif;
            overflow-x: hidden
        }
        h1, h2, h3, .font-headline {
            font-family: "Manrope", sans-serif
        }
        .batik-bg {
            background-image: linear-gradient(rgba(245, 247, 248, 0.9), rgba(245, 247, 248, 0.9)), url(https://lh3.googleusercontent.com/aida/ADBb0ujClcSRSWzjgS0QEzP4cera2ovtRCK4mrvxJiMHLvRJrDW6MbUgHIbGPA0m4yLiQGUXUtvW_1zQbk05ZItZRvyiJ9yb95QKLluHksaqLhl_6OdKmArwNECGtEvSkepI95aoRc69trfVXigCCsAN12D2rulw1CeWdWNNPWuh1WBHZub4_KlYtPH8ABVjZ3xALo4vhyIsYiIsmRUoe2GNvMyeQbMFyQyptpnMnowfwAeBFUODO15_NFCJRX2FkqVvXGMhY38WCJeoGjQ);
            background-repeat: repeat;
            background-size: 300px
        }
        .no-scrollbar::-webkit-scrollbar {
            display: none
        }
        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none
        }
    </style>
</head>
<body class="bg-surface text-on-surface">
<header class="w-full shadow-md bg-white">
<!-- Top Navbar (Batik Motif) - STICKY -->
<div class="batik-bg border-b border-slate-200 sticky top-0 z-[1000]">
<div class="max-w-7xl mx-auto px-4 md:px-6 py-3 flex flex-col md:grid md:grid-cols-3 items-center gap-4 md:gap-0">
<!-- Left: Logo -->
<div class="flex items-center justify-between md:justify-start w-full">
<img alt="Logo PPID Balikpapan" class="h-10 md:h-12 w-auto object-contain" src="https://lh3.googleusercontent.com/aida/ADBb0ujiUM2Mq9IpyjNOf7or_L7aZlUAFKuI-LrOweY94wn4iNnR_pvACrzfoAZjXHxcOP_303eg1C8pt10eTb6TTy0xTt7cYXqAjN_Nemx5harxIGI56eLMSfTC0Gzs9_atLBTgh6yoPE8KAFePQIGxyt7AIZ2c1SJryFLEVUglvT4d0_0aTCF_U6ahheJvpu2Rg3wlzhp9E-p5CTnp3bGLMOVtlUNZnB48Zwuq7a7PEvpLARDFj9iYxGQLxQ8L4pgjDPrbKMV7wwapSvQ"/>
<!-- Mobile clock -->
<div class="md:hidden font-headline font-bold text-[10px] text-primary bg-white/50 px-2 py-1 rounded-lg border border-white/20 shadow-sm text-center" id="mobile-clock">
<div class="date-line"></div>
<div class="time-line"></div>
</div>
</div>
<!-- Center: Search Bar -->
<div class="w-full flex justify-center">
<div class="relative flex items-center w-full max-w-[320px]">
<input class="w-full bg-white/90 border border-slate-300 rounded-full px-4 py-2 pr-10 text-xs focus:ring-2 focus:ring-primary focus:border-transparent shadow-inner" placeholder="Cari informasi..." type="text"/>
<span class="material-symbols-outlined absolute right-3 text-slate-400 text-lg" data-icon="search">search</span>
</div>
</div>
<!-- Right: Clock -->
<div class="hidden md:flex items-center justify-end w-full">
<div class="font-headline font-bold text-primary bg-white/50 px-6 py-1.5 rounded-xl border border-white/20 shadow-sm text-right flex flex-col min-w-[180px]" id="real-time-clock">
<div class="date-line text-[10px] leading-tight opacity-80 uppercase tracking-wider"></div>
<div class="time-line text-sm leading-tight"></div>
</div>
</div>
</div>
</div>
<!-- Bottom Navbar (Black) - NOT STICKY -->
<nav class="bg-slate-950 text-white overflow-x-auto no-scrollbar">
<div class="max-w-7xl mx-auto px-4 md:px-6 flex">
<div class="flex flex-nowrap md:gap-0">
<a class="whitespace-nowrap px-4 md:px-6 py-3 font-headline font-bold text-sm tracking-wide text-secondary-container border-b-2 border-secondary-container bg-white/5" href="#">Beranda</a>
<a class="whitespace-nowrap px-4 md:px-6 py-3 font-headline font-bold text-sm tracking-wide text-slate-300 hover:text-white hover:bg-white/10 transition-all" href="#">Profil</a>
<a class="whitespace-nowrap px-4 md:px-6 py-3 font-headline font-bold text-sm tracking-wide text-slate-300 hover:text-white hover:bg-white/10 transition-all" href="#">Informasi Publik</a>
<a class="whitespace-nowrap px-4 md:px-6 py-3 font-headline font-bold text-sm tracking-wide text-slate-300 hover:text-white hover:bg-white/10 transition-all" href="#">Layanan Informasi</a>
<a class="whitespace-nowrap px-4 md:px-6 py-3 font-headline font-bold text-sm tracking-wide text-slate-300 hover:text-white hover:bg-white/10 transition-all" href="#">Data Statistik</a>
<a class="whitespace-nowrap px-4 md:px-6 py-3 font-headline font-bold text-sm tracking-wide text-slate-300 hover:text-white hover:bg-white/10 transition-all" href="#">PPID Pelaksana</a>
<a class="whitespace-nowrap px-4 md:px-6 py-3 font-headline font-bold text-sm tracking-wide text-slate-300 hover:text-white hover:bg-white/10 transition-all" href="#">Kontak</a>

</div>
</div>
</nav>
</header>
<main class="relative">
<!-- Hero Section -->
<section class="relative min-h-[500px] md:h-[600px] flex items-center overflow-hidden">
    <img src="{{ asset('images/bg_ppidbpp.jpg') }}" 
         class="absolute inset-0 w-full h-full object-cover z-0" 
         alt="Banner PPID">
    
    <div class="absolute inset-0 bg-blue-900/20 z-10"></div>

    <div class="container mx-auto relative z-20">
        </div>
</section>
<!-- Service Quick Links - Bento Grid -->
<section class="py-16 md:py-24 max-w-7xl mx-auto px-4 md:px-6">
<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
<!-- Main Card - Adjusted to Dark Blue -->
<div class="sm:col-span-2 bg-[#003f74] text-white p-6 md:p-8 rounded-xl flex flex-col justify-between relative overflow-hidden group min-h-[250px]">
<div class="z-10">
<div class="bg-white/10 w-14 h-14 rounded-full flex items-center justify-center mb-6">
<span class="material-symbols-outlined text-white" data-icon="description">description</span>
</div>
<h3 class="text-xl md:text-2xl font-bold mb-2">Formulir Permohonan</h3>
<p class="text-blue-100/80 mb-6 text-sm md:text-base">Ajukan permintaan informasi publik secara online dengan mudah dan cepat.</p>
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
<div class="bg-blue-50 p-6 rounded-xl flex flex-col justify-between border border-blue-100/50">
<div class="flex items-center justify-between mb-2">
<div class="flex items-center gap-3">
<div class="bg-white/50 p-2 rounded-lg shadow-sm flex items-center justify-center">
<span class="material-symbols-outlined text-blue-600 text-3xl" data-icon="cloudy_snowing" id="weather-icon">cloudy_snowing</span>
</div>
<div>
<p class="text-[10px] font-bold text-blue-800 uppercase tracking-widest">Cuaca Balikpapan</p>
<p class="font-headline font-bold text-base md:text-lg text-slate-800" id="weather-status">Memuat...</p>
</div>
</div>
<div class="hidden sm:flex flex-col items-end">
<span class="text-[10px] font-semibold text-blue-500 uppercase tracking-tighter">Live Update</span>
<div class="w-2 h-2 rounded-full bg-blue-500 animate-pulse"></div>
</div>
</div>
<div class="mt-auto">
<a class="inline-flex items-center gap-1.5 px-3 py-1.5 bg-blue-100/50 hover:bg-blue-200/50 rounded-full transition-colors text-[10px] text-blue-700 font-bold border border-blue-200/50" href="https://www.bmkg.go.id/cuaca/prakiraan-cuaca/64.71" target="_blank">
        SUMBER: BMKG <span class="material-symbols-outlined text-[12px]" data-icon="open_in_new">open_in_new</span>
</a>
</div>
</div>
<div class="bg-amber-50 p-6 rounded-xl flex items-center gap-4 border border-amber-100/50">
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
<img alt="Official government meeting" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAkxAaH_jf3p6LEeFZ9xrg0S05ax-8QnQug5wZDbl-smspY4cl4Xo1h-OBjJkcRuam6IyPv5W_OM2LJzsAv9uYuiqNvMZm_-guJ_kQHVw1HAc5lIDsjs2ezVMJABuqTJ6xA_Xjs9Y217fZ-OjRi6z-Y7hujTgd0vChZPoLsFzi0GWBrAuXIEPb_RvFsFl-PFkGC99eLb8NWEFDDkljc3k6IKT000T5-svR4VJOAInF2Zf4u5CynQaD3lcY6Ed7X99QeEEk053_H164Z"/>
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
<img alt="Statistics" class="w-full h-32 md:h-40 object-cover rounded-xl mb-4" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAgXEVb_eVRmR9TkZ5dhgDad5CIH96oMZE8brzK6N0L4VMyyYZRk39Sap1BWf7dHWoUBiUxvqEZd5W6WY2ncrgHyR5kwxNIjLdUhNsk8vtBYicdDStB7dSQFAruBeyp0ogeuuqvLb2lbjHeQxZtdlhM5j9Ow79LUvkFFZBnx2nvdwgff-fwz8NUtuqSYtobBGouyexjbcwW1CQYKPrne6z4IY3duPb6JGcTN4bdxE335t80ptrLEv28pAdCj8wXgSJ4HIO-Qv7E7JW7"/>
<h4 class="font-bold text-primary mb-2 line-clamp-2 text-sm md:text-base">Laporan Statistik Pelayanan Informasi Triwulan III</h4>
<p class="text-[10px] md:text-xs text-on-surface-variant">20 Sep 2023</p>
</article>
<article class="bg-surface-container-lowest p-5 md:p-6 rounded-2xl shadow-sm">
<img alt="Award ceremony" class="w-full h-32 md:h-40 object-cover rounded-xl mb-4" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCt5KKGLhQ00fD-Han0ulVCVw5BjCWo3cE_YzkIO_N8_PBRJPVzLpI5_-P8SNbTspokfEJeCCATptyRK0kB3iBf9cVP284wk85TElszSTww7uh3LgbaTryLordHu_D0dGbOIDdfGo0GNIDKtbw06iLEo8hPc0ilPwBgcVsB5D3pwUK_zJ18gqNgOjHMcrRjnwvIN0mV7b7TS7PEiWu8CgtnFHhrak6dWFv_FAqllCHqYhzaBRZ4_KRYM3HhRr-bnZj04a8t5Lr3h9Ww"/>
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
<!-- Survey Kepuasan - Adjusted to Blue Accent -->
<div class="mt-8 bg-[#003f74] p-6 md:p-8 rounded-2xl text-white relative overflow-hidden">
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
<img alt="Map view" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDjpopvFvbZ7IspCxsCVumCXpPO-yRLQ3GXptmxjhZDFBDme1dxw4a4vWVI7ntBn1OAXjN5QKL5BUFU4Y7vomE-IgDXVREk68eApo7lJd71pr3PSsb19ee_y4gvzeKtcodCwFnsGI9BZByfat4Qa9txdoC81ONhbhsgG6pApDYseCDI5EpsTZ5ZJvH6DB-acjHGnWWWrOe_UmpzdNbD9yS9pHu5_jn86fnPdJqcIBkhWAnVVrXIvM_oRWPgNp7KmzvbILMEsEY_yvC6"/>
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
<span class="material-symbols-outlined text-lg" data-icon="social_leaderboard">social_leaderboard</span>
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
<script>
        function updateClock() {
            const now = new Date();
            
            const days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
            const months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
            const dayName = days[now.getDay()];
            const dateStr = `${now.getDate()} ${months[now.getMonth()]} ${now.getFullYear()}`;
            const fullDateString = `${dayName}, ${dateStr}`;

            const hours = String(now.getHours()).padStart(2, '0');
            const minutes = String(now.getMinutes()).padStart(2, '0');
            const seconds = String(now.getSeconds()).padStart(2, '0');
            
            const offset = -now.getTimezoneOffset() / 60;
            let tz = 'WITA';
            if (offset === 7) tz = 'WIB';
            else if (offset === 8) tz = 'WITA';
            else if (offset === 9) tz = 'WIT';
            else tz = 'UTC' + (offset >= 0 ? '+' + offset : offset);

            const timeString = `${hours}:${minutes}:${seconds} ${tz}`;
            
            const desktopClock = document.getElementById('real-time-clock');
            const mobileClock = document.getElementById('mobile-clock');
            
            [desktopClock, mobileClock].forEach(clock => {
                if (clock) {
                    const dateEl = clock.querySelector('.date-line');
                    const timeEl = clock.querySelector('.time-line');
                    if (dateEl) dateEl.textContent = fullDateString;
                    if (timeEl) timeEl.textContent = timeString;
                }
            });
        }

        function updateWeather() {
            const statuses = ['Cerah', 'Cerah Berawan', 'Berawan', 'Hujan Ringan'];
            const icons = ['sunny', 'cloudy_snowing', 'cloud', 'rainy'];
            
            const randomIdx = Math.floor(Math.random() * statuses.length);
            // Requested range: 29-32°C
            const temp = Math.floor(Math.random() * (32 - 29 + 1)) + 29;
            
            const weatherStatusEl = document.getElementById('weather-status');
            const weatherIconEl = document.getElementById('weather-icon');
            
            if (weatherStatusEl) {
                weatherStatusEl.textContent = `${statuses[randomIdx]}, ${temp}°C`;
            }
            if (weatherIconEl) {
                weatherIconEl.setAttribute('data-icon', icons[randomIdx]);
                weatherIconEl.textContent = icons[randomIdx];
            }
        }

        setInterval(updateClock, 1000);
        updateClock();
        
        setInterval(updateWeather, 60000); // Update every minute for 'real-time' feel in demo
        updateWeather();
    </script>
</body></html>