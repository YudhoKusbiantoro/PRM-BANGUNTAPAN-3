<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'PRM Banguntapan 3' }}</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@500;600;700;800&display=swap" rel="stylesheet">
    <style>
        h1, h2, h3, h4, h5, h6 { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
    
    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <script src="https://cdn.tailwindcss.com"></script>
    @endif
</head>
<body class="bg-[#F8FAFC] text-gray-800 antialiased font-['Inter'] selection:bg-[#1e3a8a] selection:text-white flex min-h-screen overflow-hidden">

    <!-- Mobile Header (Visible only on small screens) -->
    <header class="lg:hidden fixed top-0 w-full z-40 bg-white/90 backdrop-blur-md border-b border-gray-100 shadow-sm h-16 flex items-center justify-between px-4">
        <a href="{{ route('home') }}" class="flex items-center gap-3">
            <img src="{{ asset('images/logo-muhammadiyah-official.jpg') }}" alt="Logo Muhammadiyah" class="h-10 w-auto">
            <div class="flex flex-col">
                <span class="text-base font-extrabold text-[#1e3a8a] leading-tight">PRM</span>
                <span class="text-[10px] font-bold text-[#0ea5e9] uppercase tracking-wider">Banguntapan 3</span>
            </div>
        </a>
        <button id="public-mobile-menu-btn" class="text-gray-600 hover:text-[#0ea5e9] p-2 rounded-lg bg-gray-50 focus:outline-none transition-colors">
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
        </button>
    </header>

    <!-- Sidebar Navigation -->
    <aside id="public-sidebar" class="bg-[#0f172a] bg-gradient-to-b from-[#020617] to-[#1e3a8a] w-72 flex-shrink-0 fixed inset-y-0 left-0 transform -translate-x-full lg:translate-x-0 transition-transform duration-300 ease-in-out z-50 lg:static lg:h-screen border-r border-blue-900/50 shadow-[4px_0_24px_rgba(0,0,0,0.2)] flex flex-col">
        <!-- Logo -->
        <div class="h-24 flex items-center justify-between px-6 border-b border-white/10 shrink-0">
            <a href="{{ route('home') }}" class="flex items-center gap-4 w-full">
                <div class="p-1.5 bg-white rounded-xl shadow-sm border border-gray-100 shrink-0">
                    <img src="{{ asset('images/logo-muhammadiyah-official.jpg') }}" alt="Logo Muhammadiyah" class="h-10 w-auto">
                </div>
                <div class="flex flex-col">
                    <h1 class="text-xl font-extrabold text-white leading-tight tracking-tight">PRM</h1>
                    <p class="text-[10px] font-bold text-blue-300 uppercase tracking-widest mt-0.5">Banguntapan 3</p>
                </div>
            </a>
            <button id="close-public-sidebar" class="lg:hidden text-gray-400 hover:text-white focus:outline-none transition-colors p-2 rounded-lg hover:bg-white/10">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        
        <!-- Navigation Links -->
        <nav class="flex-1 px-5 py-8 space-y-2.5 overflow-y-auto">
            <p class="px-3 text-[11px] font-bold text-blue-300/70 uppercase tracking-[0.2em] mb-5">Navigasi Utama</p>
            
            <a href="{{ request()->routeIs('home') ? '#sekilas' : route('home') . '#sekilas' }}" class="flex items-center gap-4 px-4 py-3.5 rounded-2xl transition-all duration-300 text-blue-100 hover:bg-white/10 hover:text-white font-bold group">
                <div class="w-10 h-10 rounded-xl bg-white/5 group-hover:bg-white/20 group-hover:shadow-sm flex items-center justify-center transition-all duration-300 text-blue-200 group-hover:text-white border border-white/5">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                Sekilas PRM
            </a>
            
            <a href="{{ request()->routeIs('home') ? '#aum' : route('home') . '#aum' }}" class="flex items-center gap-4 px-4 py-3.5 rounded-2xl transition-all duration-300 text-blue-100 hover:bg-white/10 hover:text-white font-bold group">
                <div class="w-10 h-10 rounded-xl bg-white/5 group-hover:bg-white/20 group-hover:shadow-sm flex items-center justify-center transition-all duration-300 text-blue-200 group-hover:text-white border border-white/5">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                </div>
                Amal Usaha
            </a>
            
            <a href="{{ request()->routeIs('home') ? '#kabar' : route('home') . '#kabar' }}" class="flex items-center gap-4 px-4 py-3.5 rounded-2xl transition-all duration-300 text-blue-100 hover:bg-white/10 hover:text-white font-bold group">
                <div class="w-10 h-10 rounded-xl bg-white/5 group-hover:bg-white/20 group-hover:shadow-sm flex items-center justify-center transition-all duration-300 text-blue-200 group-hover:text-white border border-white/5">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/></svg>
                </div>
                Kabar & Agenda
            </a>
        </nav>
        
        <!-- Auth Buttons -->
        <div class="p-6 border-t border-white/10 bg-white/5">
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/dashboard') }}" class="flex items-center justify-center w-full gap-2 px-5 py-3.5 bg-gradient-to-r from-[#0ea5e9] to-blue-600 text-white font-bold rounded-xl hover:shadow-[0_8px_20px_rgba(14,165,233,0.4)] transition-all transform hover:-translate-y-0.5">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                        Ke Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}" class="flex items-center justify-center w-full gap-2 px-5 py-3.5 bg-white/10 border border-white/20 text-white font-bold rounded-xl hover:bg-white hover:text-[#1e3a8a] transition-all duration-300 shadow-sm group">
                        <svg class="w-5 h-5 transition-transform group-hover:scale-110" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"/></svg>
                        Masuk Sistem
                    </a>
                @endauth
            @endif
        </div>
    </aside>

    <!-- Main Content Area -->
    <div class="flex-1 flex flex-col h-screen overflow-y-auto relative pt-16 lg:pt-0 scroll-smooth bg-gray-50/30">
        <main class="flex-grow">
            {{ $slot }}
        </main>

        <!-- Footer -->
        <footer class="bg-[#0f172a] text-white pt-20 pb-10 mt-auto relative overflow-hidden shrink-0">
            <div class="absolute top-0 left-1/4 w-96 h-96 bg-[#1e3a8a] rounded-full mix-blend-screen filter blur-[100px] opacity-30 animate-blob"></div>
            <div class="absolute top-0 right-1/4 w-96 h-96 bg-[#0ea5e9] rounded-full mix-blend-screen filter blur-[100px] opacity-20 animate-blob animation-delay-2000"></div>
            @php
                $settings = \App\Models\Setting::pluck('value', 'key')->toArray();
            @endphp
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-12">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mb-12 relative z-10">
                    <div>
                        <h3 class="text-2xl font-bold text-[#0ea5e9] mb-4">{{ $settings['site_name'] ?? 'PRM Banguntapan 3' }}</h3>
                        <p class="text-gray-400 leading-relaxed mb-6">
                            {{ Str::limit($settings['about_text'] ?? 'Mewujudkan masyarakat Islam yang sebenar-benarnya melalui gerakan pencerahan, amal usaha, dan pemberdayaan umat.', 150) }}
                        </p>
                    </div>
                    <div>
                        <h4 class="text-lg font-bold mb-4 border-b border-gray-700 pb-2 inline-block">Tautan Cepat</h4>
                        <ul class="space-y-3 text-gray-400 font-medium">
                            <li><a href="{{ request()->routeIs('home') ? '#sekilas' : route('home') . '#sekilas' }}" class="hover:text-[#0ea5e9] transition-colors flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-[#0ea5e9]"></span> Tentang Kami</a></li>
                            <li><a href="{{ request()->routeIs('home') ? '#aum' : route('home') . '#aum' }}" class="hover:text-[#0ea5e9] transition-colors flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-[#0ea5e9]"></span> Amal Usaha</a></li>
                            <li><a href="{{ request()->routeIs('home') ? '#kabar' : route('home') . '#kabar' }}" class="hover:text-[#0ea5e9] transition-colors flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-[#0ea5e9]"></span> Berita & Agenda</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="text-lg font-bold mb-4 border-b border-gray-700 pb-2 inline-block">Media Sosial</h4>
                        <p class="text-gray-400 mb-6 text-sm">Ikuti aktivitas dakwah kami melalui platform media sosial berikut:</p>
                        <div class="flex gap-4">
                            <a href="#" class="w-10 h-10 rounded-full bg-white/5 border border-white/10 flex items-center justify-center hover:bg-[#0ea5e9] hover:border-[#0ea5e9] transition-all duration-300 text-white shadow-sm hover:-translate-y-1">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd"></path></svg>
                            </a>
                            <a href="#" class="w-10 h-10 rounded-full bg-white/5 border border-white/10 flex items-center justify-center hover:bg-[#0ea5e9] hover:border-[#0ea5e9] transition-all duration-300 text-white shadow-sm hover:-translate-y-1">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd"></path></svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="border-t border-white/10 pt-8 flex flex-col md:flex-row justify-between items-center text-sm text-gray-400 relative z-10">
                    <p>&copy; {{ date('Y') }} {{ $settings['site_name'] ?? 'PRM Banguntapan 3' }}. All rights reserved.</p>
                    <div class="mt-4 md:mt-0">
                        <span class="font-bold text-white px-4 py-2 bg-white/5 rounded-full border border-white/10 text-xs tracking-wider">KKN PM 067 UMY 2026</span>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const btn = document.getElementById('public-mobile-menu-btn');
            const closeBtn = document.getElementById('close-public-sidebar');
            const sidebar = document.getElementById('public-sidebar');

            if (btn && sidebar) {
                btn.addEventListener('click', () => {
                    sidebar.classList.remove('-translate-x-full');
                });
            }
            if (closeBtn && sidebar) {
                closeBtn.addEventListener('click', () => {
                    sidebar.classList.add('-translate-x-full');
                });
            }
        });
    </script>
</body>
</html>
