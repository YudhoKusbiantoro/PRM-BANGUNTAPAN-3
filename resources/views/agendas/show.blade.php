<x-public-layout :title="$agenda->title . ' - PRM Banguntapan 3'">
    <!-- Hero Banner for Detail -->
    <section class="relative bg-[#0ea5e9] text-white pt-32 pb-24 flex items-center overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-r from-[#1e3a8a] to-[#0ea5e9] opacity-95 z-10"></div>
        <img src="{{ asset('images/Masjid 1.jpg') }}" class="absolute inset-0 w-full h-full object-cover z-0 opacity-20">
        
        <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 z-20 text-center">
            <span class="inline-block py-1 px-3 rounded-full bg-white text-[#1e3a8a] font-bold text-sm tracking-widest uppercase mb-4">Agenda Mendatang</span>
            <h1 class="text-4xl md:text-5xl font-extrabold tracking-tight leading-tight mb-6">
                {{ $agenda->title }}
            </h1>
        </div>
    </section>

    <!-- Content Section -->
    <section class="py-16 bg-white">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white p-8 md:p-12 rounded-3xl shadow-xl -mt-32 relative z-30 border border-gray-100">
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-10 pb-10 border-b border-gray-100">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 rounded-full bg-blue-50 flex items-center justify-center text-[#1e3a8a] shrink-0">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        </div>
                        <div>
                            <h4 class="text-sm font-bold text-gray-500 uppercase tracking-wider mb-1">Waktu Pelaksanaan</h4>
                            <p class="text-gray-900 font-semibold">{{ \Carbon\Carbon::parse($agenda->start_date)->format('l, d F Y') }}</p>
                            <p class="text-gray-600">{{ \Carbon\Carbon::parse($agenda->start_date)->format('H:i') }} WIB - Selesai</p>
                        </div>
                    </div>

                    @if($agenda->location)
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 rounded-full bg-blue-50 flex items-center justify-center text-[#1e3a8a] shrink-0">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path></svg>
                        </div>
                        <div>
                            <h4 class="text-sm font-bold text-gray-500 uppercase tracking-wider mb-1">Tempat / Lokasi</h4>
                            <p class="text-gray-900 font-semibold">{{ $agenda->location }}</p>
                        </div>
                    </div>
                    @endif
                </div>

                <div class="prose prose-lg prose-blue max-w-none text-gray-700 leading-relaxed">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Deskripsi Kegiatan</h3>
                    @if($agenda->description)
                        <div class="prose-content">
                            {!! nl2br(e($agenda->description)) !!}
                        </div>
                    @else
                        <p class="text-gray-500 italic">Belum ada deskripsi lebih lanjut untuk agenda ini.</p>
                    @endif
                </div>
            </div>
            
            <div class="text-center mt-12">
                <a href="{{ route('home') }}#kabar" class="inline-flex items-center justify-center px-6 py-3 border border-gray-300 text-gray-700 font-medium rounded-xl hover:bg-gray-50 transition-colors">
                    <svg class="w-5 h-5 mr-2 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                    Kembali ke Beranda
                </a>
            </div>
        </div>
    </section>
</x-public-layout>
