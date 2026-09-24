@extends('layouts.app')

@section('title', 'Profil Kelas XI RPL 1')

@section('content')
<div class="max-w-6xl mx-auto py-4">
    <div class="text-center mb-10">
        <h1 class="text-3xl font-extrabold text-slate-900 dark:text-white mb-2">Profil Tim Developer</h1>
        <p class="text-slate-500 dark:text-slate-400 text-sm sm:text-base">Kelola informasi profil kelas XI RPL 1</p>
    </div>

    <div id="cardContainer" class="grid grid-cols-1 md:grid-cols-3 gap-6"></div>
</div>
@endsection

@push('scripts')
<script>
    let profils = [
        { id: 1, nama: "SEKOLAH", peran: "SMKN 1 GARUT", deskripsi: "JL. Cimanuk." },
        { id: 2, nama: "Program Keahlian", peran: "Rekayasa Perangkat Lunak", deskripsi: "Software Engineer." },
        { id: 3, nama: "Deskripsi", peran: "Kelas XI RPL 1", deskripsi: "Menjadi kelas yang solid, inovatif, dan terampil dalam dunia pemrograman." },
    ];

    function renderCards() {
        const container = document.getElementById('cardContainer');
        container.innerHTML = '';
        profils.forEach(item => {
            const card = document.createElement('div');
            card.className = "bg-white dark:bg-slate-800 rounded-xl shadow-sm p-6 border-t-4 border-sky-500 border-x border-b border-slate-200 dark:border-slate-700/60 flex flex-col justify-between transition-all";
            card.innerHTML = `
                <div>
                    <h2 class="text-lg font-bold text-slate-800 dark:text-white">${item.nama}</h2>
                    <p class="text-sm text-sky-600 dark:text-sky-400 font-medium mb-3">${item.peran}</p>
                    <p class="text-sm text-slate-600 dark:text-slate-300 leading-relaxed">${item.deskripsi}</p>
                </div>
            `;
            container.appendChild(card);
        });
    }

    renderCards();
</script>
@endpush