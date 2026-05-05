@extends('layouts.app') 

@section('content')
<div class="max-w-4xl mx-auto py-10 px-4">
    <h1 class="text-3xl font-bold text-slate-800 mb-4">{{ $berita->judul }}</h1>
    
    <div class="flex items-center gap-4 text-slate-500 mb-6">
        <span>Oleh: Admin PPID</span>
        <span>{{ $berita->created_at->format('d M Y') }}</span>
    </div>

    <!-- Gambar juga otomatis berganti -->
    <img src="{{ asset('storage/' . $berita->gambar) }}" class="w-full rounded-xl mb-8">

    <!-- Isi konten berita yang panjang dari database -->
    <div class="prose lg:prose-xl text-slate-700 leading-relaxed">
        {!! $berita->konten !!}
    </div>
</div>
@endsection