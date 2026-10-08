<x-app-layout>
    <div class="max-w-5xl mx-auto sm:px-6 lg:px-8 py-10">
        <div class="mb-6 flex justify-between items-center">
            <a href="{{ route('dashboard') }}" class="inline-flex items-center text-sm font-medium text-gray-500 hover:text-red-600 transition-colors">
                <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                Kembali ke Dashboard
            </a>
            @can('pengurus')
            <a href="{{ route('agendas.edit', $agenda) }}" class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-red-500 to-pink-600 text-white text-sm font-medium rounded-full shadow-lg hover:shadow-red-500/30 hover:scale-105 transition-all">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                Edit Agenda
            </a>
            @endcan
        </div>

        <div class="bg-white rounded-[2rem] shadow-xl border border-gray-100 overflow-hidden relative">
            <!-- Decorative Header -->
            <div class="h-40 bg-gradient-to-br from-red-500 via-pink-500 to-orange-400 relative overflow-hidden">
                <div class="absolute inset-0 bg-white/20" style="background-image: radial-gradient(white 1px, transparent 1px); background-size: 20px 20px; opacity: 0.3;"></div>
            </div>

            <div class="px-8 md:px-12 pb-12 relative -mt-16">
                <!-- Date Badge -->
                <div class="w-32 h-32 bg-white rounded-3xl shadow-2xl flex flex-col items-center justify-center border border-gray-50 mb-6">
                    <span class="text-5xl font-extrabold text-red-500 leading-none mb-1">{{ \Carbon\Carbon::parse($agenda->start_date)->format('d') }}</span>
                    <span class="text-sm font-bold text-gray-500 uppercase tracking-widest">{{ \Carbon\Carbon::parse($agenda->start_date)->format('M Y') }}</span>
                </div>

                <div class="flex flex-wrap gap-3 mb-4">
                    <span class="px-4 py-1.5 text-xs font-bold uppercase tracking-widest rounded-full shadow-sm {{ $agenda->status === 'completed' ? 'bg-green-100 text-green-700 border border-green-200' : ($agenda->status === 'ongoing' ? 'bg-yellow-100 text-yellow-700 border border-yellow-200' : 'bg-blue-100 text-blue-700 border border-blue-200') }}">
                        {{ ucfirst($agenda->status) }}
                    </span>
                    <span class="px-4 py-1.5 text-xs font-bold uppercase tracking-widest rounded-full shadow-sm {{ $agenda->visibility === 'public' ? 'bg-indigo-100 text-indigo-700 border border-indigo-200' : 'bg-gray-100 text-gray-700 border border-gray-200' }}">
                        {{ ucfirst($agenda->visibility) }}
                    </span>
                </div>

                <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900 leading-tight mb-8">
                    {{ $agenda->title }}
                </h1>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-10 p-8 bg-gray-50/50 rounded-3xl border border-gray-100">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 rounded-full bg-red-100 text-red-500 flex items-center justify-center shrink-0">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </div>
                        <div>
                            <h4 class="text-xs font-bold text-gray-400 uppercase tracking-wider mb-1">Waktu Pelaksanaan</h4>
                            <p class="text-gray-900 font-semibold">{{ \Carbon\Carbon::parse($agenda->start_date)->format('H:i') }} WIB @if($agenda->end_date) - {{ \Carbon\Carbon::parse($agenda->end_date)->format('H:i') }} WIB @else - Selesai @endif</p>
                        </div>
                    </div>

                    @if($agenda->location)
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 rounded-full bg-orange-100 text-orange-500 flex items-center justify-center shrink-0">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        </div>
                        <div>
                            <h4 class="text-xs font-bold text-gray-400 uppercase tracking-wider mb-1">Lokasi</h4>
                            <p class="text-gray-900 font-semibold">{{ $agenda->location }}</p>
                        </div>
                    </div>
                    @endif
                </div>

                <div class="prose prose-lg prose-red max-w-none text-gray-700 leading-relaxed">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4 border-b pb-4">Deskripsi Kegiatan</h3>
                    @if($agenda->description)
                        <div class="bg-white">
                            {!! nl2br(e($agenda->description)) !!}
                        </div>
                    @else
                        <div class="flex items-center gap-3 text-gray-400 bg-gray-50 p-6 rounded-2xl border border-dashed border-gray-200">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <span class="italic">Belum ada deskripsi rinci untuk agenda ini.</span>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
