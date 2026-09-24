@extends('layouts.app')

@section('title', 'Home - Website Profil Kelas XI RPL 1')

@section('content')
<div class="max-w-4xl mx-auto py-8 text-center">
    <div class="bg-white dark:bg-slate-800 p-8 md:p-12 rounded-2xl shadow-sm border border-slate-200 dark:border-slate-700 transition-colors">
        <span class="inline-block bg-indigo-50 dark:bg-indigo-900/40 text-indigo-600 dark:text-indigo-400 text-xs font-semibold px-3 py-1 rounded-full mb-4">
            Halaman Home 👋
        </span>
        <h2 class="text-3xl font-extrabold text-slate-900 dark:text-white mb-4">
            Selamat Datang di Halaman Utama Kelas Kami
        </h2>
        <p class="text-slate-600 dark:text-slate-300 max-w-lg mx-auto mb-8 text-sm md:text-base">
            Ini adalah website resmi kelas XI RPL 1 yang menampilkan profil kelas, anggota tim developer, dan informasi kontak proyek kami.
        </p>
        <div class="flex justify-center gap-3">
            <a href="{{ url('/anggota') }}" class="bg-sky-600 hover:bg-sky-700 text-white text-sm font-medium px-5 py-2.5 rounded-xl transition shadow-md shadow-sky-500/20">
                Jelajahi Anggota Tim
            </a>
        </div>
    </div>
</div>

<div class="max-w-4xl mx-auto py-8 text-center">
    <div class="bg-white dark:bg-slate-800 p-8 md:p-12 rounded-2xl shadow-sm border border-slate-200 dark:border-slate-700 transition-colors">
        <div class="flex justify-center gap-3">
    <img src="{{ asset('public/images/Screenshot 2026-09-24 122527.png') }}" alt="Foto Kebersamaan Kelas">
        </div>
</div>
@endsection
