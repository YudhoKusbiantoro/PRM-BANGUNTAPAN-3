<x-public-layout>
    <!-- Hero Banner -->
    <section class="relative bg-gradient-to-br from-white via-blue-50 to-blue-100 text-gray-800 pt-16 pb-32 lg:pt-24 lg:pb-48 flex-grow flex items-center overflow-hidden border-b border-blue-100">
        <!-- Abstract Background pattern -->
        <div class="absolute inset-0 opacity-40" style="background-image: radial-gradient(#1e3a8a 1px, transparent 1px); background-size: 40px 40px;"></div>
        
        <!-- Decorative blobs -->
        <div class="absolute top-0 -left-4 w-96 h-96 bg-[#0ea5e9] rounded-full mix-blend-multiply filter blur-[128px] opacity-20 animate-blob"></div>
        <div class="absolute bottom-0 -right-4 w-96 h-96 bg-[#1e3a8a] rounded-full mix-blend-multiply filter blur-[128px] opacity-20 animate-blob animation-delay-2000"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row items-center gap-16">
            <div class="md:w-1/2 space-y-8 text-center md:text-left z-10">
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white border border-blue-100 shadow-sm">
                    <span class="w-2 h-2 rounded-full bg-[#0ea5e9] animate-pulse"></span>
                    <span class="text-sm font-bold text-[#1e3a8a] tracking-wide uppercase">Selamat Datang</span>
                </div>
                <h2 class="text-5xl lg:text-7xl font-extrabold tracking-tight leading-[1.1] text-transparent bg-clip-text bg-gradient-to-r from-[#1e3a8a] to-[#0ea5e9]">
                    {{ $settings['site_name'] ?? 'Pimpinan Ranting Muhammadiyah Banguntapan 3' }}
                </h2>
                <p class="text-lg text-gray-600 max-w-xl mx-auto md:mx-0 leading-relaxed font-medium">
                    {{ $settings['about_text'] ?? 'Mewujudkan masyarakat Islam yang sebenar-benarnya melalui gerakan pencerahan, amal usaha, dan pemberdayaan umat di lingkungan Sorowajan dan sekitarnya.' }}
                </p>
                <div class="pt-6 flex flex-col sm:flex-row gap-4 justify-center md:justify-start">
                    <a href="#sekilas" class="px-8 py-4 bg-gradient-to-r from-[#1e3a8a] to-[#2563eb] text-white font-bold rounded-xl shadow-[0_8px_20px_rgba(37,99,235,0.25)] hover:shadow-[0_10px_25px_rgba(37,99,235,0.4)] hover:-translate-y-1 transition-all duration-300 text-center">Pelajari Lebih Lanjut</a>
                    <a href="#kabar" class="px-8 py-4 bg-white border-2 border-blue-100 text-[#1e3a8a] font-bold rounded-xl hover:bg-blue-50 hover:border-blue-200 transition-all duration-300 text-center shadow-sm">Lihat Agenda</a>
                </div>
            </div>
            
            <div class="md:w-1/2 flex justify-center z-10 mt-12 md:mt-0 relative">
                <div class="absolute inset-0 bg-gradient-to-tr from-[#1e3a8a] to-[#0ea5e9] blur-3xl opacity-10 animate-pulse rounded-full"></div>
                <div class="relative w-full max-w-lg aspect-[4/5] rounded-3xl overflow-hidden shadow-2xl border border-white group">
                     <div class="absolute inset-0 bg-gradient-to-t from-[#020617]/80 via-[#020617]/20 to-transparent z-10"></div>
                     <img src="{{ asset('images/Masjid 1.jpg') }}" alt="Masjid Muhammadiyah" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-1000">
                     <div class="absolute bottom-6 left-6 right-6 bg-white/95 backdrop-blur-lg border border-white/20 p-5 rounded-2xl z-20 transform translate-y-2 group-hover:translate-y-0 transition-all duration-500 shadow-lg">
                         <p class="text-sm font-semibold italic text-gray-800">"Berlomba-lombalah dalam kebaikan." <br><span class="text-xs text-[#0ea5e9] font-bold mt-2 block tracking-wider uppercase">(QS. Al-Baqarah: 148)</span></p>
                     </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sekilas PRM -->
    <section id="sekilas" class="py-24 bg-white relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h3 class="text-[#0ea5e9] font-semibold tracking-wider uppercase mb-2">Tentang Kami</h3>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Sekilas PRM Banguntapan 3</h2>
                <div class="w-24 h-1 bg-[#1e3a8a] mx-auto rounded-full"></div>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-gray-50 rounded-xl p-8 border border-gray-100 shadow-sm hover:shadow-xl transition-all duration-300">
                    <div class="w-14 h-14 bg-[#1e3a8a]/10 rounded-xl flex items-center justify-center mb-6 text-[#1e3a8a] shadow-inner">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                    </div>
                    <h4 class="text-xl font-bold text-gray-900 mb-3">Sejarah Singkat</h4>
                    <p class="text-gray-600 leading-relaxed">{{ $settings['sejarah_singkat'] ?? 'Berdiri sebagai tonggak dakwah Muhammadiyah di tingkat akar rumput, membawa misi pencerahan dan pembaharuan (tajdid) di Banguntapan.' }}</p>
                </div>
                
                <div class="bg-white rounded-xl p-8 border border-gray-100 shadow-lg hover:shadow-xl transition-all duration-300 transform md:-translate-y-4 ring-1 ring-gray-900/5">
                    <div class="w-14 h-14 bg-[#0ea5e9]/20 rounded-xl flex items-center justify-center mb-6 text-[#0ea5e9] shadow-inner">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <h4 class="text-xl font-bold text-gray-900 mb-3">Visi & Misi</h4>
                    <p class="text-gray-600 leading-relaxed">{{ $settings['visi_misi'] ?? 'Menjadi ranting yang unggul dalam pembinaan iman, ilmu, dan amal, serta menjadi rujukan gerakan kemasyarakatan yang berkemajuan.' }}</p>
                </div>
                
                <a href="{{ route('susunan-pengurus') }}" class="block bg-white rounded-2xl p-8 border border-gray-100 shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)] hover:-translate-y-2 transition-all duration-300 group relative overflow-hidden">
                    <div class="w-14 h-14 bg-[#1e3a8a]/10 rounded-xl flex items-center justify-center mb-6 text-[#1e3a8a] shadow-inner group-hover:bg-[#1e3a8a] group-hover:text-white transition-colors">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                    </div>
                    <h4 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-[#1e3a8a] transition-colors">Susunan Pengurus</h4>
                    <p class="text-gray-600 leading-relaxed group-hover:text-gray-800 transition-colors">Digerakkan oleh insan-insan ikhlas yang berdedikasi tinggi untuk memajukan persyarikatan dan menebar manfaat bagi umat. <span class="block mt-2 text-[#0ea5e9] font-semibold text-sm">Lihat Detail &rarr;</span></p>
                </a>
            </div>
        </div>
    </section>

    <!-- Amal Usaha (AUM) -->
    <section id="aum" class="py-24 bg-gray-50 border-t border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-6">
                <div class="max-w-2xl">
                    <h3 class="text-[#0ea5e9] font-semibold tracking-wider uppercase mb-2">Pilar Dakwah</h3>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900">Amal Usaha Muhammadiyah</h2>
                    <p class="mt-4 text-gray-600 text-lg">Wujud nyata khidmat Muhammadiyah untuk masyarakat dalam berbagai bidang kehidupan.</p>
                </div>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($aums as $aum)
                <!-- AUM Card -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-sm border border-gray-100 hover:shadow-xl transition-all duration-300 group flex flex-col">
                    <div class="h-48 bg-gray-200 overflow-hidden relative">
                        @if($aum->image_path)
                            <img src="{{ asset('storage/' . $aum->image_path) }}" alt="{{ $aum->category }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        @else
                            <img src="{{ asset('images/Masjid 2.jpg') }}" alt="{{ $aum->category }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        @endif
                        <div class="absolute top-4 left-4 bg-white/95 backdrop-blur px-3 py-1.5 rounded-md text-xs font-bold text-[#1e3a8a] uppercase tracking-wider shadow-sm">{{ $aum->category }}</div>
                    </div>
                    <div class="p-6 flex-grow flex flex-col">
                        <h4 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-[#1e3a8a] transition-colors">{{ $aum->title }}</h4>
                        <p class="text-gray-600 text-sm mb-6 flex-grow">{{ $aum->short_description }}</p>
                        <a href="{{ route('aum.show', $aum->slug) }}" class="text-[#0ea5e9] font-semibold text-sm hover:text-[#1e3a8a] flex items-center transition-colors">
                            Info Detail <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Kabar & Agenda -->
    <section id="kabar" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h3 class="text-[#0ea5e9] font-semibold tracking-wider uppercase mb-2">Informasi Terkini</h3>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Kabar & Agenda Ranting</h2>
                <div class="w-24 h-1 bg-[#1e3a8a] mx-auto rounded-full"></div>
            </div>
            
            <div class="flex flex-col lg:flex-row gap-12">
                <!-- Kabar & Kegiatan -->
                <div class="lg:w-2/3">
                    <div class="flex items-center justify-between border-b-2 border-gray-100 pb-4 mb-8">
                        <h4 class="text-2xl font-bold text-gray-900">Kabar & Kegiatan Terbaru</h4>
                        <a href="#" class="text-sm font-semibold text-[#1e3a8a] hover:text-[#0ea5e9] transition-colors">Lihat Semua</a>
                    </div>
                    <div class="space-y-8">
                        @forelse($posts as $post)
                        <a href="{{ route('post.show', $post->slug) }}" class="flex flex-col sm:flex-row gap-6 group cursor-pointer bg-gray-50 p-4 rounded-xl border border-gray-100 hover:bg-white hover:shadow-lg transition-all duration-300">
                            <div class="w-full sm:w-56 h-40 rounded-lg overflow-hidden shrink-0">
                                @if($post->image_path)
                                    <img src="{{ asset('storage/' . $post->image_path) }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                @else
                                    <img src="{{ asset('images/Masjid 5.jpg') }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                @endif
                            </div>
                            <div class="flex flex-col justify-center">
                                <div class="flex items-center text-xs font-semibold uppercase tracking-wider text-gray-500 mb-3">
                                    <span class="text-white bg-[#1e3a8a] px-2 py-1 rounded">Informasi</span>
                                    <span class="mx-3">•</span>
                                    <span>{{ $post->created_at->format('d F Y') }}</span>
                                </div>
                                <h5 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-[#1e3a8a] transition-colors leading-snug">{{ $post->title }}</h5>
                                <p class="text-gray-600 line-clamp-2 text-sm leading-relaxed">{!! Str::limit(strip_tags($post->content), 100) !!}</p>
                            </div>
                        </a>
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
                        <div class="absolute top-0 right-0 w-32 h-32 bg-[#1e3a8a]/5 rounded-bl-full -mr-16 -mt-16"></div>
                        
                        <div class="space-y-8 relative z-10">
                            @forelse($agendas as $agenda)
                            <a href="{{ route('agenda.show', $agenda->id) }}" class="flex gap-5 items-start group">
                                <div class="bg-white border border-gray-200 text-center w-16 shrink-0 shadow-sm rounded-xl overflow-hidden group-hover:border-[#1e3a8a] transition-colors">
                                    <span class="block text-xs uppercase bg-[#1e3a8a] text-white font-semibold py-1">{{ \Carbon\Carbon::parse($agenda->start_date)->format('M') }}</span>
                                    <span class="block text-2xl font-bold text-gray-900 py-2">{{ \Carbon\Carbon::parse($agenda->start_date)->format('d') }}</span>
                                </div>
                                <div>
                                    <h6 class="font-bold text-gray-900 text-lg group-hover:text-[#1e3a8a] transition-colors">{{ $agenda->title }}</h6>
                                    <p class="text-sm text-gray-500 mt-2 flex items-center gap-2">
                                        <svg class="w-4 h-4 text-[#0ea5e9]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                        {{ \Carbon\Carbon::parse($agenda->start_date)->format('H:i') }} WIB
                                    </p>
                                    @if($agenda->location)
                                    <p class="text-sm text-gray-500 mt-1 flex items-center gap-2">
                                        <svg class="w-4 h-4 text-[#0ea5e9]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path></svg>
                                        {{ $agenda->location }}
                                    </p>
                                    @endif
                                </div>
                            </a>
                            
                            @if(!$loop->last)
                            <div class="w-full h-px bg-gray-200"></div>
                            @endif
                            @empty
                            <p class="text-gray-500">Belum ada agenda mendatang.</p>
                            @endforelse
                        </div>
                        
                        <a href="#" class="block text-center w-full mt-8 pt-4 border-t border-gray-200 text-[#1e3a8a] font-semibold hover:text-[#0ea5e9] transition-colors text-sm">Lihat Kalender Penuh</a>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Galeri Dokumentasi Kegiatan -->
    <section id="galeri" class="py-24 bg-gray-50 border-t border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h3 class="text-[#0ea5e9] font-semibold tracking-wider uppercase mb-2">Dokumentasi</h3>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Galeri Kegiatan PRM</h2>
                <div class="w-24 h-1 bg-[#1e3a8a] mx-auto rounded-full"></div>
                <p class="mt-6 text-gray-600 text-lg">Jejak langkah dan momen kebersamaan warga Muhammadiyah Banguntapan 3 dalam merajut ukhuwah dan mencerahkan semesta.</p>
            </div>
            
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                @forelse($galleries as $gallery)
                <div class="group relative aspect-square overflow-hidden rounded-xl">
                    <img src="{{ asset('storage/' . $gallery->image_path) }}" alt="{{ $gallery->title }}" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-4">
                        <span class="text-white font-bold">{{ $gallery->title }}</span>
                    </div>
                </div>
                @empty
                <div class="col-span-full text-center py-8 text-gray-500">
                    Belum ada foto galeri.
                </div>
                @endforelse
            </div>
            <div class="mt-10 text-center">
                <a href="#" class="inline-block border-2 border-[#1e3a8a] text-[#1e3a8a] font-bold py-2 px-6 rounded-md hover:bg-[#1e3a8a] hover:text-white transition-colors">Lihat Semua Galeri</a>
            </div>
        </div>
    </section>
    <!-- Lokasi Kami -->
    <section id="lokasi" class="py-24 bg-gray-50 border-t border-gray-200">

    <!-- Hubungi Kami -->
    <section id="lokasi" class="py-24 bg-white border-t border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h3 class="text-[#0ea5e9] font-semibold tracking-wider uppercase mb-2">Hubungi Kami</h3>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Lokasi Kami</h2>
                <p class="text-lg text-gray-600">Kunjungi sekretariat kami langsung atau hubungi kontak yang tersedia.</p>
            </div>

            <div class="max-w-3xl mx-auto">
                <!-- Info & Map -->
                <div>
                    <div class="bg-white p-6 rounded-2xl shadow-lg border border-gray-100 mb-8 flex flex-col gap-4 text-gray-600">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-blue-50 text-[#1e3a8a] rounded-full flex items-center justify-center shrink-0">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 mb-1">Sekretariat</h4>
                                <p>{{ $settings['contact_address'] ?? 'Masjid Jabir bin Abdullah RA, Karangbendo, Banguntapan, Bantul, DIY' }}</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 bg-blue-50 text-[#1e3a8a] rounded-full flex items-center justify-center shrink-0">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 mb-1">Email</h4>
                                <p>{{ $settings['contact_email'] ?? 'email@example.com' }}</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 bg-blue-50 text-[#1e3a8a] rounded-full flex items-center justify-center shrink-0">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 mb-1">Telepon / WhatsApp</h4>
                                <p>{{ $settings['contact_phone'] ?? '081234567890' }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white p-4 rounded-2xl shadow-lg border border-gray-100">
                        <div class="aspect-w-16 aspect-h-9 w-full h-[300px] rounded-xl overflow-hidden">
                            <iframe 
                                src="https://maps.google.com/maps?q=Masjid+Jabir+bin+Abdullah+RA&t=&z=15&ie=UTF8&iwloc=&output=embed" 
                                width="100%" 
                                height="100%" 
                                style="border:0;" 
                                allowfullscreen="" 
                                loading="lazy" 
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>
                        <div class="mt-4 text-center">
                            <a href="https://maps.app.goo.gl/mjZamEgWrH9yHet26" target="_blank" class="inline-flex items-center px-4 py-2 bg-[#1e3a8a] text-white font-semibold rounded-lg hover:bg-blue-800 transition-colors">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path></svg>
                                Buka di Google Maps
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</x-public-layout>
