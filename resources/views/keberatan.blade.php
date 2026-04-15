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
        .dropdown-content { 
            display: none; 
            opacity: 0;
            transform: translateY(-10px) scaleY(0.95);
            transform-origin: top; 
            transition: opacity 0.2s ease-out, transform 0.2s ease-out;
        }
        .dropdown-content.show { 
            display: block; 
            opacity: 1;
            transform: translateY(0) scaleY(1);
        }
        .rotate-180 { transform: rotate(180deg); }
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
<!-- Bottom Navbar (Black) -->
<nav class="bg-black text-white shadow-lg">
<div class="max-w-7xl mx-auto px-6">
<ul class="flex items-center gap-10 font-headline text-sm font-semibold tracking-wide py-3">
<li><a class="hover:text-secondary-container transition-colors" href="http://ppidbalikpapan.test/">Beranda</a></li>
<li><a class="hover:text-secondary-container transition-colors" href="#">Profil</a></li>
<li><a class="hover:text-secondary-container transition-colors" href="#">Informasi Publik</a></li>
<li><a class="hover:text-secondary-container transition-colors" href="#">Layanan Informasi</a></li>
<li><a class="hover:text-secondary-container transition-colors" href="http://ppidbalikpapan.test/news">Berita</a></li>
<li><a class="hover:text-secondary-container transition-colors" href="#">Data Statistik</a></li>
<li><a class="hover:text-secondary-container transition-colors" href="">PPID Pelaksana</a></li>
<li><a class="hover:text-secondary-container transition-colors" href="#kontak">Kontak</a></li>
<li class="relative">
</ul>
</div>
</nav>
</header>
<main class="pt-28 pb-20 min-h-screen">
<div class="max-w-4xl mx-auto px-6">
<div class="mb-12">
<div class="inline-block px-4 py-1.5 bg-secondary-container text-on-secondary-container rounded-full text-xs font-bold tracking-widest uppercase mb-4">Layanan Publik</div>
<h1 class="text-4xl md:text-5xl font-extrabold text-primary tracking-tight leading-tight mb-4">Permohonan Informasi Publik</h1>
<p class="text-lg text-on-surface-variant max-w-2xl leading-relaxed">Sampaikan permohonan informasi Anda melalui formulir resmi PPID Kota Balikpapan sesuai dengan UU No. 14 Tahun 2008.</p>
</div>
<form class="space-y-8">
<!-- Section 1: DATA PEMOHON INFORMASI -->
<section class="form-card bg-surface-container-lowest p-8 rounded-xl shadow-[0_32px_32px_-4px_rgba(25,28,29,0.06)]">
<div class="flex items-center gap-3 mb-8">
<div class="w-10 h-10 rounded-full bg-primary flex items-center justify-center text-on-primary font-bold">I</div>
<h2 class="text-xl font-bold text-primary uppercase">Data Pemohon Informasi</h2>
</div>
<div class="space-y-6">
<div class="grid grid-cols-1 md:grid-cols-3 items-center gap-4">
<label class="text-sm font-bold text-primary">Jenis Pemohon</label>
<div class="md:col-span-2">
<div class="relative w-full group">
<button class="w-full flex justify-between items-center bg-surface-container-high border-none rounded-lg px-4 py-3 focus:ring-2 focus:ring-primary text-left" onclick="this.nextElementSibling.classList.toggle('show'); this.querySelector('.arrow').classList.toggle('rotate-180')" type="button">
<span class="selected-text">-- pilih --</span>
<span class="material-symbols-outlined arrow transition-transform">expand_more</span>
</button>
<div class="dropdown-content absolute left-0 right-0 top-full mt-1 bg-white border border-outline-variant rounded-lg shadow-xl z-10 overflow-hidden">
<div class="px-4 py-3 hover:bg-primary hover:text-white cursor-pointer transition-colors" onclick="let container=this.closest('.relative'); container.querySelector('.selected-text').innerText=this.innerText; container.querySelector('.dropdown-content').classList.remove('show'); container.querySelector('.arrow').classList.remove('rotate-180')">-- pilih --</div>
<div class="px-4 py-3 hover:bg-primary hover:text-white cursor-pointer transition-colors" onclick="let container=this.closest('.relative'); container.querySelector('.selected-text').innerText=this.innerText; container.querySelector('.dropdown-content').classList.remove('show'); container.querySelector('.arrow').classList.remove('rotate-180')">Perorangan</div>
<div class="px-4 py-3 hover:bg-primary hover:text-white cursor-pointer transition-colors" onclick="let container=this.closest('.relative'); container.querySelector('.selected-text').innerText=this.innerText; container.querySelector('.dropdown-content').classList.remove('show'); container.querySelector('.arrow').classList.remove('rotate-180')">Kelompok Orang</div>
<div class="px-4 py-3 hover:bg-primary hover:text-white cursor-pointer transition-colors" onclick="let container=this.closest('.relative'); container.querySelector('.selected-text').innerText=this.innerText; container.querySelector('.dropdown-content').classList.remove('show'); container.querySelector('.arrow').classList.remove('rotate-180')">Badan Hukum</div>
</div>
</div>
</div>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 items-center gap-4">
<label class="text-sm font-bold text-primary">Jenis Identitas</label>
<div class="md:col-span-2">
<div class="relative w-full group">
<button class="w-full flex justify-between items-center bg-surface-container-high border-none rounded-lg px-4 py-3 focus:ring-2 focus:ring-primary text-left" onclick="this.nextElementSibling.classList.toggle('show'); this.querySelector('.arrow').classList.toggle('rotate-180')" type="button">
<span class="selected-text">-- pilih --</span>
<span class="material-symbols-outlined arrow transition-transform">expand_more</span>
</button>
<div class="dropdown-content absolute left-0 right-0 top-full mt-1 bg-white border border-outline-variant rounded-lg shadow-xl z-10 overflow-hidden">
<div class="px-4 py-3 hover:bg-primary hover:text-white cursor-pointer transition-colors" onclick="let container=this.closest('.relative'); container.querySelector('.selected-text').innerText=this.innerText; container.querySelector('.dropdown-content').classList.remove('show'); container.querySelector('.arrow').classList.remove('rotate-180')">-- pilih --</div>
<div class="px-4 py-3 hover:bg-primary hover:text-white cursor-pointer transition-colors" onclick="let container=this.closest('.relative'); container.querySelector('.selected-text').innerText=this.innerText; container.querySelector('.dropdown-content').classList.remove('show'); container.querySelector('.arrow').classList.remove('rotate-180')">KTP</div>
<div class="px-4 py-3 hover:bg-primary hover:text-white cursor-pointer transition-colors" onclick="let container=this.closest('.relative'); container.querySelector('.selected-text').innerText=this.innerText; container.querySelector('.dropdown-content').classList.remove('show'); container.querySelector('.arrow').classList.remove('rotate-180')">Anggaran Dasar yang disahkan oleh Pejabat</div>
<div class="px-4 py-3 hover:bg-primary hover:text-white cursor-pointer transition-colors" onclick="let container=this.closest('.relative'); container.querySelector('.selected-text').innerText=this.innerText; container.querySelector('.dropdown-content').classList.remove('show'); container.querySelector('.arrow').classList.remove('rotate-180')">Surat Kuasa</div>
</div>
</div>
</div>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 items-center gap-4">
<label class="text-sm font-bold text-primary">No. Identitas</label>
<div class="md:col-span-2">
<input class="w-full bg-surface-container-high border-none rounded-lg px-4 py-3 focus:ring-2 focus:ring-primary" type="text"/>
</div>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 items-center gap-4">
<label class="text-sm font-bold text-primary">Nama Lengkap</label>
<div class="md:col-span-2">
<input class="w-full bg-surface-container-high border-none rounded-lg px-4 py-3 focus:ring-2 focus:ring-primary" type="text"/>
</div>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 items-start gap-4">
<label class="text-sm font-bold text-primary mt-3">Alamat</label>
<div class="md:col-span-2">
<textarea class="w-full bg-surface-container-high border-none rounded-lg px-4 py-3 focus:ring-2 focus:ring-primary" rows="3"></textarea>
</div>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 items-start gap-4">
<label class="text-sm font-bold text-primary mt-3">Email</label>
<div class="md:col-span-2">
<input class="w-full bg-surface-container-high border-none rounded-lg px-4 py-3 focus:ring-2 focus:ring-primary mb-1" type="email"/>
<p class="text-xs text-on-surface-variant font-medium italic">* email harus aktif</p>
</div>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 items-center gap-4">
<label class="text-sm font-bold text-primary">No. Telp</label>
<div class="md:col-span-2">
<input class="w-full bg-surface-container-high border-none rounded-lg px-4 py-3 focus:ring-2 focus:ring-primary" type="tel"/>
</div>
</div>
</div>
</section>
<!-- Section 2: INFORMASI YANG DIBUTUHKAN -->
<section class="form-card bg-surface-container-lowest p-8 rounded-xl shadow-[0_32px_32px_-4px_rgba(25,28,29,0.06)]">
<div class="flex items-center gap-3 mb-8">
<div class="w-10 h-10 rounded-full bg-primary flex items-center justify-center text-on-primary font-bold">II</div>
<h2 class="text-xl font-bold text-primary uppercase">Informasi Yang Dibutuhkan</h2>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 items-start gap-4">
<label class="text-sm font-bold text-primary mt-3">Informasi Yang Dibutuhkan</label>
<div class="md:col-span-2">
<textarea class="w-full bg-surface-container-high border-none rounded-lg px-4 py-3 focus:ring-2 focus:ring-primary" placeholder="Jelaskan secara spesifik informasi yang Anda minta..." rows="8"></textarea>
</div>
</div>
</section>
<!-- Section 3: Identity Document Upload -->
<section class="form-card bg-surface-container-lowest p-8 rounded-xl shadow-[0_32px_32px_-4px_rgba(25,28,29,0.06)]">
<div class="flex items-center gap-3 mb-8">
<div class="w-10 h-10 rounded-full bg-primary flex items-center justify-center text-on-primary font-bold">III</div>
<h2 class="text-xl font-bold text-primary uppercase">Unggah Identitas</h2>
</div>
<div class="flex flex-col md:flex-row items-center gap-8">
<div class="w-full md:w-1/2 border-2 border-dashed border-outline-variant rounded-xl p-8 text-center bg-surface-container-low hover:bg-surface-container transition-colors cursor-pointer group">
<span class="material-symbols-outlined text-4xl text-outline group-hover:scale-110 transition-transform mb-2">cloud_upload</span>
<p class="text-sm font-bold text-primary mb-1">Unggah KTP / Passport / Akta</p>
<p class="text-xs text-on-surface-variant">Format: JPG, PNG, PDF (Maks. 2MB)</p>
<input class="hidden" type="file"/>
</div>
<div class="w-full md:w-1/2">
<div class="bg-primary-fixed p-4 rounded-xl">
<p class="text-sm font-medium text-on-primary-fixed-variant leading-relaxed">
<span class="material-symbols-outlined align-middle mr-1 text-base">info</span>
                                    Pastikan dokumen terlihat jelas dan masih berlaku. Data Anda dilindungi sesuai Kebijakan Privasi PPID Balikpapan.
                                </p>
</div>
</div>
</div>
</section>
<!-- Section 4: Fulfillment Method -->
<section class="form-card bg-surface-container-lowest p-8 rounded-xl shadow-[0_32px_32px_-4px_rgba(25,28,29,0.06)]">
<div class="flex items-center gap-3 mb-8">
<div class="w-10 h-10 rounded-full bg-primary flex items-center justify-center text-on-primary font-bold">IV</div>
<h2 class="text-xl font-bold text-primary uppercase">Metode Perolehan &amp; Penyampaian</h2>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-8">
<div>
<label class="block text-xs font-bold text-primary uppercase tracking-wider mb-4">Cara Memperoleh Informasi</label>
<div class="space-y-3">
<label class="flex items-center gap-3 p-3 bg-surface-container-low rounded-lg cursor-pointer">
<input class="text-primary focus:ring-primary" name="obtaining" type="radio"/>
<span class="text-sm font-medium">Melihat / Membaca / Mendengarkan</span>
</label>
<label class="flex items-center gap-3 p-3 bg-surface-container-low rounded-lg cursor-pointer">
<input class="text-primary focus:ring-primary" name="obtaining" type="radio"/>
<span class="text-sm font-medium">Mendapatkan Salinan (Softcopy/Hardcopy)</span>
</label>
</div>
</div>
<div>
<label class="block text-xs font-bold text-primary uppercase tracking-wider mb-4">Cara Menyampaikan Informasi</label>
<div class="space-y-3">
<label class="flex items-center gap-3 p-3 bg-surface-container-low rounded-lg cursor-pointer">
<input class="text-primary focus:ring-primary" name="delivery" type="radio"/>
<span class="text-sm font-medium">Mengambil Langsung</span>
</label>
<label class="flex items-center gap-3 p-3 bg-surface-container-low rounded-lg cursor-pointer">
<input class="text-primary focus:ring-primary" name="delivery" type="radio"/>
<span class="text-sm font-medium">Email / WhatsApp</span>
</label>
<label class="flex items-center gap-3 p-3 bg-surface-container-low rounded-lg cursor-pointer">
<input class="text-primary focus:ring-primary" name="delivery" type="radio"/>
<span class="text-sm font-medium">Kurir / Pos</span>
</label>
</div>
</div>
</div>
</section>
<!-- Submit Button Area -->
<div class="flex flex-col md:flex-row items-center justify-between gap-6 p-8 bg-surface-container rounded-xl">
<div class="flex items-center gap-3">
<input class="w-5 h-5 rounded border-outline text-primary focus:ring-primary" type="checkbox"/>
<p class="text-sm text-on-surface-variant font-medium">Saya menyatakan data yang diisi adalah benar dan valid.</p>
</div>
<button class="w-full md:w-auto px-12 py-4 bg-primary text-on-primary rounded-xl font-extrabold text-lg shadow-lg hover:shadow-xl hover:translate-y-[-2px] transition-all flex items-center justify-center gap-3" type="submit">
                        Kirim Permohonan
                        <span class="material-symbols-outlined">send</span>
</button>
</div>
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
</script>
</body></html>