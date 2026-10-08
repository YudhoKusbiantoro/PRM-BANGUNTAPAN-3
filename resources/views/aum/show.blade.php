<x-public-layout :title="$aum->title . ' - PRM Banguntapan 3'">
    <!-- Hero Banner for Detail -->
    <section class="relative bg-[#1e3a8a] text-white pt-32 pb-24 flex items-center overflow-hidden">
        <div class="absolute inset-0 bg-[#1e3a8a] opacity-90 z-10"></div>
        @if($aum->image_path)
            <img src="{{ asset('storage/' . $aum->image_path) }}" class="absolute inset-0 w-full h-full object-cover z-0 opacity-40">
        @else
            <img src="{{ asset('images/Masjid 2.jpg') }}" class="absolute inset-0 w-full h-full object-cover z-0 opacity-40">
        @endif
        
        <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 z-20 text-center">
            <span class="inline-block py-1 px-3 rounded-full bg-[#d4af37] text-white font-bold text-sm tracking-widest uppercase mb-4">{{ $aum->category }}</span>
            <h1 class="text-4xl md:text-5xl font-extrabold tracking-tight leading-tight mb-6">
                {{ $aum->title }}
            </h1>
        </div>
    </section>

    <!-- Content Section -->
    <section class="py-16 bg-white">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white p-8 md:p-12 rounded-3xl shadow-xl -mt-32 relative z-30 border border-gray-100">
                <div class="prose prose-lg prose-blue max-w-none text-gray-700 leading-relaxed">
                    <p class="text-xl font-medium text-[#1e3a8a] mb-8 leading-relaxed">
                        {{ $aum->short_description }}
                    </p>
                    
                    <div class="w-16 h-1 bg-[#d4af37] rounded-full mb-8"></div>
                    
                    <div class="prose-content">
                        {!! $aum->content !!}
                    </div>
                    
                    <div class="mt-12 bg-gray-50 p-6 rounded-2xl border border-gray-100 flex flex-col sm:flex-row items-center justify-between gap-6">
                        <div>
                            <h4 class="font-bold text-gray-900 text-lg">Tertarik untuk mendukung Amal Usaha ini?</h4>
                            <p class="text-sm text-gray-600 mt-1">Anda bisa berkontribusi melalui tenaga, pikiran, atau sedekah.</p>
                        </div>
                        <a href="https://wa.me/6281234567890" target="_blank" class="shrink-0 px-6 py-3 bg-[#1e3a8a] text-white font-semibold rounded-xl hover:bg-blue-800 transition-colors flex items-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                            Hubungi Pengurus
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-12">
                <a href="{{ route('home') }}#aum" class="inline-flex items-center justify-center px-6 py-3 border border-gray-300 text-gray-700 font-medium rounded-xl hover:bg-gray-50 transition-colors">
                    <svg class="w-5 h-5 mr-2 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                    Kembali ke Beranda
                </a>
            </div>
        </div>
    </section>
</x-public-layout>
