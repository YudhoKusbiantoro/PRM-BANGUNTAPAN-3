<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-blue-900 leading-tight">
            {{ __('Edit Foto Galeri') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-2xl border border-gray-100 p-8">
                <form action="{{ route('galleries.update', $gallery) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    
                    <div class="mb-6">
                        <label for="title" class="block text-sm font-bold text-gray-700 mb-2">Judul / Caption Foto</label>
                        <input type="text" name="title" id="title" value="{{ old('title', $gallery->title) }}" required class="w-full rounded-xl border-gray-300 focus:border-blue-500 focus:ring-blue-500 shadow-sm transition-colors">
                        @error('title')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-8">
                        <label for="image" class="block text-sm font-bold text-gray-700 mb-2">Unggah Foto Baru (Opsional)</label>
                        <div class="mb-4">
                            <p class="text-sm text-gray-500 mb-2">Foto saat ini:</p>
                            <img src="{{ asset('storage/' . $gallery->image_path) }}" class="w-48 h-48 object-cover rounded-lg border border-gray-200">
                        </div>
                        <input type="file" name="image" id="image" class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" accept="image/*">
                        @error('image')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex items-center justify-end gap-4 mt-8 pt-6 border-t border-gray-100">
                        <a href="{{ route('galleries.index') }}" class="text-gray-600 hover:text-gray-800 font-medium">Batal</a>
                        <button type="submit" class="px-6 py-2.5 bg-blue-700 text-white font-semibold rounded-lg hover:bg-blue-800 transition-all shadow-sm">
                            Perbarui Foto Galeri
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
