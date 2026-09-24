<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar & Footer Component</title>
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
    </style>
</head>
<body class="bg-slate-50 text-slate-800 dark:bg-slate-900 dark:text-slate-100 min-h-screen flex flex-col justify-between transition-colors duration-300">

    <!-- ==================== NAVBAR ==================== -->
    <nav class="sticky top-0 z-50 w-full bg-white/80 dark:bg-slate-900/80 backdrop-blur-md border-b border-slate-200 dark:border-slate-800 transition-colors duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                
                <!-- Logo -->
                <div class="flex items-center space-x-3">
                    <a href="#" class="flex items-center space-x-2">
                        <div class="w-10 h-10 rounded-xl bg-gradient-to-tr from-sky-500 to-blue-600 flex items-center justify-center text-white font-bold text-xl shadow-md">
                            <i class="fa-solid fa-code"></i>
                        </div>
                        <span class="font-extrabold text-xl tracking-tight text-slate-900 dark:text-white">WebBrand</span>
                    </a>
                </div>

                <!-- Desktop Navigation Menu -->
                <div class="hidden md:flex items-center space-x-1">
                    <a href="#home" class="px-3 py-2 rounded-lg text-sm font-semibold text-slate-700 dark:text-slate-200 hover:text-sky-600 dark:hover:text-sky-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-all">Home</a>
                    <a href="#about" class="px-3 py-2 rounded-lg text-sm font-semibold text-slate-700 dark:text-slate-200 hover:text-sky-600 dark:hover:text-sky-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-all">Tentang Kami</a>
                    
                    <!-- Dropdown Menu -->
                    <div class="relative group">
                        <button class="px-3 py-2 rounded-lg text-sm font-semibold text-slate-700 dark:text-slate-200 hover:text-sky-600 dark:hover:text-sky-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-all flex items-center gap-1">
                            <span>Layanan</span>
                            <i class="fa-solid fa-chevron-down text-xs transition-transform group-hover:rotate-180"></i>
                        </button>
                        <div class="absolute left-0 mt-2 w-48 bg-white dark:bg-slate-800 rounded-xl shadow-xl border border-slate-200 dark:border-slate-700 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50 p-2">
                            <a href="#web" class="block px-4 py-2 text-sm text-slate-700 dark:text-slate-300 hover:bg-sky-50 dark:hover:bg-slate-700 hover:text-sky-600 rounded-lg">Web Development</a>
                            <a href="#mobile" class="block px-4 py-2 text-sm text-slate-700 dark:text-slate-300 hover:bg-sky-50 dark:hover:bg-slate-700 hover:text-sky-600 rounded-lg">Mobile Apps</a>
                            <a href="#uiux" class="block px-4 py-2 text-sm text-slate-700 dark:text-slate-300 hover:bg-sky-50 dark:hover:bg-slate-700 hover:text-sky-600 rounded-lg">UI/UX Design</a>
                        </div>
                    </div>

                    <a href="#contact" class="px-3 py-2 rounded-lg text-sm font-semibold text-slate-700 dark:text-slate-200 hover:text-sky-600 dark:hover:text-sky-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-all">Kontak</a>
                </div>

                <!-- Actions: Dark Mode Toggle & CTA Button -->
                <div class="flex items-center space-x-3">
                    <button id="themeToggle" class="p-2 rounded-lg text-slate-500 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors" title="Ubah Tema">
                        <i id="themeToggleDarkIcon" class="fa-solid fa-moon text-lg hidden"></i>
                        <i id="themeToggleLightIcon" class="fa-solid fa-sun text-lg text-amber-400"></i>
                    </button>

                    <a href="#contact" class="hidden sm:inline-flex items-center justify-center px-4 py-2 border border-transparent text-sm font-semibold rounded-xl text-white bg-sky-600 hover:bg-sky-700 shadow-md shadow-sky-500/20 transition-all">
                        Mulai Sekarang
                    </a>

                    <!-- Mobile Menu Button -->
                    <button id="mobileMenuBtn" class="md:hidden p-2 rounded-lg text-slate-500 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 focus:outline-none">
                        <i class="fa-solid fa-bars text-xl" id="menuIcon"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Navigation Menu Dropdown -->
        <div id="mobileMenu" class="hidden md:hidden border-b border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 px-4 pt-2 pb-4 space-y-1">
            <a href="#home" class="mobile-link block px-3 py-2 rounded-lg text-base font-semibold text-slate-700 dark:text-slate-200 hover:bg-slate-100 dark:hover:bg-slate-800">Home</a>
            <a href="#about" class="mobile-link block px-3 py-2 rounded-lg text-base font-semibold text-slate-700 dark:text-slate-200 hover:bg-slate-100 dark:hover:bg-slate-800">Tentang Kami</a>
            <a href="#web" class="mobile-link block px-3 py-2 rounded-lg text-base font-semibold text-slate-700 dark:text-slate-200 hover:bg-slate-100 dark:hover:bg-slate-800">Layanan</a>
            <a href="#contact" class="mobile-link block px-3 py-2 rounded-lg text-base font-semibold text-slate-700 dark:text-slate-200 hover:bg-slate-100 dark:hover:bg-slate-800">Kontak</a>
            <div class="pt-2">
                <a href="#contact" class="w-full inline-flex justify-center items-center px-4 py-2.5 text-sm font-semibold rounded-xl text-white bg-sky-600 hover:bg-sky-700 transition-all">
                    Mulai Sekarang
                </a>
            </div>
        </div>
    </nav>


    <!-- DEMO CONTENT AREA -->
    <main class="flex-grow max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 text-center">
        <h1 class="text-4xl font-extrabold mb-4">Konten Utama Website</h1>
        <p class="text-slate-600 dark:text-slate-400 max-w-xl mx-auto">
            Halaman ini merupakan contoh implementasi Navbar dan Footer yang siap digunakan untuk berbagai proyek web.
        </p>
    </main>


    <!-- ==================== FOOTER ==================== -->
    <footer class="bg-slate-900 text-slate-400 pt-16 pb-8 border-t border-slate-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-8 pb-12 border-b border-slate-800">
                
                <!-- Brand Info (Spans 2 columns on lg) -->
                <div class="lg:col-span-2 space-y-4">
                    <a href="#" class="flex items-center space-x-2">
                        <div class="w-9 h-9 rounded-xl bg-sky-500 flex items-center justify-center text-white font-bold text-lg">
                            <i class="fa-solid fa-code"></i>
                        </div>
                        <span class="font-extrabold text-xl text-white">WebBrand</span>
                    </a>
                    <p class="text-sm text-slate-400 max-w-sm leading-relaxed">
                        Solusi terdepan pengembangan perangkat lunak dan desain digital untuk membantu bisnis Anda berkembang lebih cepat di era digital.
                    </p>
                    <div class="flex space-x-3 pt-2">
                        <a href="#" class="w-9 h-9 rounded-lg bg-slate-800 flex items-center justify-center text-slate-400 hover:bg-sky-600 hover:text-white transition-all">
                            <i class="fa-brands fa-github text-base"></i>
                        </a>
                        <a href="#" class="w-9 h-9 rounded-lg bg-slate-800 flex items-center justify-center text-slate-400 hover:bg-sky-600 hover:text-white transition-all">
                            <i class="fa-brands fa-linkedin-in text-base"></i>
                        </a>
                        <a href="#" class="w-9 h-9 rounded-lg bg-slate-800 flex items-center justify-center text-slate-400 hover:bg-sky-600 hover:text-white transition-all">
                            <i class="fa-brands fa-twitter text-base"></i>
                        </a>
                        <a href="#" class="w-9 h-9 rounded-lg bg-slate-800 flex items-center justify-center text-slate-400 hover:bg-sky-600 hover:text-white transition-all">
                            <i class="fa-brands fa-instagram text-base"></i>
                        </a>
                    </div>
                </div>

                <!-- Navigasi Cepat -->
                <div>
                    <h4 class="text-white font-semibold text-sm tracking-wider uppercase mb-4">Navigasi</h4>
                    <ul class="space-y-2.5 text-sm">
                        <li><a href="#home" class="hover:text-white transition-colors">Home</a></li>
                        <li><a href="#about" class="hover:text-white transition-colors">Tentang Kami</a></li>
                        <li><a href="#services" class="hover:text-white transition-colors">Layanan</a></li>
                        <li><a href="#portfolio" class="hover:text-white transition-colors">Portofolio</a></li>
                        <li><a href="#contact" class="hover:text-white transition-colors">Kontak</a></li>
                    </ul>
                </div>

                <!-- Layanan -->
                <div>
                    <h4 class="text-white font-semibold text-sm tracking-wider uppercase mb-4">Layanan</h4>
                    <ul class="space-y-2.5 text-sm">
                        <li><a href="#" class="hover:text-white transition-colors">Web Development</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Mobile Development</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">UI/UX Design</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Cloud Hosting</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Konsultasi IT</a></li>
                    </ul>
                </div>

                <!-- Newsletter Form -->
                <div>
                    <h4 class="text-white font-semibold text-sm tracking-wider uppercase mb-4">Newsletter</h4>
                    <p class="text-xs text-slate-400 mb-3">Dapatkan kabar terbaru dan artikel tips langsung ke email Anda.</p>
                    <form onsubmit="event.preventDefault(); alert('Terima kasih telah berlangganan!');" class="space-y-2">
                        <input type="email" placeholder="Alamat email Anda" required class="w-full px-3.5 py-2.5 bg-slate-800 border border-slate-700 rounded-xl text-sm text-white focus:outline-none focus:ring-2 focus:ring-sky-500">
                        <button type="submit" class="w-full py-2.5 bg-sky-600 hover:bg-sky-700 text-white rounded-xl text-sm font-semibold transition-all">
                            Langganan
                        </button>
                    </form>
                </div>
            </div>

            <!-- Bottom Footer Info -->
            <div class="pt-8 flex flex-col sm:flex-row items-center justify-between text-xs text-slate-500 gap-4">
                <p>&copy; 2026 WebBrand. Hak Cipta Dilindungi Undang-Undang.</p>
                <div class="flex items-center space-x-6">
                    <a href="#" class="hover:text-slate-300 transition-colors">Kebijakan Privasi</a>
                    <a href="#" class="hover:text-slate-300 transition-colors">Syarat & Ketentuan</a>
                    <button onclick="window.scrollTo({top: 0, behavior: 'smooth'})" class="hover:text-slate-300 transition-colors flex items-center gap-1">
                        <span>Kembali ke Atas</span>
                        <i class="fa-solid fa-arrow-up"></i>
                    </button>
                </div>
            </div>
        </div>
    </footer>


    <!-- ==================== JAVASCRIPT ==================== -->
    <script>
        // 1. Dark Mode Toggle Script
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

        // 2. Mobile Menu Toggle Script
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

        document.querySelectorAll('.mobile-link').forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
                menuIcon.classList.remove('fa-xmark');
                menuIcon.classList.add('fa-bars');
            });
        });
    </script>
</body>
</html>