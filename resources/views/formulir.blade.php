<!DOCTYPE html>
<html lang="id">
<head>
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
        .material-symbols-outlined { font-variation-settings: "FILL" 0, "wght" 400, "GRAD" 0, "opsz" 24; }
        html, body { height: auto; font-family: "Inter", sans-serif; overflow-x: hidden; max-width: 100vw; }
        h1, h2, h3, .font-headline { font-family: "Manrope", sans-serif; }
        .batik-bg {
            background-image: linear-gradient(rgba(240, 240, 240, 0.9), rgba(240, 240, 240, 0.9)), url("batik dayak.png");
            background-repeat: repeat;
            background-size: 300px;
        }
        /* Dropdown & Nav Styles */
        .nav-hover-line::after {
            content: ""; position: absolute; bottom: 0; left: 0; width: 0; height: 2px;
            background-color: #fdc003; transition: width 0.3s ease;
        }
        .nav-hover-line:hover::after { width: 100%; }
        .dropdown-menu {
            display: none; position: absolute; top: 100%; left: 0; z-index: 99999;
            min-width: 180px; background-color: #0f172a; border-top: 2px solid #fdc003;
            box-shadow: 0 10px 20px rgba(0,0,0,0.5); border-radius: 0 0 8px 8px;
        }
        .group:hover > .dropdown-menu, .dropdown-menu.open { display: block !important; }
        
        /* Navbar: hidden on mobile, visible on desktop */
        #desktop-nav {
            display: none !important; height: 0 !important; overflow: hidden !important;
        }
        @media (min-width: 768px) {
            #desktop-nav { display: block !important; height: 44px !important; overflow: visible !important; }
        }
    </style>
</head>
<body class="bg-surface text-on-surface">

<header class="w-full shadow-md bg-white sticky top-0 z-50">
    <div class="batik-bg border-b border-slate-500">
        <div class="max-w-7xl mx-auto px-4 md:px-6 py-3 flex flex-col md:flex-row items-center justify-between gap-4 md:gap-0">
            <div class="flex items-center justify-between w-full md:w-auto">  
                <a href="http://ppidbalikpapan.test/" class="h-8 md:h-10 w-auto object-contain">
                    <img src="{{ asset('logo_ppid bg removed.png') }}" alt="logo" class="h-full w-auto">
                </a>
                
                <div class="flex items-center gap-2 md:hidden">
                    <div class="font-headline font-bold text-xs text-primary/80 bg-white/50 px-3 py-1 rounded-full border border-white/20 shadow-sm min-w-fit" id="mobile-clock">
                        <div class="flex flex-col items-center">
                            <span class="text-[8px] leading-none opacity-70" id="mobile-date"></span>
                            <span class="text-[10px] leading-tight" id="mobile-time"></span>
                        </div>
                    </div>
                    <button id="open-mobile-menu" class="text-primary p-1" aria-label="Buka menu">
                        <span class="material-symbols-outlined text-2xl">menu</span>
                    </button>
                </div>
            </div>

            <div class="w-full max-w-md hidden md:block">
                <div class="relative flex items-center">
                    <input class="w-full bg-white/90 border border-slate-300 rounded-full px-4 py-1.5 pr-10 text-xs focus:ring-2 focus:ring-primary focus:border-transparent shadow-inner" placeholder="Cari informasi..." type="text"/>
                    <span class="material-symbols-outlined absolute right-3 text-slate-400 text-lg" data-icon="search">search</span>
                </div>
            </div>

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

    <nav id="desktop-nav" class="bg-slate-950 text-white w-full relative" style="overflow:visible; position:relative; z-index:9999;">
        <div class="max-w-7xl mx-auto flex h-full items-center justify-start md:justify-center space-x-1 px-2 md:px-4 whitespace-nowrap">
            <a class="nav-hover-line relative px-3 py-3 text-xs font-bold font-headline transition-all text-white" href="http://ppidbalikpapan.test">Beranda</a>
            <div class="group relative h-full flex items-center">
                <button class="nav-hover-line relative px-3 py-3 text-xs font-bold font-headline flex items-center gap-0.5">
                    Profil <span class="material-symbols-outlined text-[10px] group-hover:rotate-180 transition-transform">expand_more</span>
                </button>
                <div class="dropdown-menu bg-slate-900 min-w-[200px] shadow-xl py-2 rounded-b-lg border border-white/10 font-headline">
                    <a class="block px-4 py-2 hover:bg-slate-800 text-[11px] transition-colors" href="#">Visi & Misi</a>
                    <a class="block px-4 py-2 hover:bg-slate-800 text-[11px] transition-colors" href="#">Struktur Organisasi</a>
                    <a class="block px-4 py-2 hover:bg-slate-800 text-[11px] transition-colors" href="#">Tugas & Fungsi</a>
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

    <div id="mobile-menu" class="hidden fixed inset-0 bg-slate-950 flex-col overflow-y-auto" style="z-index:99999; top:0; left:0; right:0; bottom:0;">
        <div class="flex items-center justify-between px-5 py-4 border-b border-white/10">
            <span class="text-white font-headline font-bold text-base">Menu</span>
            <button id="close-mobile-menu" class="text-white p-1" aria-label="Tutup menu">
                <span class="material-symbols-outlined text-2xl">close</span>
            </button>
        </div>
        <div class="px-4 py-4 md:hidden">
            <div class="relative flex items-center">
                <input class="w-full bg-white/10 border border-slate-700 text-white rounded-full px-4 py-2 pr-10 text-xs focus:ring-2 focus:ring-secondary-container" placeholder="Cari informasi..." type="text"/>
                <span class="material-symbols-outlined absolute right-3 text-slate-400 text-lg">search</span>
            </div>
        </div>
        <nav class="flex flex-col px-4 pb-4 font-headline text-white">
            <a href="http://ppidbalikpapan.test" class="flex items-center gap-3 px-3 py-3.5 border-b border-white/10 text-sm font-bold">
                <span class="material-symbols-outlined text-base">home</span> Beranda
            </a>
            <div class="border-b border-white/10">
                <button onclick="toggleMobileAccordion('acc-profil')" class="w-full flex items-center justify-between px-3 py-3.5 text-sm font-bold text-white">
                    <span class="flex items-center gap-3"><span class="material-symbols-outlined text-base">badge</span> Profil</span>
                    <span class="material-symbols-outlined text-base transition-transform duration-300" id="icon-acc-profil">expand_more</span>
                </button>
                <div id="acc-profil" class="hidden flex-col bg-white/5 rounded-lg mx-2 mb-2 overflow-hidden">
                    <a href="#" class="block px-5 py-2.5 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Visi & Misi</a>
                    <a href="#" class="block px-5 py-2.5 text-xs text-slate-300 hover:text-secondary-container border-b border-white/5">Struktur Organisasi</a>
                    <a href="#" class="block px-5 py-2.5 text-xs text-slate-300 hover:text-secondary-container">Tugas & Fungsi</a>
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
                <button onclick="toggleMobileAccordion('acc-layanan')" class="w-full flex items-center justify-between px-3 py-3.5 text-sm font-bold text-secondary-container">
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

<footer class="bg-slate-900 text-slate-300">
    <div class="flex flex-col md:flex-row justify-between items-center px-12 py-10 w-full">
        <div class="flex flex-col items-center md:items-start mb-8 md:mb-0">
            <div class="text-lg font-bold text-white mb-2">Pemerintah Kota Balikpapan</div>
            <div class="text-sm leading-relaxed text-slate-400">© 2024 Pemerintah Kota Balikpapan. Hak Cipta Dilindungi Undang-Undang.</div>
        </div>
        <div class="flex gap-8 flex-wrap justify-center">
            <a class="text-slate-400 hover:text-[#fdc003] transition-colors text-sm font-medium" href="#">Kontak Kami</a>
            <a class="text-slate-400 hover:text-[#fdc003] transition-colors text-sm font-medium" href="#">Peta Situs</a>
            <a class="text-slate-400 hover:text-[#fdc003] transition-colors text-sm font-medium" href="#">Kebijakan Privasi</a>
            <a class="text-slate-400 hover:text-[#fdc003] transition-colors text-sm font-medium" href="#">Aksesibilitas</a>
        </div>
        <div class="mt-8 md:mt-0 flex gap-4">
            <div class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center hover:bg-secondary transition-all cursor-pointer">
                <span class="material-symbols-outlined text-white text-xl">share</span>
            </div>
            <div class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center hover:bg-secondary transition-all cursor-pointer">
                <span class="material-symbols-outlined text-white text-xl">location_on</span>
            </div>
        </div>
    </div>
    <div class="h-2 w-full bg-[#fdc003]"></div>
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
</body>
</html>