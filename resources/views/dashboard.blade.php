<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }} ({{ ucfirst(auth()->user()->role) }})
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            @if(auth()->user()->role === 'anggota')
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <h3 class="text-lg font-bold mb-4">Informasi Internal PRM</h3>
                        @if(isset($privatePosts) && $privatePosts->count() > 0)
                            <div class="space-y-4">
                            @foreach($privatePosts as $post)
                                <div class="border-b pb-4">
                                    <h4 class="font-semibold">{{ $post->title }}</h4>
                                    <p class="text-sm text-gray-500 mb-2">{{ $post->created_at->format('d M Y') }} - {{ $post->type }}</p>
                                    <p class="text-gray-700">{{ $post->content }}</p>
                                </div>
                            @endforeach
                            </div>
                        @else
                            <p class="text-gray-500">Belum ada informasi internal saat ini.</p>
                        @endif
                    </div>
                </div>
            @else
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                        <h3 class="text-gray-500 text-sm font-semibold uppercase tracking-wider">Total Konten</h3>
                        <p class="text-3xl font-bold mt-2">{{ $stats['total_posts'] }}</p>
                    </div>
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                        <h3 class="text-gray-500 text-sm font-semibold uppercase tracking-wider">Konten Publik</h3>
                        <p class="text-3xl font-bold mt-2 text-green-600">{{ $stats['public_posts'] }}</p>
                    </div>
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                        <h3 class="text-gray-500 text-sm font-semibold uppercase tracking-wider">Konten Internal</h3>
                        <p class="text-3xl font-bold mt-2 text-orange-600">{{ $stats['private_posts'] }}</p>
                    </div>
                </div>
                
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <h3 class="text-lg font-bold mb-4">Aksi Cepat</h3>
                        <div class="flex gap-4">
                            @can('pengurus')
                            <a href="{{ route('posts.index') }}" class="px-4 py-2 bg-[#0d3b36] text-white rounded hover:bg-opacity-90">Kelola Konten</a>
                            @endcan
                            
                            @can('admin')
                            <a href="{{ route('users.index') }}" class="px-4 py-2 bg-gray-800 text-white rounded hover:bg-gray-700">Kelola Pengguna</a>
                            @endcan
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</x-app-layout>
