<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'PRM Banguntapan 3') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased bg-gray-50">
        <div class="min-h-screen flex flex-col sm:flex-row">
            <!-- Left Side - Branding -->
            <div class="hidden sm:flex sm:w-1/2 bg-gradient-to-br from-blue-700 to-indigo-900 justify-center items-center p-12 relative overflow-hidden">
                <!-- Decorative circles -->
                <div class="absolute top-0 left-0 w-64 h-64 bg-white opacity-5 rounded-full -mt-20 -ml-20"></div>
                <div class="absolute bottom-0 right-0 w-96 h-96 bg-yellow-400 opacity-10 rounded-full -mb-32 -mr-32"></div>
                
                <div class="relative z-10 text-white text-center">
                    <x-application-logo class="w-32 h-32 mx-auto mb-8 fill-current text-yellow-400" />
                    <h1 class="text-4xl font-bold mb-4">PRM Banguntapan 3</h1>
                    <p class="text-lg text-blue-100 mb-8 max-w-md mx-auto">Sistem Informasi Manajemen Pimpinan Ranting Muhammadiyah Banguntapan 3.</p>
                </div>
            </div>

            <!-- Right Side - Form -->
            <div class="w-full sm:w-1/2 flex justify-center items-center p-6 sm:p-12">
                <div class="w-full max-w-md">
                    <div class="sm:hidden flex flex-col items-center justify-center mb-8">
                        <x-application-logo class="w-24 h-24 fill-current text-blue-700 mb-4" />
                        <h1 class="text-2xl font-bold text-gray-800">PRM Banguntapan 3</h1>
                    </div>
                    
                    <div class="bg-white px-8 py-10 shadow-2xl rounded-2xl border border-gray-100">
                        <div class="mb-8 text-center sm:text-left">
                            <h2 class="text-2xl font-bold text-gray-800">Selamat Datang</h2>
                            <p class="text-gray-500 mt-2 text-sm">Silakan login untuk mengakses sistem manajemen.</p>
                        </div>
                        {{ $slot }}
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
