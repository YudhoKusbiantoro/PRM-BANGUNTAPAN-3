<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'PRM Banguntapan 3') }} - Dashboard</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@500;600;700;800&display=swap" rel="stylesheet">
        
        <style>
            h1, h2, h3, h4, h5, h6 { font-family: 'Plus Jakarta Sans', sans-serif; }
            /* Global Dashboard Styles */
            .bg-white.shadow-sm, .bg-white.overflow-hidden {
                box-shadow: 0 4px 20px -2px rgba(0, 0, 0, 0.05);
                border: 1px solid rgba(0, 0, 0, 0.02);
                border-radius: 1rem;
            }
            .form-input, .form-select, .form-textarea, input[type='text'], input[type='email'], input[type='password'], textarea, select {
                border-radius: 0.75rem;
                border-color: #e2e8f0;
                box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
                transition: all 0.2s;
            }
            .form-input:focus, .form-select:focus, .form-textarea:focus, input:focus, textarea:focus, select:focus {
                border-color: #0ea5e9;
                box-shadow: 0 0 0 3px rgba(14, 165, 233, 0.2);
            }
            /* Table Styling */
            th { text-transform: uppercase; font-size: 0.75rem; letter-spacing: 0.05em; font-weight: 700; color: #64748b; background-color: #f8fafc; }
            td { font-size: 0.875rem; border-bottom: 1px solid #f1f5f9; }
            
            /* Custom Scrollbar for sidebar */
            .custom-scrollbar::-webkit-scrollbar {
                width: 6px;
            }
            .custom-scrollbar::-webkit-scrollbar-track {
                background: rgba(255, 255, 255, 0.05);
            }
            .custom-scrollbar::-webkit-scrollbar-thumb {
                background: rgba(255, 255, 255, 0.2);
                border-radius: 10px;
            }
            .custom-scrollbar::-webkit-scrollbar-thumb:hover {
                background: rgba(255, 255, 255, 0.3);
            }
        </style>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-['Inter'] antialiased text-gray-800 bg-[#F8FAFC]">
        <div class="flex min-h-screen overflow-hidden">
            <!-- Sidebar Navigation -->
            @include('layouts.navigation')

            <!-- Main Content Area -->
            <div class="flex-1 flex flex-col min-w-0 bg-[#F8FAFC] overflow-y-auto h-screen">
                <!-- Top Header -->
                <header class="bg-white/80 backdrop-blur-xl border-b border-gray-100 shadow-[0_4px_30px_rgba(0,0,0,0.02)] sticky top-0 z-40 h-20 flex items-center justify-between px-4 sm:px-6 lg:px-8">
                    <!-- Mobile Hamburger & Page Title -->
                    <div class="flex items-center gap-4">
                        <button id="mobile-menu-button" class="lg:hidden p-2 rounded-xl text-gray-500 hover:text-[#0ea5e9] hover:bg-blue-50 focus:outline-none transition-colors">
                            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </button>

                        @isset($header)
                            <div class="flex items-center gap-3">
                                <div class="w-1.5 h-7 bg-gradient-to-b from-[#0ea5e9] to-blue-600 rounded-full hidden sm:block"></div>
                                {{ $header }}
                            </div>
                        @endisset
                    </div>

                    <!-- Right Side Header (User Profile / Notifications) -->
                    <div class="flex items-center gap-4">
                        <!-- Notification Bell (Optional Dummy) -->
                        <button class="p-2 text-gray-400 hover:text-[#0ea5e9] transition-colors relative hidden sm:block">
                            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                            </svg>
                            <span class="absolute top-1.5 right-1.5 w-2.5 h-2.5 bg-red-500 rounded-full border-2 border-white"></span>
                        </button>

                        <!-- User Profile Dropdown -->
                        <div class="flex items-center">
                            <x-dropdown align="right" width="48">
                                <x-slot name="trigger">
                                    <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-bold rounded-lg text-gray-700 bg-gray-50 hover:bg-gray-100 hover:text-gray-900 focus:outline-none transition ease-in-out duration-150">
                                        <div class="flex items-center gap-2">
                                            <div class="w-7 h-7 rounded-full bg-gradient-to-tr from-[#0ea5e9] to-indigo-400 text-white flex items-center justify-center font-bold text-xs">
                                                {{ substr(Auth::user()->name, 0, 1) }}
                                            </div>
                                            <span class="hidden sm:inline-block">{{ Auth::user()->name }}</span>
                                        </div>

                                        <div class="ms-2 hidden sm:block">
                                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                    </button>
                                </x-slot>

                                <x-slot name="content">
                                    <x-dropdown-link :href="route('profile.edit')" class="font-medium">
                                        Profil Saya
                                    </x-dropdown-link>

                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <x-dropdown-link :href="route('logout')"
                                                class="font-medium text-red-600 focus:text-red-600 hover:text-red-700"
                                                onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </x-dropdown-link>
                                    </form>
                                </x-slot>
                            </x-dropdown>
                        </div>
                    </div>
                </header>

                <!-- Page Content -->
                <main class="flex-1 p-6 lg:p-8">
                    {{ $slot }}
                </main>
            </div>
        </div>

        <!-- Sidebar Toggle Script -->
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const mobileMenuButton = document.getElementById('mobile-menu-button');
                const closeSidebarButton = document.getElementById('close-sidebar');
                const sidebar = document.getElementById('sidebar');

                if (mobileMenuButton && sidebar) {
                    mobileMenuButton.addEventListener('click', () => {
                        sidebar.classList.toggle('-translate-x-full');
                    });
                }
                
                if (closeSidebarButton && sidebar) {
                    closeSidebarButton.addEventListener('click', () => {
                        sidebar.classList.add('-translate-x-full');
                    });
                }
            });
        </script>

        <!-- SweetAlert2 for modern confirmation dialogs -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                // Intercept all forms with inline native confirm()
                document.querySelectorAll('form').forEach(form => {
                    const onsubmitAttr = form.getAttribute('onsubmit');
                    if (onsubmitAttr && onsubmitAttr.includes('return confirm')) {
                        // Extract the message from confirm('...')
                        const match = onsubmitAttr.match(/confirm\(['"](.*?)['"]\)/);
                        const message = match ? match[1] : 'Apakah Anda yakin ingin melakukan aksi ini?';
                        
                        // Remove native confirm
                        form.removeAttribute('onsubmit');
                        
                        // Attach SweetAlert2
                        form.addEventListener('submit', function(e) {
                            e.preventDefault();
                            Swal.fire({
                                title: 'Konfirmasi',
                                text: message,
                                icon: 'warning',
                                showCancelButton: true,
                                confirmButtonColor: '#ef4444',
                                cancelButtonColor: '#94a3b8',
                                confirmButtonText: 'Ya, Lanjutkan!',
                                cancelButtonText: 'Batal',
                                reverseButtons: true,
                                customClass: {
                                    popup: 'rounded-[2rem] shadow-2xl border border-gray-100',
                                    title: 'font-extrabold text-gray-900',
                                    confirmButton: 'font-bold rounded-xl px-6 py-2.5',
                                    cancelButton: 'font-bold rounded-xl px-6 py-2.5'
                                }
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    form.submit();
                                }
                            });
                        });
                    }
                });
            });
        </script>

        <!-- Flash Messages with SweetAlert2 -->
        @if(session('success'))
            <script>
                document.addEventListener('DOMContentLoaded', () => {
                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil!',
                        text: '{{ session('success') }}',
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true,
                        customClass: {
                            popup: 'rounded-[2rem] shadow-2xl border border-gray-100',
                            title: 'font-extrabold text-gray-900'
                        }
                    });
                });
            </script>
        @endif

        @if(session('error'))
            <script>
                document.addEventListener('DOMContentLoaded', () => {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: '{{ session('error') }}',
                        showConfirmButton: true,
                        confirmButtonColor: '#ef4444',
                        customClass: {
                            popup: 'rounded-[2rem] shadow-2xl border border-gray-100',
                            title: 'font-extrabold text-gray-900',
                            confirmButton: 'font-bold rounded-xl px-6 py-2.5'
                        }
                    });
                });
            </script>
        @endif
    </body>
</html>
