<x-public-layout>
    <x-slot name="title">Susunan Pengurus - PRM Banguntapan 3</x-slot>

    <!-- Header Section with animated background -->
    <section class="bg-[#1e3a8a] text-white py-24 relative overflow-hidden">
        <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(#d4af37 1px, transparent 1px); background-size: 40px 40px;"></div>
        <div class="absolute -top-24 -right-24 w-96 h-96 bg-[#2563eb] rounded-full blur-3xl opacity-30 mix-blend-screen"></div>
        <div class="absolute -bottom-24 -left-24 w-72 h-72 bg-[#d4af37] rounded-full blur-3xl opacity-20 mix-blend-screen"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <span class="inline-block py-1 px-3 rounded-full bg-[#d4af37]/20 text-[#d4af37] border border-[#d4af37]/30 font-semibold text-sm tracking-widest uppercase mb-4 shadow-sm">Struktur Organisasi</span>
            <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight mb-6 drop-shadow-lg">Susunan Pengurus</h1>
            <p class="text-xl md:text-2xl text-gray-200 max-w-3xl mx-auto font-light leading-relaxed">
                Pimpinan Ranting Muhammadiyah Banguntapan III<br>
                <span class="text-[#d4af37] font-semibold tracking-wide block mt-2">Periode 2022 - 2027</span>
            </p>
        </div>
        
        <!-- Custom Shape Divider -->
        <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none z-10">
            <svg class="relative block w-full h-12" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V120H0V95.8C59.71,118.08,130.83,121.13,195.2,111.45,237.5,105.15,280.46,80.12,321.39,56.44Z" class="fill-gray-50"></path>
            </svg>
        </div>
    </section>

    <!-- Content Section -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-24">
            
            @forelse($groups as $groupName => $members)
                <div>
                    <!-- Section Title -->
                    <div class="text-center mb-16">
                        <h2 class="text-3xl font-extrabold text-[#1e3a8a] relative inline-block">
                            {{ $groupName }}
                            <div class="absolute -bottom-4 left-1/2 transform -translate-x-1/2 w-24 h-1 bg-gradient-to-r from-transparent via-[#d4af37] to-transparent"></div>
                        </h2>
                    </div>

                    <!-- Cards Grid -->
                    <div class="flex flex-wrap justify-center gap-6">
                        @foreach($members as $pengurus)
                            @php
                                $isTopLevel = in_array($groupName, ['Dewan Penasehat', 'Pimpinan Harian']);
                                
                                $cardClasses = $isTopLevel ? 'w-full sm:w-[45%] lg:w-[30%]' : 'w-full sm:w-[45%] md:w-[30%] lg:w-[22%]';
                                $avatarClasses = $isTopLevel ? 'w-32 h-32 text-4xl' : 'w-24 h-24 text-3xl';
                                $titleClasses = $isTopLevel ? 'text-xl' : 'text-lg';
                                
                                // Accent colors
                                $accentFrom = $isTopLevel ? 'from-[#d4af37]' : 'from-[#1e3a8a]';
                                $accentTo = $isTopLevel ? 'to-yellow-500' : 'to-blue-600';
                            @endphp

                            <div class="{{ $cardClasses }} bg-white rounded-2xl p-6 text-center shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 border border-gray-100 group relative overflow-hidden flex flex-col items-center">
                                <!-- Top Accent Line -->
                                <div class="absolute top-0 left-0 w-full h-1.5 bg-gradient-to-r {{ $accentFrom }} {{ $accentTo }}"></div>
                                
                                @if($pengurus->image_path)
                                    <img src="{{ asset('storage/' . $pengurus->image_path) }}" alt="{{ $pengurus->name }}" class="{{ $avatarClasses }} rounded-full object-cover shadow-md mb-5 ring-4 ring-gray-50 group-hover:scale-105 transition-transform z-10 relative">
                                @else
                                    <div class="{{ $avatarClasses }} bg-gray-50 text-gray-300 border-2 border-gray-100 rounded-full flex items-center justify-center font-bold shadow-inner mb-5 ring-4 ring-white group-hover:text-[#1e3a8a] group-hover:bg-blue-50 group-hover:border-blue-100 transition-all z-10 relative">
                                        {{ substr($pengurus->name, 0, 1) }}
                                    </div>
                                @endif
                                
                                <h3 class="{{ $titleClasses }} font-bold text-gray-800 relative z-10 mb-2 leading-tight group-hover:text-[#1e3a8a] transition-colors">{{ $pengurus->name }}</h3>
                                <p class="text-xs font-bold text-[#d4af37] uppercase tracking-wider">{{ $pengurus->position }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            @empty
                <div class="col-span-full text-center py-20 bg-white rounded-3xl shadow-sm border border-dashed border-gray-200">
                    <svg class="w-16 h-16 text-gray-300 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                    <p class="text-gray-500 text-xl font-medium">Susunan pengurus sedang dalam proses pembaruan data.</p>
                </div>
            @endforelse
            
        </div>
    </section>
</x-public-layout>
