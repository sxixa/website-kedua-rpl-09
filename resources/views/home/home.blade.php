<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Website Profil Kelas XI RPL</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-50 text-slate-800 min-h-screen flex flex-col justify-between">

    <!-- NAVBAR HOME -->
    <header class="bg-white border-b border-slate-200">
        <div class="max-w-4xl mx-auto px-6 py-4 flex justify-between items-center">
            <h1 class="font-bold text-lg text-indigo-600">XI RPL (Home)</h1>
            <nav class="space-x-4 text-sm font-medium text-slate-600">
                <a href="#" class="text-indigo-600 font-semibold">Home</a>
                <a href="#" class="hover:text-indigo-600">Profil</a>
                <a href="#" class="hover:text-indigo-600">Kontak</a>
            </nav>
        </div>
    </header>

    <!-- KONTEN UTAMA HOME -->
    <main class="max-w-4xl mx-auto px-6 py-12 text-center">
        <div class="bg-white p-8 md:p-12 rounded-2xl shadow-sm border border-slate-200">
            <span class="inline-block bg-indigo-50 text-indigo-600 text-xs font-semibold px-3 py-1 rounded-full mb-4">
                Halaman Home 👋
            </span>
            <h2 class="text-3xl font-extrabold text-slate-900 mb-4">
                Selamat Datang di Halaman Utama Kelas Kami
            </h2>
            <p class="text-slate-600 max-w-lg mx-auto mb-8 text-sm md:text-base">
                Ini adalah file <code class="bg-slate-100 px-2 py-1 rounded text-indigo-600">home.blade.php</code> yang khusus menampilkan bagian sambutan utama kelas XI RPL.
            </p>
            <div class="flex justify-center gap-3">
                <a href="#" class="bg-indigo-600 text-white text-sm font-medium px-5 py-2.5 rounded-xl hover:bg-indigo-700 transition">
                    Jelajahi Kelas
                </a>
            </div>
        </div>
    </main>

    <!-- FOOTER -->
    <footer class="bg-white border-t border-slate-200 py-4 text-center text-xs text-slate-400">
        &copy; 2026 Kelas XI RPL. Halaman Home.
    </footer>

</body>
</html>