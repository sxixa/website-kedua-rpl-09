<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'XI RPL 1 Website')</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
        }
    </script>
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        .images {
  display: flex;
  gap: 10px;
}

.images img {
  width: 200px;
}
    </style>
    @stack('styles')
</head>

<body class="bg-slate-50 text-slate-800 dark:bg-slate-900 dark:text-slate-100 min-h-screen flex flex-col justify-between transition-colors duration-300">

    <!-- ==================== NAVBAR ==================== -->
    <nav class="sticky top-0 z-50 w-full bg-white/80 dark:bg-slate-900/80 backdrop-blur-md border-b border-slate-200 dark:border-slate-800 transition-colors duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                
                <!-- Logo -->
                <div class="flex items-center space-x-3">
                    <a href="{{ url('/') }}" class="flex items-center space-x-2">
                        <div class="w-10 h-10 rounded-xl bg-gradient-to-tr from-sky-500 to-blue-600 flex items-center justify-center text-white font-bold text-xl shadow-md">
                            <i class="fa-solid fa-code"></i>
                        </div>
                        <span class="font-extrabold text-xl tracking-tight text-slate-900 dark:text-white">XI RPL 1</span>
                    </a>
                </div>

                <!-- Desktop Navigation Menu -->
                <div class="hidden md:flex items-center space-x-1">
                    <a href="{{ url('/') }}" class="px-3 py-2 rounded-lg text-sm font-semibold text-slate-700 dark:text-slate-200 hover:text-sky-600 dark:hover:text-sky-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-all">Home</a>
                    <a href="{{ url('/profil') }}" class="px-3 py-2 rounded-lg text-sm font-semibold text-slate-700 dark:text-slate-200 hover:text-sky-600 dark:hover:text-sky-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-all">Profil</a>
                    <a href="{{ url('/anggota') }}" class="px-3 py-2 rounded-lg text-sm font-semibold text-slate-700 dark:text-slate-200 hover:text-sky-600 dark:hover:text-sky-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-all">Anggota Tim</a>
                    <a href="{{ url('/kontak') }}" class="px-3 py-2 rounded-lg text-sm font-semibold text-slate-700 dark:text-slate-200 hover:text-sky-600 dark:hover:text-sky-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-all">Kontak</a>
                </div>

                <!-- Actions: Dark Mode Toggle -->
                <div class="flex items-center space-x-3">
                    <button id="themeToggle" class="p-2 rounded-lg text-slate-500 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors" title="Ubah Tema">
                        <i id="themeToggleDarkIcon" class="fa-solid fa-moon text-lg hidden"></i>
                        <i id="themeToggleLightIcon" class="fa-solid fa-sun text-lg text-amber-400"></i>
                    </button>

                    <!-- Mobile Menu Button -->
                    <button id="mobileMenuBtn" class="md:hidden p-2 rounded-lg text-slate-500 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 focus:outline-none">
                        <i class="fa-solid fa-bars text-xl" id="menuIcon"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Navigation Menu Dropdown -->
        <div id="mobileMenu" class="hidden md:hidden border-b border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 px-4 pt-2 pb-4 space-y-1">
            <a href="{{ url('/home') }}" class="mobile-link block px-3 py-2 rounded-lg text-base font-semibold text-slate-700 dark:text-slate-200 hover:bg-slate-100 dark:hover:bg-slate-800">Home</a>
            <a href="{{ url('/profil') }}" class="mobile-link block px-3 py-2 rounded-lg text-base font-semibold text-slate-700 dark:text-slate-200 hover:bg-slate-100 dark:hover:bg-slate-800">Profil</a>
            <a href="{{ url('/anggota') }}" class="mobile-link block px-3 py-2 rounded-lg text-base font-semibold text-slate-700 dark:text-slate-200 hover:bg-slate-100 dark:hover:bg-slate-800">Anggota Tim</a>
            <a href="{{ url('/kontak') }}" class="mobile-link block px-3 py-2 rounded-lg text-base font-semibold text-slate-700 dark:text-slate-200 hover:bg-slate-100 dark:hover:bg-slate-800">Kontak</a>
        </div>
    </nav>

    <!-- MAIN CONTENT AREA -->
    <main class="flex-grow max-w-7xl mx-auto w-full px-4 sm:px-6 lg:px-8 py-10">
        @yield('content')
    </main>

    <!-- ==================== FOOTER ==================== -->
    <footer class="bg-slate-900 text-slate-400 pt-12 pb-8 border-t border-slate-800 mt-auto">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row items-center justify-between gap-6 pb-8 border-b border-slate-800">
                <div class="flex items-center space-x-2">
                    <div class="w-8 h-8 rounded-lg bg-sky-500 flex items-center justify-center text-white font-bold text-base">
                        <i class="fa-solid fa-code"></i>
                    </div>
                    <span class="font-extrabold text-lg text-white">XI RPL 1</span>
                </div>
                <div class="flex space-x-6 text-sm">
                    <a href="{{ url('/home') }}" class="hover:text-white transition-colors">Home</a>
                    <a href="{{ url('/profil') }}" class="hover:text-white transition-colors">Profil</a>
                    <a href="{{ url('/anggota') }}" class="hover:text-white transition-colors">Anggota Tim</a>
                    <a href="{{ url('/kontak') }}" class="hover:text-white transition-colors">Kontak</a>
                </div>
            </div>

            <div class="pt-6 flex flex-col sm:flex-row items-center justify-between text-xs text-slate-500 gap-4">
                <p>&copy; 2026 XI RPL 1 SMKN 1 Garut. Hak Cipta Dilindungi Undang-Undang.</p>
                <button onclick="window.scrollTo({top: 0, behavior: 'smooth'})" class="hover:text-slate-300 transition-colors flex items-center gap-1">
                    <span>Kembali ke Atas</span>
                    <i class="fa-solid fa-arrow-up"></i>
                </button>
            </div>
        </div>
    </footer>

    <!-- JAVASCRIPT -->
    <script>
        // Dark Mode Toggle
        const themeToggleBtn = document.getElementById('themeToggle');
        const darkIcon = document.getElementById('themeToggleDarkIcon');
        const lightIcon = document.getElementById('themeToggleLightIcon');

        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
            lightIcon.classList.remove('hidden');
            darkIcon.classList.add('hidden');
        } else {
            document.documentElement.classList.remove('dark');
            darkIcon.classList.remove('hidden');
            lightIcon.classList.add('hidden');
        }

        themeToggleBtn.addEventListener('click', function() {
            darkIcon.classList.toggle('hidden');
            lightIcon.classList.toggle('hidden');

            if (document.documentElement.classList.contains('dark')) {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('color-theme', 'light');
            } else {
                document.documentElement.classList.add('dark');
                localStorage.setItem('color-theme', 'dark');
            }
        });

        // Mobile Menu Toggle
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const mobileMenu = document.getElementById('mobileMenu');
        const menuIcon = document.getElementById('menuIcon');

        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
            if (mobileMenu.classList.contains('hidden')) {
                menuIcon.classList.remove('fa-xmark');
                menuIcon.classList.add('fa-bars');
            } else {
                menuIcon.classList.remove('fa-bars');
                menuIcon.classList.add('fa-xmark');
            }
        });
    </script>
    @stack('scripts')
</body>
</html>