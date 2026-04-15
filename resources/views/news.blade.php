<!DOCTYPE html>

<html lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Berita Balikpapan - PPID Balikpapan</title>
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
                        "background": "#f8f9fa",
                        "outline": "#727782",
                        "on-error-container": "#93000a",
                        "surface-container-low": "#f3f4f5",
                        "on-secondary": "#ffffff",
                        "outline-variant": "#c2c6d2",
                        "on-primary": "#ffffff",
                        "inverse-on-surface": "#f0f1f2",
                        "on-secondary-fixed-variant": "#5b4300",
                        "on-secondary-container": "#6c5000",
                        "on-primary-container": "#aaccff",
                        "surface-dim": "#d9dadb",
                        "on-surface": "#191c1d",
                        "on-primary-fixed": "#001c39",
                        "secondary-fixed": "#ffdf9e",
                        "on-background": "#191c1d",
                        "tertiary-container": "#005e67",
                        "surface-container": "#edeeef",
                        "on-secondary-fixed": "#261a00",
                        "primary-container": "#00569c",
                        "error-container": "#ffdad6",
                        "surface": "#f8f9fa",
                        "inverse-surface": "#2e3132",
                        "secondary-container": "#fdc003",
                        "on-surface-variant": "#424751",
                        "surface-bright": "#f8f9fa",
                        "on-tertiary-fixed": "#001f23",
                        "secondary-fixed-dim": "#fabd00",
                        "inverse-primary": "#a4c9ff",
                        "on-tertiary-container": "#78d8e5",
                        "on-tertiary": "#ffffff",
                        "primary-fixed": "#d4e3ff",
                        "error": "#ba1a1a",
                        "primary": "#003f74",
                        "on-primary-fixed-variant": "#004883",
                        "surface-container-high": "#e7e8e9",
                        "tertiary": "#00454c",
                        "surface-container-highest": "#e1e3e4",
                        "secondary": "#785900",
                        "tertiary-fixed-dim": "#75d5e2",
                        "surface-container-lowest": "#ffffff",
                        "surface-variant": "#e1e3e4",
                        "on-error": "#ffffff",
                        "tertiary-fixed": "#92f1fe",
                        "surface-tint": "#1860a6",
                        "primary-fixed-dim": "#a4c9ff",
                        "on-tertiary-fixed-variant": "#004f56"
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
        .batik-pattern-original {
            background-image: url("batik dayak.png");
            background-size: 400px;
            background-repeat: repeat
        }
        .dayak-batik-pattern {
            background-image: linear-gradient(rgba(255, 255, 255, 0.95), rgba(255, 255, 255, 0.95)), url("batik dayak.png");
            background-repeat: repeat
        }
        .material-symbols-outlined {
            font-variation-settings: "FILL" 0, "wght" 400, "GRAD" 0, "opsz" 24
        }
    </style>
</head>
<body class="bg-background text-on-surface font-body selection:bg-secondary-container selection:text-on-secondary-container">
<!-- Header Section -->
<header class="top-0">
<!-- Top NavBar: Dayak Batik Pattern + Search + Clock -->
<div class="dayak-batik-pattern sticky top-0 z-50 w-full py-2 border-b border-slate-200 shadow-sm">
<div class="max-w-7xl mx-auto px-6 grid grid-cols-3 items-center">
<!-- Left: Logo -->
<div class="flex items-center justify-between w-full md:w-auto">  
    <a href="http://ppidbalikpapan.test/" class="h-8 md:h-10 w-auto object-contain">
     <img src="{{ asset('logo_ppid bg removed.png') }}" alt="logo" class="h-full w-auto"></a>
</div>
<!-- Center: Search Bar -->
<div class="flex justify-center">
<div class="relative w-full max-w-[320px]">
<input class="w-full pl-4 pr-10 py-1.5 bg-white/80 border border-slate-300 rounded-full shadow-inner focus:ring-2 focus:ring-primary text-xs backdrop-blur-sm" placeholder="Cari informasi..." type="text"/>
<span class="material-symbols-outlined absolute right-3 top-1/2 -translate-y-1/2 text-slate-400 text-lg">search</span>
</div>
</div>
<!-- Right: Clock -->
<div class="flex justify-end">
<div class="font-headline font-bold text-primary bg-white/60 px-4 py-1 rounded-lg border border-white/40 shadow-sm min-w-fit flex flex-col items-end" id="real-time-clock">
<span class="text-[9px] leading-none opacity-80 uppercase tracking-tighter" id="day-date">Selasa, 14 Mei 2024</span>
<span class="text-xs leading-tight" id="time">09:45:22 WITA</span>
</div>
</div>
</div>
</div>
<!-- Bottom NavBar: Pure Black Navigation -->
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
<li><a class="hover:text-secondary-container transition-colors" href="#">Kontak</a></li>
<li class="relative">
</ul>
</div>
</nav>
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
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
<!-- News Card 1 -->
<article class="group bg-surface-container-lowest rounded-2xl overflow-hidden hover:shadow-2xl transition-all duration-300 flex flex-col">
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
<a class="text-primary font-bold text-sm flex items-center gap-2 group/btn" href="#">
                                Selengkapnya
                                <span class="material-symbols-outlined text-sm group-hover/btn:translate-x-1 transition-transform">arrow_forward</span>
</a>
</div>
</div>
</article>
<!-- News Card 2 -->
<article class="group bg-surface-container-lowest rounded-2xl overflow-hidden hover:shadow-2xl transition-all duration-300 flex flex-col">
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
<article class="group bg-surface-container-lowest rounded-2xl overflow-hidden hover:shadow-2xl transition-all duration-300 flex flex-col">
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
<article class="group bg-surface-container-lowest rounded-2xl overflow-hidden hover:shadow-2xl transition-all duration-300 flex flex-col">
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
<article class="group bg-surface-container-lowest rounded-2xl overflow-hidden hover:shadow-2xl transition-all duration-300 flex flex-col">
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
<article class="group bg-surface-container-lowest rounded-2xl overflow-hidden hover:shadow-2xl transition-all duration-300 flex flex-col">
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
<div class="mt-20 flex justify-center items-center gap-2">
<button class="w-10 h-10 flex items-center justify-center rounded-lg bg-surface-container text-outline hover:bg-primary hover:text-white transition-colors">
<span class="material-symbols-outlined">chevron_left</span>
</button>
<button class="w-10 h-10 flex items-center justify-center rounded-lg bg-primary text-white font-bold">1</button>
<button class="w-10 h-10 flex items-center justify-center rounded-lg bg-surface-container text-on-surface hover:bg-surface-container-high transition-colors font-bold">2</button>
<button class="w-10 h-10 flex items-center justify-center rounded-lg bg-surface-container text-on-surface hover:bg-surface-container-high transition-colors font-bold">3</button>
<span class="px-2 text-outline">...</span>
<button class="w-10 h-10 flex items-center justify-center rounded-lg bg-surface-container text-on-surface hover:bg-surface-container-high transition-colors font-bold">12</button>
<button class="w-10 h-10 flex items-center justify-center rounded-lg bg-surface-container text-outline hover:bg-primary hover:text-white transition-colors">
<span class="material-symbols-outlined">chevron_right</span>
</button>
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
            const day = String(now.getDate());
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
                tz = now.toLocaleTimeString('en-us',{timeZoneName:'short'}).split(' ')[2] || 'WITA';
            }

            const dateString = `${dayName}, ${day} ${monthName} ${year}`;
            const timeString = `${hours}:${minutes}:${seconds} ${tz}`;
            
            const dateEl = document.getElementById('day-date');
            const timeEl = document.getElementById('time');
            if (dateEl) dateEl.textContent = dateString;
            if (timeEl) timeEl.textContent = timeString;
        }
        
        setInterval(updateClock, 1000);
        updateClock();
    </script>
</body></html>