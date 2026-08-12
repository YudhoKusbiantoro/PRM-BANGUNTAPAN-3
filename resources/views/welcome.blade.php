<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PRM Banguntapan 3</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700,800&display=swap" rel="stylesheet" />
    
    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <!-- Fallback if Vite is not running -->
        <script src="https://cdn.tailwindcss.com"></script>
    @endif
</head>
<body class="bg-gray-50 text-gray-800 antialiased font-['Inter'] selection:bg-[#d4af37] selection:text-white flex flex-col min-h-screen">

    <!-- Sticky Header -->
    <header class="sticky top-0 z-50 bg-white shadow-md bg-opacity-95 backdrop-blur-sm transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">
            <div class="flex items-center gap-3 cursor-pointer">
                <img src="{{ asset('images/logo-muhammadiyah-official.png') }}" alt="Logo Muhammadiyah" class="h-12 w-auto">
                <div>
                    <h1 class="text-xl font-bold text-[#0d3b36] leading-tight tracking-tight">PRM</h1>
                    <p class="text-sm font-semibold text-gray-500 uppercase tracking-widest">Banguntapan 3</p>
                </div>
            </div>
            
            <nav class="hidden md:flex items-center space-x-8">
                <a href="#sekilas" class="text-gray-600 hover:text-[#d4af37] font-medium transition-colors">Sekilas PRM</a>
                <a href="#aum" class="text-gray-600 hover:text-[#d4af37] font-medium transition-colors">Amal Usaha</a>
                <a href="#kabar" class="text-gray-600 hover:text-[#d4af37] font-medium transition-colors">Kabar & Agenda</a>
            </nav>
            
            <div class="hidden md:flex">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="px-5 py-2 bg-[#0d3b36] text-white font-medium rounded-md hover:bg-opacity-90 transition-all shadow-sm">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="px-5 py-2 border-2 border-[#0d3b36] text-[#0d3b36] font-medium rounded-md hover:bg-[#0d3b36] hover:text-white transition-all">Masuk</a>
                    @endauth
                @endif
            </div>

            <!-- Mobile menu button -->
            <div class="md:hidden flex items-center">
                <button class="text-gray-500 hover:text-[#0d3b36] focus:outline-none">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
        </div>
    </header>

    <!-- Hero Banner -->
    <section class="relative bg-[#0d3b36] text-white py-32 flex-grow flex items-center overflow-hidden">
        <!-- Abstract Background pattern -->
        <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(#d4af37 1px, transparent 1px); background-size: 30px 30px;"></div>
        
        <!-- Decorative blob -->
        <div class="absolute -top-24 -right-24 w-96 h-96 bg-[#165a53] rounded-full blur-3xl opacity-50"></div>
        <div class="absolute -bottom-24 -left-24 w-72 h-72 bg-[#d4af37] rounded-full blur-3xl opacity-20"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row items-center gap-12">
            <div class="md:w-1/2 space-y-6 text-center md:text-left z-10">
                <span class="inline-block py-1 px-3 rounded-full bg-[#d4af37] bg-opacity-20 text-[#d4af37] border border-[#d4af37]/30 font-semibold text-sm tracking-wider uppercase mb-2">Selamat Datang</span>
                <h2 class="text-5xl lg:text-6xl font-extrabold tracking-tight leading-tight drop-shadow-sm">
                    Pimpinan Ranting <br> Muhammadiyah <br>
                    <span class="text-[#d4af37]">Banguntapan 3</span>
                </h2>
                <p class="text-lg text-gray-300 max-w-xl mx-auto md:mx-0 leading-relaxed">
                    Mewujudkan masyarakat Islam yang sebenar-benarnya melalui gerakan pencerahan, amal usaha, dan pemberdayaan umat di lingkungan Sorowajan dan sekitarnya.
                </p>
                <div class="pt-4 flex flex-col sm:flex-row gap-4 justify-center md:justify-start">
                    <a href="#sekilas" class="px-8 py-3 bg-[#d4af37] text-[#0d3b36] font-bold rounded-md hover:bg-yellow-400 hover:shadow-lg transition-all transform hover:-translate-y-1 text-center">Pelajari Lebih Lanjut</a>
                    <a href="#kabar" class="px-8 py-3 bg-transparent border-2 border-white/70 text-white font-bold rounded-md hover:bg-white hover:text-[#0d3b36] transition-all text-center">Lihat Agenda</a>
                </div>
            </div>
            
            <div class="md:w-1/2 flex justify-center z-10 mt-12 md:mt-0">
                <div class="relative w-full max-w-md aspect-square rounded-2xl overflow-hidden shadow-2xl border-4 border-white/10 group">
                     <div class="absolute inset-0 bg-gradient-to-tr from-[#0d3b36] to-[#d4af37] opacity-60 mix-blend-multiply group-hover:opacity-40 transition-opacity duration-500 z-10"></div>
                     <img src="https://images.unsplash.com/photo-1579782559196-8575037d0c3a?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Masjid Muhammadiyah" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700">
                     <div class="absolute bottom-4 left-4 right-4 bg-white/10 backdrop-blur-md border border-white/20 p-4 rounded-xl z-20">
                         <p class="text-sm font-medium italic">"Berlomba-lombalah dalam kebaikan." <br><span class="text-xs text-[#d4af37] font-semibold mt-1 block">(QS. Al-Baqarah: 148)</span></p>
                     </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sekilas PRM -->
    <section id="sekilas" class="py-24 bg-white relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h3 class="text-[#d4af37] font-semibold tracking-wider uppercase mb-2">Tentang Kami</h3>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Sekilas PRM Banguntapan 3</h2>
                <div class="w-24 h-1 bg-[#0d3b36] mx-auto rounded-full"></div>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-gray-50 rounded-xl p-8 border border-gray-100 shadow-sm hover:shadow-xl transition-all duration-300">
                    <div class="w-14 h-14 bg-[#0d3b36]/10 rounded-xl flex items-center justify-center mb-6 text-[#0d3b36] shadow-inner">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                    </div>
                    <h4 class="text-xl font-bold text-gray-900 mb-3">Sejarah Singkat</h4>
                    <p class="text-gray-600 leading-relaxed">Berdiri sebagai tonggak dakwah Muhammadiyah di tingkat akar rumput, membawa misi pencerahan dan pembaharuan (tajdid) di Banguntapan.</p>
                </div>
                
                <div class="bg-white rounded-xl p-8 border border-gray-100 shadow-lg hover:shadow-xl transition-all duration-300 transform md:-translate-y-4 ring-1 ring-gray-900/5">
                    <div class="w-14 h-14 bg-[#d4af37]/20 rounded-xl flex items-center justify-center mb-6 text-[#d4af37] shadow-inner">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <h4 class="text-xl font-bold text-gray-900 mb-3">Visi & Misi</h4>
                    <p class="text-gray-600 leading-relaxed">Menjadi ranting yang unggul dalam pembinaan iman, ilmu, dan amal, serta menjadi rujukan gerakan kemasyarakatan yang berkemajuan.</p>
                </div>
                
                <div class="bg-gray-50 rounded-xl p-8 border border-gray-100 shadow-sm hover:shadow-xl transition-all duration-300">
                    <div class="w-14 h-14 bg-[#0d3b36]/10 rounded-xl flex items-center justify-center mb-6 text-[#0d3b36] shadow-inner">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                    </div>
                    <h4 class="text-xl font-bold text-gray-900 mb-3">Susunan Pengurus</h4>
                    <p class="text-gray-600 leading-relaxed">Digerakkan oleh insan-insan ikhlas yang berdedikasi tinggi untuk memajukan persyarikatan dan menebar manfaat bagi umat.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Amal Usaha (AUM) -->
    <section id="aum" class="py-24 bg-gray-50 border-t border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-6">
                <div class="max-w-2xl">
                    <h3 class="text-[#d4af37] font-semibold tracking-wider uppercase mb-2">Pilar Dakwah</h3>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900">Amal Usaha Muhammadiyah</h2>
                    <p class="mt-4 text-gray-600 text-lg">Wujud nyata khidmat Muhammadiyah untuk masyarakat dalam berbagai bidang kehidupan.</p>
                </div>
                <a href="#" class="inline-flex items-center text-[#0d3b36] font-semibold hover:text-[#d4af37] transition-colors bg-white px-5 py-2 rounded-full shadow-sm border border-gray-200">
                    Lihat Semua AUM
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </a>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- AUM Card 1 -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-sm border border-gray-100 hover:shadow-xl transition-all duration-300 group flex flex-col">
                    <div class="h-48 bg-gray-200 overflow-hidden relative">
                        <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Pendidikan" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute top-4 left-4 bg-white/95 backdrop-blur px-3 py-1.5 rounded-md text-xs font-bold text-[#0d3b36] uppercase tracking-wider shadow-sm">Pendidikan</div>
                    </div>
                    <div class="p-6 flex-grow flex flex-col">
                        <h4 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-[#0d3b36] transition-colors">TPA / Madin</h4>
                        <p class="text-gray-600 text-sm mb-6 flex-grow">Membangun generasi Qur'ani yang berakhlak mulia melalui pendidikan agama usia dini yang interaktif dan menyenangkan.</p>
                        <a href="#" class="text-[#d4af37] font-semibold text-sm hover:text-[#0d3b36] flex items-center transition-colors">
                            Info Detail <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </a>
                    </div>
                </div>
                
                <!-- AUM Card 2 -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-sm border border-gray-100 hover:shadow-xl transition-all duration-300 group flex flex-col">
                    <div class="h-48 bg-gray-200 overflow-hidden relative">
                        <img src="https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Kesehatan" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute top-4 left-4 bg-white/95 backdrop-blur px-3 py-1.5 rounded-md text-xs font-bold text-[#0d3b36] uppercase tracking-wider shadow-sm">Sosial & Kesehatan</div>
                    </div>
                    <div class="p-6 flex-grow flex flex-col">
                        <h4 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-[#0d3b36] transition-colors">Layanan AmbulanMU</h4>
                        <p class="text-gray-600 text-sm mb-6 flex-grow">Layanan ambulan gratis bagi warga yang membutuhkan penanganan medis darurat atau pengantaran jenazah.</p>
                        <a href="#" class="text-[#d4af37] font-semibold text-sm hover:text-[#0d3b36] flex items-center transition-colors">
                            Info Detail <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </a>
                    </div>
                </div>
                
                <!-- AUM Card 3 -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-sm border border-gray-100 hover:shadow-xl transition-all duration-300 group flex flex-col md:col-span-2 lg:col-span-1">
                    <div class="h-48 bg-gray-200 overflow-hidden relative">
                        <img src="https://images.unsplash.com/photo-1542838132-92c53300491e?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Ekonomi" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute top-4 left-4 bg-white/95 backdrop-blur px-3 py-1.5 rounded-md text-xs font-bold text-[#0d3b36] uppercase tracking-wider shadow-sm">Ekonomi & Lazismu</div>
                    </div>
                    <div class="p-6 flex-grow flex flex-col">
                        <h4 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-[#0d3b36] transition-colors">Koperasi Jamaah</h4>
                        <p class="text-gray-600 text-sm mb-6 flex-grow">Memberdayakan ekonomi umat melalui koperasi syariah yang adil dan menguntungkan jamaah sekitar.</p>
                        <a href="#" class="text-[#d4af37] font-semibold text-sm hover:text-[#0d3b36] flex items-center transition-colors">
                            Info Detail <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Kabar & Agenda -->
    <section id="kabar" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h3 class="text-[#d4af37] font-semibold tracking-wider uppercase mb-2">Informasi Terkini</h3>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Kabar & Agenda Ranting</h2>
                <div class="w-24 h-1 bg-[#0d3b36] mx-auto rounded-full"></div>
            </div>
            
            <div class="flex flex-col lg:flex-row gap-12">
                <!-- Berita Terbaru -->
                <div class="lg:w-2/3">
                    <div class="flex items-center justify-between border-b-2 border-gray-100 pb-4 mb-8">
                        <h4 class="text-2xl font-bold text-gray-900">Berita Terbaru</h4>
                        <a href="#" class="text-sm font-semibold text-[#0d3b36] hover:text-[#d4af37] transition-colors">Indeks Berita</a>
                    </div>
                    <div class="space-y-8">
                        @forelse($posts as $post)
                        <article class="flex flex-col sm:flex-row gap-6 group cursor-pointer bg-gray-50 p-4 rounded-xl border border-gray-100 hover:bg-white hover:shadow-lg transition-all duration-300">
                            <div class="w-full sm:w-56 h-40 rounded-lg overflow-hidden shrink-0">
                                <img src="https://images.unsplash.com/photo-1544396821-4dd40b938eb2?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            </div>
                            <div class="flex flex-col justify-center">
                                <div class="flex items-center text-xs font-semibold uppercase tracking-wider text-gray-500 mb-3">
                                    <span class="text-white {{ $post->type === 'lazismu' ? 'bg-[#d4af37]' : 'bg-[#0d3b36]' }} px-2 py-1 rounded">{{ $post->type }}</span>
                                    <span class="mx-3">•</span>
                                    <span>{{ $post->created_at->format('d F Y') }}</span>
                                </div>
                                <h5 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-[#0d3b36] transition-colors leading-snug">{{ $post->title }}</h5>
                                <p class="text-gray-600 line-clamp-2 text-sm leading-relaxed">{{ Str::limit($post->content, 100) }}</p>
                            </div>
                        </article>
                        @empty
                        <p class="text-gray-500">Belum ada informasi terbaru.</p>
                        @endforelse
                    </div>
                </div>
                
                <!-- Agenda Mendatang -->
                <div class="lg:w-1/3">
                    <h4 class="text-2xl font-bold border-b-2 border-gray-100 pb-4 mb-8 text-gray-900">Agenda Mendatang</h4>
                    <div class="bg-gray-50 rounded-2xl p-6 border border-gray-100 shadow-sm relative overflow-hidden">
                        <!-- Decorative bg -->
                        <div class="absolute top-0 right-0 w-32 h-32 bg-[#0d3b36]/5 rounded-bl-full -mr-16 -mt-16"></div>
                        
                        <div class="space-y-8 relative z-10">
                            <div class="flex gap-5 items-start group">
                                <div class="bg-white border border-gray-200 text-center w-16 shrink-0 shadow-sm rounded-xl overflow-hidden group-hover:border-[#0d3b36] transition-colors">
                                    <span class="block text-xs uppercase bg-[#0d3b36] text-white font-semibold py-1">Agt</span>
                                    <span class="block text-2xl font-bold text-gray-900 py-2">15</span>
                                </div>
                                <div>
                                    <h6 class="font-bold text-gray-900 text-lg group-hover:text-[#0d3b36] transition-colors">Kajian Tafsir Al-Qur'an</h6>
                                    <p class="text-sm text-gray-500 mt-2 flex items-center">
                                        <svg class="w-4 h-4 mr-2 text-[#d4af37]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                        19:30 - Selesai
                                    </p>
                                    <p class="text-sm text-gray-500 flex items-center mt-1.5">
                                        <svg class="w-4 h-4 mr-2 text-[#d4af37]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                        Masjid Al-Huda
                                    </p>
                                </div>
                            </div>
                            
                            <div class="w-full h-px bg-gray-200"></div>
                            
                            <div class="flex gap-5 items-start group">
                                <div class="bg-white border border-gray-200 text-center w-16 shrink-0 shadow-sm rounded-xl overflow-hidden group-hover:border-[#0d3b36] transition-colors">
                                    <span class="block text-xs uppercase bg-[#d4af37] text-white font-semibold py-1">Agt</span>
                                    <span class="block text-2xl font-bold text-gray-900 py-2">22</span>
                                </div>
                                <div>
                                    <h6 class="font-bold text-gray-900 text-lg group-hover:text-[#0d3b36] transition-colors">Rapat Pleno Pengurus</h6>
                                    <p class="text-sm text-gray-500 mt-2 flex items-center">
                                        <svg class="w-4 h-4 mr-2 text-[#d4af37]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                        20:00 - Selesai
                                    </p>
                                    <p class="text-sm text-gray-500 flex items-center mt-1.5">
                                        <svg class="w-4 h-4 mr-2 text-[#d4af37]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                        Gedung Dakwah
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                        <a href="#" class="block text-center w-full mt-8 pt-4 border-t border-gray-200 text-[#0d3b36] font-semibold hover:text-[#d4af37] transition-colors text-sm">Lihat Kalender Penuh</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white mt-auto">
        <div class="h-1 w-full bg-gradient-to-r from-[#0d3b36] via-[#d4af37] to-[#0d3b36]"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-12">
                <div class="col-span-1 md:col-span-4">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="bg-white p-2 rounded-lg">
                            <img src="{{ asset('images/logo-muhammadiyah-official.png') }}" alt="Logo Muhammadiyah" class="h-10 w-auto">
                        </div>
                        <span class="text-2xl font-bold tracking-tight">PRM Banguntapan 3</span>
                    </div>
                    <p class="text-gray-400 leading-relaxed mb-8 pr-4">Menyebarkan risalah Islam berkemajuan, menggembirakan dakwah di tingkat ranting, dan membangun peradaban umat yang utama.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 rounded-full bg-white/5 border border-white/10 flex items-center justify-center hover:bg-[#d4af37] hover:border-[#d4af37] hover:text-white transition-all">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-white/5 border border-white/10 flex items-center justify-center hover:bg-[#d4af37] hover:border-[#d4af37] hover:text-white transition-all">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-white/5 border border-white/10 flex items-center justify-center hover:bg-[#d4af37] hover:border-[#d4af37] hover:text-white transition-all">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm3 8h-1.35c-.538 0-.65.221-.65.778v1.222h2l-.209 2h-1.791v7h-3v-7h-2v-2h2v-2.308c0-1.769.931-2.692 3.029-2.692h1.971v3z"/></svg>
                        </a>
                    </div>
                </div>
                
                <div class="col-span-1 md:col-span-3 lg:col-span-2">
                    <h5 class="text-lg font-bold mb-6 text-white border-b border-gray-800 pb-3">Tautan Cepat</h5>
                    <ul class="space-y-3 text-gray-400">
                        <li><a href="#sekilas" class="hover:text-[#d4af37] transition-colors flex items-center"><span class="w-1.5 h-1.5 rounded-full bg-[#d4af37] mr-2"></span>Sekilas PRM</a></li>
                        <li><a href="#aum" class="hover:text-[#d4af37] transition-colors flex items-center"><span class="w-1.5 h-1.5 rounded-full bg-[#d4af37] mr-2"></span>Amal Usaha</a></li>
                        <li><a href="#kabar" class="hover:text-[#d4af37] transition-colors flex items-center"><span class="w-1.5 h-1.5 rounded-full bg-[#d4af37] mr-2"></span>Agenda Ranting</a></li>
                        <li><a href="#" class="hover:text-[#d4af37] transition-colors flex items-center"><span class="w-1.5 h-1.5 rounded-full bg-[#d4af37] mr-2"></span>Struktur Organisasi</a></li>
                    </ul>
                </div>
                
                <div class="col-span-1 md:col-span-5 lg:col-span-3">
                    <h5 class="text-lg font-bold mb-6 text-white border-b border-gray-800 pb-3">Hubungi Kami</h5>
                    <ul class="space-y-4 text-gray-400 text-sm">
                        <li class="flex items-start gap-4">
                            <div class="bg-gray-800 p-2 rounded-lg text-[#d4af37] mt-1 shrink-0">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            </div>
                            <span class="leading-relaxed">Gedung Dakwah Muhammadiyah Banguntapan 3<br>Jl. Sorowajan Baru, Banguntapan, Bantul, DIY 55198</span>
                        </li>
                        <li class="flex items-center gap-4">
                            <div class="bg-gray-800 p-2 rounded-lg text-[#d4af37] shrink-0">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                            </div>
                            <span>(0274) 123456</span>
                        </li>
                        <li class="flex items-center gap-4">
                            <div class="bg-gray-800 p-2 rounded-lg text-[#d4af37] shrink-0">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            </div>
                            <span>info@prmbanguntapan3.or.id</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-gray-800 mt-16 pt-8 flex flex-col md:flex-row justify-between items-center gap-4 text-gray-500 text-sm">
                <p>&copy; {{ date('Y') }} PRM Banguntapan 3. Hak Cipta Dilindungi.</p>
                <div class="flex items-center gap-2">
                    <span>KKN 067 UMY 2026</span>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>
