@extends('layouts.app')

@section('title', 'Kontak Tim Developer - XI RPL 1')

@section('content')
<div class="max-w-5xl mx-auto py-4">
    <!-- Header Halaman -->
    <div class="text-center mb-10">
        <h1 class="text-3xl font-extrabold text-slate-900 dark:text-white mb-2">Kontak Tim Developer</h1>
        <p class="text-slate-500 dark:text-slate-400 text-sm sm:text-base">Hubungi kami untuk informasi lebih lanjut mengenai proyek XI RPL</p>
    </div>

    <!-- Grid Kartu Kontak -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        
        <!-- Card 1: Email -->
        <div class="bg-white dark:bg-slate-800 rounded-xl p-6 border-t-4 border-sky-600 shadow-sm border-x border-b border-slate-200 dark:border-slate-700/60 transition-all">
            <h2 class="text-xl font-bold text-slate-800 dark:text-white mb-1">Email Resmi</h2>
            <span class="text-sky-600 dark:text-sky-400 text-sm font-medium block mb-3">Developer Kontak</span>
            <p class="text-slate-600 dark:text-slate-300 text-sm leading-relaxed">xi.rpl@example.com</p>
        </div>

        <!-- Card 2: Instagram -->
        <div class="bg-white dark:bg-slate-800 rounded-xl p-6 border-t-4 border-sky-600 shadow-sm border-x border-b border-slate-200 dark:border-slate-700/60 transition-all">
            <h2 class="text-xl font-bold text-slate-800 dark:text-white mb-1">Instagram</h2>
            <span class="text-sky-600 dark:text-sky-400 text-sm font-medium block mb-3">Media Sosial</span>
            <p class="text-slate-600 dark:text-slate-300 text-sm leading-relaxed">@xi_rpl</p>
        </div>

        <!-- Card 3: Alamat Sekolah -->
        <div class="bg-white dark:bg-slate-800 rounded-xl p-6 border-t-4 border-sky-600 shadow-sm border-x border-b border-slate-200 dark:border-slate-700/60 transition-all">
            <h2 class="text-xl font-bold text-slate-800 dark:text-white mb-1">Alamat Sekolah</h2>
            <span class="text-sky-600 dark:text-sky-400 text-sm font-medium block mb-3">Lokasi Kampus</span>
            <p class="text-slate-600 dark:text-slate-300 text-sm leading-relaxed">SMKN 1 Garut</p>
        </div>

    </div>
</div>
@endsection