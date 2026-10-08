<x-app-layout>
    <!-- We omit the header slot to remove the default white bar -->

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-8">
        
        <!-- Hero Section -->
        <div class="relative overflow-hidden bg-gradient-to-br from-blue-900 via-blue-800 to-indigo-900 rounded-3xl shadow-xl border border-blue-700/50">
            <!-- Decorative Elements -->
            <div class="absolute top-0 right-0 -mt-16 -mr-16">
                <svg class="w-64 h-64 text-white/5" fill="currentColor" viewBox="0 0 100 100"><circle cx="50" cy="50" r="50"></circle></svg>
            </div>
            <div class="absolute bottom-0 left-0 -mb-16 -ml-16">
                <svg class="w-48 h-48 text-white/5" fill="currentColor" viewBox="0 0 100 100"><circle cx="50" cy="50" r="50"></circle></svg>
            </div>
            
            <div class="relative z-10 p-8 md:p-12 lg:p-16 flex flex-col md:flex-row items-center justify-between gap-8">
                <div class="text-white space-y-4 max-w-2xl">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white/10 border border-white/20 text-blue-100 text-sm font-medium backdrop-blur-sm shadow-sm">
                        <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"/></svg>
                        Portal Internal PRM
                    </div>
                    <h1 class="text-3xl md:text-5xl font-extrabold tracking-tight">
                        Selamat Datang, <br/> <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-300 to-yellow-500">{{ Auth::user()->name }}</span>
                    </h1>
                    <p class="text-blue-100 text-lg md:text-xl leading-relaxed opacity-90 max-w-xl">
                        Ini adalah ruang virtual kita. Dapatkan informasi internal terbaru dan pantau program kerja PRM Banguntapan 3 di sini.
                    </p>
                </div>
                <div class="hidden md:block">
                    <div class="w-40 h-40 bg-white/10 rounded-full flex items-center justify-center backdrop-blur-md border-4 border-white/20 shadow-2xl relative">
                        <div class="absolute inset-0 bg-blue-500 rounded-full animate-ping opacity-20"></div>
                        <span class="text-7xl">🕌</span>
                    </div>
                </div>
            </div>
        </div>

        @if(auth()->user()->role !== 'anggota')
            <!-- Aksi Cepat (Quick Actions) -->
            <div class="flex flex-wrap gap-4">
                @can('pengurus')
                <a href="{{ route('posts.index') }}" class="group flex items-center gap-4 bg-white px-6 py-4 rounded-2xl shadow-sm hover:shadow-md border border-gray-100 hover:border-blue-200 transition-all flex-1 min-w-[250px]">
                    <div class="w-12 h-12 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                    </div>
                    <div>
                        <h3 class="font-bold text-gray-900 group-hover:text-blue-700 transition-colors">Tulis Berita</h3>
                        <p class="text-xs text-gray-500">Kelola konten website</p>
                    </div>
                </a>

                <a href="{{ route('programs.index') }}" class="group flex items-center gap-4 bg-white px-6 py-4 rounded-2xl shadow-sm hover:shadow-md border border-gray-100 hover:border-yellow-200 transition-all flex-1 min-w-[250px]">
                    <div class="w-12 h-12 rounded-xl bg-yellow-50 text-yellow-600 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path></svg>
                    </div>
                    <div>
                        <h3 class="font-bold text-gray-900 group-hover:text-yellow-700 transition-colors">Program Kerja</h3>
                        <p class="text-xs text-gray-500">Pantau proker ranting</p>
                    </div>
                </a>
                @endcan
                @can('admin')
                <a href="{{ route('users.index') }}" class="group flex items-center gap-4 bg-white px-6 py-4 rounded-2xl shadow-sm hover:shadow-md border border-gray-100 hover:border-purple-200 transition-all flex-1 min-w-[250px]">
                    <div class="w-12 h-12 rounded-xl bg-purple-50 text-purple-600 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                    </div>
                    <div>
                        <h3 class="font-bold text-gray-900 group-hover:text-purple-700 transition-colors">Kelola Pengguna</h3>
                        <p class="text-xs text-gray-500">Atur akun admin & pengurus</p>
                    </div>
                </a>
                @endcan
            </div>
        @endif

        <div class="grid lg:grid-cols-3 gap-8">
            <!-- Informasi Internal Feed -->
            <div class="lg:col-span-2 space-y-6">
                <div class="flex items-center justify-between">
                    <h2 class="text-2xl font-bold text-gray-900 flex items-center gap-2">
                        <span class="w-8 h-8 rounded-lg bg-blue-100 text-blue-700 flex items-center justify-center">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9.5a2 2 0 00-2-2h-2"></path></svg>
                        </span>
                        Papan Informasi
                    </h2>
                </div>

                @if(isset($privatePosts) && $privatePosts->count() > 0)
                    <div class="space-y-4">
                    @foreach($privatePosts as $post)
                        <a href="{{ route('posts.show', $post->id) }}" class="block bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-md transition-shadow group">
                            <div class="p-6 md:p-8">
                                <div class="flex items-center gap-3 mb-5">
                                    <div class="w-10 h-10 rounded-full bg-gradient-to-tr from-blue-600 to-indigo-600 text-white flex items-center justify-center font-bold shadow-sm">
                                        {{ substr($post->author->name ?? 'A', 0, 1) }}
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-gray-900">{{ $post->author->name ?? 'Admin' }}</h4>
                                        <p class="text-xs text-gray-500">{{ $post->created_at->format('d M Y, H:i') }}</p>
                                    </div>
                                    <div class="ml-auto">
                                        <span class="px-3 py-1 bg-blue-50 text-blue-700 rounded-full text-[10px] font-bold uppercase tracking-widest">{{ $post->type }}</span>
                                    </div>
                                </div>
                                <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-blue-700 transition-colors">{{ $post->title }}</h3>
                                <p class="text-gray-600 leading-relaxed">{{ Str::limit($post->content, 150) }}</p>
                            </div>
                        </a>
                    @endforeach
                    </div>
                @else
                    <div class="text-center py-12 bg-white rounded-3xl border border-dashed border-gray-200 shadow-sm">
                        <svg class="w-16 h-16 text-gray-300 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path></svg>
                        <p class="text-gray-500 font-bold text-lg">Belum ada pengumuman</p>
                        <p class="text-gray-400 text-sm mt-1">Informasi internal akan muncul di sini</p>
                    </div>
                @endif
            </div>

                <!-- Transparansi Sidebar -->
            <div class="lg:col-span-1 space-y-6">

                <!-- Agenda Kegiatan Widget -->
                <div class="bg-white rounded-3xl shadow-sm border border-gray-100 p-6">
                    <h3 class="font-bold text-gray-900 flex items-center gap-2 mb-6">
                        <span class="w-8 h-8 rounded-lg bg-red-100 text-red-600 flex items-center justify-center">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        </span>
                        Agenda Mendatang
                    </h3>
                    
                    <div class="space-y-4">
                        @forelse($upcomingAgendas as $agenda)
                        <a href="{{ route('agendas.show', $agenda->id) }}" class="block flex gap-4 p-3 rounded-2xl hover:bg-red-50 transition-colors border border-transparent hover:border-red-100">
                            <div class="bg-red-50 border border-red-100 text-center rounded-xl p-2 min-w-[60px] h-fit">
                                <span class="block text-red-600 font-extrabold text-lg leading-none">{{ \Carbon\Carbon::parse($agenda->start_date)->format('d') }}</span>
                                <span class="block text-red-400 text-[10px] font-bold uppercase tracking-wider mt-1">{{ \Carbon\Carbon::parse($agenda->start_date)->format('M') }}</span>
                            </div>
                            <div>
                                <h5 class="font-bold text-gray-900 text-sm leading-tight">{{ $agenda->title }}</h5>
                                <p class="text-xs text-gray-500 mt-1 flex items-center gap-1">
                                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                    {{ \Carbon\Carbon::parse($agenda->start_date)->format('H:i') }}
                                </p>
                                @if($agenda->location)
                                <p class="text-xs text-gray-500 mt-1 flex items-center gap-1">
                                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                    {{ $agenda->location }}
                                </p>
                                @endif
                            </div>
                        </a>
                        @empty
                        <div class="text-center py-6">
                            <p class="text-gray-400 text-sm">Belum ada agenda terdekat</p>
                        </div>
                        @endforelse
                    </div>
                </div>

                <!-- Proker Widget -->
                <div class="bg-white rounded-3xl shadow-sm border border-gray-100 p-6">
                    <h3 class="font-bold text-gray-900 flex items-center gap-2 mb-6">
                        <span class="w-8 h-8 rounded-lg bg-yellow-100 text-yellow-700 flex items-center justify-center">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path></svg>
                        </span>
                        Program Kerja Terkini
                    </h3>
                    
                    <div class="space-y-4">
                        @forelse($programs as $program)
                        <a href="{{ route('programs.show', $program->id) }}" class="block flex items-start gap-3 p-3 rounded-2xl hover:bg-gray-50 transition-colors border border-transparent hover:border-gray-100">
                            @if($program->status == 'completed')
                                <div class="bg-green-100 text-green-600 p-2 rounded-full shrink-0 mt-0.5">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                </div>
                            @elseif($program->status == 'ongoing')
                                <div class="bg-yellow-100 text-yellow-600 p-2 rounded-full shrink-0 mt-0.5">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path></svg>
                                </div>
                            @else
                                <div class="bg-gray-100 text-gray-500 p-2 rounded-full shrink-0 mt-0.5">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                </div>
                            @endif
                            <div>
                                <h5 class="font-bold text-gray-900 text-sm leading-tight">{{ $program->title }}</h5>
                                <p class="text-[10px] font-bold text-gray-500 mt-1 uppercase tracking-wider">{{ $program->department }}</p>
                            </div>
                        </a>
                        @empty
                        <div class="text-center py-6">
                            <p class="text-gray-400 text-sm">Belum ada Proker</p>
                        </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>

    </div>
</x-app-layout>
