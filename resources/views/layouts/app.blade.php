<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'أحمد محمد - مطور ويب') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            font-family: 'Cairo', sans-serif;
        }

        /* Custom Colors */
        :root {
            --primary-50: #eff6ff;
            --primary-100: #dbeafe;
            --primary-200: #bfdbfe;
            --primary-300: #93c5fd;
            --primary-400: #60a5fa;
            --primary-500: #3b82f6;
            --primary-600: #2563eb;
            --primary-700: #1d4ed8;
            --primary-800: #1e40af;
            --primary-900: #1e3a8a;

            --secondary-50: #f0f9ff;
            --secondary-100: #e0f2fe;
            --secondary-200: #bae6fd;
            --secondary-300: #7dd3fc;
            --secondary-400: #38bdf8;
            --secondary-500: #0ea5e9;
            --secondary-600: #0284c7;
            --secondary-700: #0369a1;
            --secondary-800: #075985;
            --secondary-900: #0c4a6e;

            --dark-50: #f8fafc;
            --dark-100: #f1f5f9;
            --dark-200: #e2e8f0;
            --dark-300: #cbd5e1;
            --dark-400: #94a3b8;
            --dark-500: #64748b;
            --dark-600: #475569;
            --dark-700: #334155;
            --dark-800: #1e293b;
            --dark-900: #0f172a;
        }

        .bg-primary-400 { background-color: var(--primary-400); }
        .bg-primary-500 { background-color: var(--primary-500); }
        .bg-primary-600 { background-color: var(--primary-600); }
        .bg-primary-700 { background-color: var(--primary-700); }
        .bg-primary-900 { background-color: var(--primary-900); }

        .bg-secondary-400 { background-color: var(--secondary-400); }
        .bg-secondary-500 { background-color: var(--secondary-500); }
        .bg-secondary-600 { background-color: var(--secondary-600); }
        .bg-secondary-700 { background-color: var(--secondary-700); }

        .bg-dark-600 { background-color: var(--dark-600); }
        .bg-dark-700 { background-color: var(--dark-700); }
        .bg-dark-800 { background-color: var(--dark-800); }
        .bg-dark-900 { background-color: var(--dark-900); }

        .text-primary-300 { color: var(--primary-300); }
        .text-primary-400 { color: var(--primary-400); }
        .text-primary-500 { color: var(--primary-500); }

        .text-secondary-300 { color: var(--secondary-300); }
        .text-secondary-400 { color: var(--secondary-400); }
        .text-secondary-500 { color: var(--secondary-500); }

        .border-primary-500 { border-color: var(--primary-500); }
        .border-dark-600 { border-color: var(--dark-600); }

        .hover\:bg-primary-500:hover { background-color: var(--primary-500); }
        .hover\:bg-primary-700:hover { background-color: var(--primary-700); }
        .hover\:bg-secondary-700:hover { background-color: var(--secondary-700); }
        .hover\:bg-dark-600:hover { background-color: var(--dark-600); }

        .hover\:text-primary-300:hover { color: var(--primary-300); }
        .hover\:text-secondary-300:hover { color: var(--secondary-300); }

        .focus\:border-primary-500:focus { border-color: var(--primary-500); }

        /* Custom Animations */
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes slideUp {
            from { opacity: 0; transform: translateY(50px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes glow {
            0%, 100% { box-shadow: 0 0 20px rgba(59, 130, 246, 0.5); }
            50% { box-shadow: 0 0 30px rgba(59, 130, 246, 0.8); }
        }

        .animate-float {
            animation: float 6s ease-in-out infinite;
        }

        .animate-fade-in {
            animation: fadeIn 1s ease-out;
        }

        .animate-slide-up {
            animation: slideUp 1s ease-out;
            animation-fill-mode: both;
        }

        .animate-glow {
            animation: glow 2s ease-in-out infinite;
        }

        /* Smooth scrolling */
        html {
            scroll-behavior: smooth;
        }

        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: var(--dark-800);
        }

        ::-webkit-scrollbar-thumb {
            background: var(--primary-600);
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: var(--primary-500);
        }
    </style>
</head>
<body class="antialiased bg-dark-900 text-white">
    <!-- Navigation -->
    <nav class="fixed top-0 left-0 right-0 z-50 bg-dark-900/95 backdrop-blur-sm border-b border-dark-700">
        <div class="container mx-auto px-6">
            <div class="flex items-center justify-between h-16">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <a href="#home" class="text-2xl font-bold text-white">
                        أحمد محمد
                    </a>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden md:block">
                    <div class="flex items-center space-x-8">
                        <a href="#home" class="text-gray-300 hover:text-white transition-colors">الرئيسية</a>
                        <a href="#about" class="text-gray-300 hover:text-white transition-colors">نبذة عني</a>
                        <a href="#portfolio" class="text-gray-300 hover:text-white transition-colors">الأعمال</a>
                        <a href="#services" class="text-gray-300 hover:text-white transition-colors">الخدمات</a>
                        <a href="#testimonials" class="text-gray-300 hover:text-white transition-colors">آراء العملاء</a>
                        <a href="#faq" class="text-gray-300 hover:text-white transition-colors">الأسئلة الشائعة</a>
                        <a href="#contact" class="bg-primary-600 hover:bg-primary-700 text-white px-4 py-2 rounded-lg transition-colors">تواصل معي</a>
                    </div>
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button type="button" class="text-gray-300 hover:text-white focus:outline-none focus:text-white" id="mobile-menu-button">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Navigation -->
            <div class="md:hidden hidden" id="mobile-menu">
                <div class="px-2 pt-2 pb-3 space-y-1 bg-dark-800 rounded-lg mt-2">
                    <a href="#home" class="block px-3 py-2 text-gray-300 hover:text-white transition-colors">الرئيسية</a>
                    <a href="#about" class="block px-3 py-2 text-gray-300 hover:text-white transition-colors">نبذة عني</a>
                    <a href="#portfolio" class="block px-3 py-2 text-gray-300 hover:text-white transition-colors">الأعمال</a>
                    <a href="#services" class="block px-3 py-2 text-gray-300 hover:text-white transition-colors">الخدمات</a>
                    <a href="#testimonials" class="block px-3 py-2 text-gray-300 hover:text-white transition-colors">آراء العملاء</a>
                    <a href="#faq" class="block px-3 py-2 text-gray-300 hover:text-white transition-colors">الأسئلة الشائعة</a>
                    <a href="#contact" class="block px-3 py-2 bg-primary-600 hover:bg-primary-700 text-white rounded-lg transition-colors">تواصل معي</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-dark-900 border-t border-dark-700 py-12">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-4 gap-8">
                <!-- About -->
                <div class="md:col-span-2">
                    <h3 class="text-2xl font-bold text-white mb-4">أحمد محمد</h3>
                    <p class="text-gray-400 mb-6 leading-relaxed">
                        مطور ويب متخصص في Laravel و React. أقدم حلول رقمية مبتكرة تساعد الشركات على النمو والتطور في العالم الرقمي.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 bg-primary-600 rounded-lg flex items-center justify-center hover:bg-primary-700 transition-colors">
                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-10 h-10 bg-secondary-600 rounded-lg flex items-center justify-center hover:bg-secondary-700 transition-colors">
                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-10 h-10 bg-primary-600 rounded-lg flex items-center justify-center hover:bg-primary-700 transition-colors">
                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.174-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.099.12.112.225.085.345-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.402.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.357-.629-2.75-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146C9.57 23.812 10.763 24.009 12.017 24c6.624 0 11.99-5.367 11.99-12C24.007 5.367 18.641.001.012.001z"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h4 class="text-lg font-semibold text-white mb-4">روابط سريعة</h4>
                    <ul class="space-y-2">
                        <li><a href="#home" class="text-gray-400 hover:text-white transition-colors">الرئيسية</a></li>
                        <li><a href="#about" class="text-gray-400 hover:text-white transition-colors">نبذة عني</a></li>
                        <li><a href="#portfolio" class="text-gray-400 hover:text-white transition-colors">الأعمال</a></li>
                        <li><a href="#services" class="text-gray-400 hover:text-white transition-colors">الخدمات</a></li>
                        <li><a href="#contact" class="text-gray-400 hover:text-white transition-colors">تواصل معي</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div>
                    <h4 class="text-lg font-semibold text-white mb-4">معلومات التواصل</h4>
                    <ul class="space-y-2">
                        <li class="text-gray-400">ahmed@example.com</li>
                        <li class="text-gray-400">+966 50 123 4567</li>
                        <li class="text-gray-400">الرياض، السعودية</li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-dark-700 mt-8 pt-8 text-center">
                <p class="text-gray-400">
                    © {{ date('Y') }} أحمد محمد. جميع الحقوق محفوظة.
                </p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            const mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hidden');
        });

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Hide mobile menu when clicking on a link
        document.querySelectorAll('#mobile-menu a').forEach(link => {
            link.addEventListener('click', function() {
                document.getElementById('mobile-menu').classList.add('hidden');
            });
        });
    </script>
</body>
</html>


