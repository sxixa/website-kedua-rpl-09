@extends('layouts.app')

@section('title', 'Developer Anggota - XI RPL 1')

@section('content')
<div class="max-w-5xl mx-auto py-4">
    <div class="text-center mb-10">
        <h1 class="text-3xl font-extrabold text-slate-900 dark:text-white mb-2">Anggota Tim Developer</h1>
        <p class="text-slate-500 dark:text-slate-400">Tim di balik pengembangan aplikasi dan sistem proyek XI RPL</p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Card 1 -->
        <div class="bg-white dark:bg-slate-800 rounded-xl p-6 border-t-4 border-sky-500 shadow-sm border-x border-b border-slate-200 dark:border-slate-700/60 hover:-translate-y-1 hover:shadow-md transition-all">
            <h3 class="font-bold text-slate-800 dark:text-white text-lg mb-1">Muhammad Jibrilian Sidiq Akasya</h3>
            <span class="inline-block bg-sky-50 dark:bg-sky-900/30 text-sky-600 dark:text-sky-400 text-xs font-semibold px-2.5 py-1 rounded-full mb-3">Project Manager</span>
            <p class="text-slate-600 dark:text-slate-300 text-sm leading-relaxed">Bertanggung jawab mengelola alur proyek, membagi tugas tim, dan memastikan target selesai tepat waktu.</p>
        </div>

        <!-- Card 2 -->
        <div class="bg-white dark:bg-slate-800 rounded-xl p-6 border-t-4 border-sky-500 shadow-sm border-x border-b border-slate-200 dark:border-slate-700/60 hover:-translate-y-1 hover:shadow-md transition-all">
            <h3 class="font-bold text-slate-800 dark:text-white text-lg mb-1">Synta Awaling</h3>
            <span class="inline-block bg-sky-50 dark:bg-sky-900/30 text-sky-600 dark:text-sky-400 text-xs font-semibold px-2.5 py-1 rounded-full mb-3">Developer Profile</span>
            <p class="text-slate-600 dark:text-slate-300 text-sm leading-relaxed">Merancang profil anggota tim.</p>
        </div>

        <!-- Card 3 -->
        <div class="bg-white dark:bg-slate-800 rounded-xl p-6 border-t-4 border-sky-500 shadow-sm border-x border-b border-slate-200 dark:border-slate-700/60 hover:-translate-y-1 hover:shadow-md transition-all">
            <h3 class="font-bold text-slate-800 dark:text-white text-lg mb-1">Taufiq Nur Muhammad Irvan</h3>
            <span class="inline-block bg-sky-50 dark:bg-sky-900/30 text-sky-600 dark:text-sky-400 text-xs font-semibold px-2.5 py-1 rounded-full mb-3">Developer Anggota</span>
            <p class="text-slate-600 dark:text-slate-300 text-sm leading-relaxed">Mengurus dokumentasi dan komunikasi antar anggota tim.</p>
        </div>

        <!-- Card 4 -->
        <div class="bg-white dark:bg-slate-800 rounded-xl p-6 border-t-4 border-sky-500 shadow-sm border-x border-b border-slate-200 dark:border-slate-700/60 hover:-translate-y-1 hover:shadow-md transition-all">
            <h3 class="font-bold text-slate-800 dark:text-white text-lg mb-1">Abdul Jamil Febriansyah</h3>
            <span class="inline-block bg-sky-50 dark:bg-sky-900/30 text-sky-600 dark:text-sky-400 text-xs font-semibold px-2.5 py-1 rounded-full mb-3">Developer Kontak</span>
            <p class="text-slate-600 dark:text-slate-300 text-sm leading-relaxed">Membuat halaman kontak untuk tim.</p>
        </div>
    </div>
</div>
@endsection