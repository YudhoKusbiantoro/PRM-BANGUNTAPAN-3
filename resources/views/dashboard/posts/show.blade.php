<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $post->title }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-8 text-gray-900">
                    <div class="flex items-center gap-3 mb-6">
                        <span class="px-2.5 py-1 text-xs font-semibold rounded-full {{ $post->type === 'lazismu' ? 'bg-yellow-100 text-yellow-800' : 'bg-blue-100 text-blue-800' }}">
                            {{ ucfirst($post->type) }}
                        </span>
                        <span class="px-2.5 py-1 text-xs font-semibold rounded-full {{ $post->visibility === 'public' ? 'bg-green-100 text-green-800' : 'bg-orange-100 text-orange-800' }}">
                            {{ ucfirst($post->visibility) }}
                        </span>
                        <span class="text-sm text-gray-500">{{ $post->created_at->format('d F Y, H:i') }} oleh {{ $post->user->name ?? '-' }}</span>
                    </div>
                    <div class="prose max-w-none">
                        {!! nl2br(e($post->content)) !!}
                    </div>
                    <div class="mt-8 pt-6 border-t flex gap-4">
                        <a href="{{ route('posts.edit', $post) }}" class="px-4 py-2 bg-indigo-600 text-white text-sm rounded-lg hover:bg-indigo-700">Edit</a>
                        <a href="{{ route('posts.index') }}" class="px-4 py-2 bg-gray-200 text-gray-700 text-sm rounded-lg hover:bg-gray-300">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
