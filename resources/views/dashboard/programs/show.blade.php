<x-app-layout>
    <div class="max-w-5xl mx-auto sm:px-6 lg:px-8 py-10">
        <div class="mb-6 flex justify-between items-center">
            <a href="{{ route('dashboard') }}" class="inline-flex items-center text-sm font-medium text-gray-500 hover:text-yellow-600 transition-colors">
                <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                Kembali ke Dashboard
            </a>
            @can('pengurus')
            <a href="{{ route('programs.edit', $program) }}" class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-yellow-500 to-amber-600 text-white text-sm font-medium rounded-full shadow-lg hover:shadow-yellow-500/30 hover:scale-105 transition-all">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                Edit Proker
            </a>
            @endcan
        </div>

        <div class="bg-white rounded-[2rem] shadow-xl border border-gray-100 overflow-hidden relative">
            <!-- Decorative Header -->
            <div class="h-40 bg-gradient-to-br from-yellow-400 via-yellow-500 to-orange-500 relative overflow-hidden">
                <div class="absolute inset-0 bg-white/20" style="background-image: radial-gradient(white 1px, transparent 1px); background-size: 20px 20px; opacity: 0.3;"></div>
            </div>

            <div class="px-8 md:px-12 pb-12 relative -mt-12">
                <!-- Badge Icon -->
                <div class="w-24 h-24 bg-white rounded-3xl shadow-xl flex items-center justify-center border border-gray-50 mb-6">
                    <span class="text-4xl">
                        @if($program->status == 'completed') 🎯
                        @elseif($program->status == 'ongoing') 🚀
                        @else 📝
                        @endif
                    </span>
                </div>

                <div class="flex flex-wrap gap-3 mb-4">
                    <span class="px-4 py-1.5 text-xs font-bold uppercase tracking-widest rounded-full shadow-sm {{ $program->status === 'completed' ? 'bg-green-100 text-green-700 border border-green-200' : ($program->status === 'ongoing' ? 'bg-yellow-100 text-yellow-700 border border-yellow-200' : 'bg-gray-100 text-gray-700 border border-gray-200') }}">
                        {{ ucfirst($program->status) }}
                    </span>
                    @if($program->department)
                    <span class="px-4 py-1.5 text-xs font-bold uppercase tracking-widest rounded-full shadow-sm bg-blue-100 text-blue-700 border border-blue-200">
                        {{ $program->department }}
                    </span>
                    @endif
                </div>

                <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900 leading-tight mb-8">
                    {{ $program->title }}
                </h1>

                <div class="prose prose-lg prose-yellow max-w-none text-gray-700 leading-relaxed bg-gray-50/50 p-8 rounded-3xl border border-gray-100">
                    <h3 class="text-xl font-bold text-gray-900 mb-4 flex items-center gap-2">
                        <svg class="w-6 h-6 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                        Deskripsi Program Kerja
                    </h3>
                    @if($program->description)
                        <div class="bg-transparent">
                            {!! nl2br(e($program->description)) !!}
                        </div>
                    @else
                        <div class="flex items-center gap-3 text-gray-400 bg-white p-6 rounded-2xl border border-dashed border-gray-200">
                            <span class="italic">Belum ada deskripsi rinci untuk proker ini.</span>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
