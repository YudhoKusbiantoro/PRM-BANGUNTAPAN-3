<x-app-layout>
    <div class="max-w-5xl mx-auto sm:px-6 lg:px-8 py-10">
        <div class="mb-6 flex justify-between items-center">
            <a href="{{ route('dashboard') }}" class="inline-flex items-center text-sm font-medium text-gray-500 hover:text-blue-600 transition-colors">
                <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                Kembali ke Dashboard
            </a>
            @can('pengurus')
            <a href="{{ route('posts.edit', $post) }}" class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-blue-600 to-indigo-600 text-white text-sm font-medium rounded-full shadow-lg hover:shadow-indigo-500/30 hover:scale-105 transition-all">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                Edit Berita
            </a>
            @endcan
        </div>

        <article class="bg-white rounded-[2rem] shadow-xl border border-gray-100 overflow-hidden">
            @if($post->image_path)
            <div class="w-full h-[400px] relative overflow-hidden group">
                <div class="absolute inset-0 bg-gradient-to-t from-gray-900/80 via-gray-900/20 to-transparent z-10"></div>
                <img src="{{ asset('storage/' . $post->image_path) }}" alt="{{ $post->title }}" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700">
                <div class="absolute bottom-0 left-0 p-8 z-20 w-full">
                    <div class="flex gap-3 mb-4">
                        <span class="px-4 py-1.5 text-xs font-bold uppercase tracking-widest rounded-full {{ $post->type === 'lazismu' ? 'bg-yellow-400 text-yellow-900' : 'bg-blue-500 text-white' }} shadow-lg">
                            {{ $post->type }}
                        </span>
                        <span class="px-4 py-1.5 text-xs font-bold uppercase tracking-widest rounded-full {{ $post->visibility === 'public' ? 'bg-green-500 text-white' : 'bg-gray-700 text-white' }} shadow-lg">
                            {{ $post->visibility }}
                        </span>
                    </div>
                    <h1 class="text-4xl md:text-5xl font-extrabold text-white leading-tight">
                        {{ $post->title }}
                    </h1>
                </div>
            </div>
            @else
            <div class="p-8 md:p-12 pb-0 bg-gradient-to-br from-blue-50 to-indigo-50 border-b border-gray-100 relative overflow-hidden">
                <div class="absolute top-0 right-0 p-12 opacity-5">
                    <svg class="w-64 h-64" fill="currentColor" viewBox="0 0 24 24"><path d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9.5a2 2 0 00-2-2h-2"></path></svg>
                </div>
                <div class="relative z-10">
                    <div class="flex gap-3 mb-6">
                        <span class="px-4 py-1.5 text-xs font-bold uppercase tracking-widest rounded-full {{ $post->type === 'lazismu' ? 'bg-yellow-100 text-yellow-800' : 'bg-blue-100 text-blue-800' }}">
                            {{ $post->type }}
                        </span>
                        <span class="px-4 py-1.5 text-xs font-bold uppercase tracking-widest rounded-full {{ $post->visibility === 'public' ? 'bg-green-100 text-green-800' : 'bg-gray-200 text-gray-800' }}">
                            {{ $post->visibility }}
                        </span>
                    </div>
                    <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900 leading-tight mb-8">
                        {{ $post->title }}
                    </h1>
                </div>
            </div>
            @endif

            <div class="p-8 md:p-12 pt-8">
                <div class="flex items-center gap-4 pb-8 mb-8 border-b border-gray-100">
                    <div class="w-14 h-14 rounded-full bg-gradient-to-tr from-blue-600 to-indigo-600 text-white flex items-center justify-center font-bold text-xl shadow-lg">
                        {{ substr($post->user->name ?? 'A', 0, 1) }}
                    </div>
                    <div>
                        <p class="font-bold text-gray-900 text-lg">{{ $post->user->name ?? 'Administrator' }}</p>
                        <p class="text-sm text-gray-500 font-medium">{{ $post->created_at->format('l, d F Y - H:i') }}</p>
                    </div>
                </div>
                
                <div class="prose prose-lg prose-blue max-w-none text-gray-700 leading-relaxed font-serif">
                    {!! $post->content !!}
                </div>
            </div>
        </article>
    </div>
</x-app-layout>
