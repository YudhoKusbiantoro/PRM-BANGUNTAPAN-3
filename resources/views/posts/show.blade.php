<x-public-layout :title="$post->title . ' - PRM Banguntapan 3'">
    <!-- Hero Banner for Detail -->
    <section class="relative bg-[#1e3a8a] text-white pt-32 pb-24 flex items-center overflow-hidden">
        <div class="absolute inset-0 bg-[#1e3a8a] opacity-90 z-10"></div>
        @if($post->image_path)
            <img src="{{ asset('storage/' . $post->image_path) }}" class="absolute inset-0 w-full h-full object-cover z-0 opacity-40">
        @else
            <img src="{{ asset('images/Masjid 5.jpg') }}" class="absolute inset-0 w-full h-full object-cover z-0 opacity-40">
        @endif
        
        <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 z-20 text-center">
            <span class="inline-block py-1 px-3 rounded-full bg-[#0ea5e9] text-white font-bold text-sm tracking-widest uppercase mb-4">{{ $post->type ?? 'Informasi' }}</span>
            <h1 class="text-4xl md:text-5xl font-extrabold tracking-tight leading-tight mb-6">
                {{ $post->title }}
            </h1>
            <div class="flex items-center justify-center gap-4 text-sm font-medium text-gray-200">
                <span class="flex items-center gap-1">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    {{ $post->created_at->format('d F Y') }}
                </span>
                @if($post->user)
                <span class="flex items-center gap-1">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                    {{ $post->user->name }}
                </span>
                @endif
            </div>
        </div>
    </section>

    <!-- Content Section -->
    <section class="py-16 bg-white">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white p-8 md:p-12 rounded-3xl shadow-xl -mt-32 relative z-30 border border-gray-100">
                <div class="prose prose-lg prose-blue max-w-none text-gray-700 leading-relaxed">
                    <div class="prose-content">
                        {!! $post->content !!}
                    </div>
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
