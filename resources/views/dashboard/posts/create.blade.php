<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Buat Konten Baru
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('posts.store') }}" method="POST">
                        @csrf

                        <div class="mb-6">
                            <label for="title" class="block text-sm font-medium text-gray-700 mb-2">Judul</label>
                            <input type="text" name="title" id="title" value="{{ old('title') }}"
                                class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-[#0d3b36] focus:border-[#0d3b36]"
                                placeholder="Masukkan judul konten..." required>
                            @error('title')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <div>
                                <label for="type" class="block text-sm font-medium text-gray-700 mb-2">Tipe Konten</label>
                                <select name="type" id="type"
                                    class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-[#0d3b36] focus:border-[#0d3b36]">
                                    <option value="berita" {{ old('type') == 'berita' ? 'selected' : '' }}>Berita</option>
                                    <option value="kegiatan" {{ old('type') == 'kegiatan' ? 'selected' : '' }}>Kegiatan</option>
                                    <option value="pengumuman" {{ old('type') == 'pengumuman' ? 'selected' : '' }}>Pengumuman</option>
                                    <option value="lazismu" {{ old('type') == 'lazismu' ? 'selected' : '' }}>LazisMU</option>
                                    <option value="info" {{ old('type') == 'info' ? 'selected' : '' }}>Info Internal</option>
                                </select>
                                @error('type')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="visibility" class="block text-sm font-medium text-gray-700 mb-2">Visibilitas</label>
                                <select name="visibility" id="visibility"
                                    class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-[#0d3b36] focus:border-[#0d3b36]">
                                    <option value="public" {{ old('visibility') == 'public' ? 'selected' : '' }}>Public (Bisa dilihat semua orang)</option>
                                    <option value="private" {{ old('visibility') == 'private' ? 'selected' : '' }}>Private (Hanya anggota login)</option>
                                </select>
                                @error('visibility')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-6">
                            <label for="content" class="block text-sm font-medium text-gray-700 mb-2">Isi Konten</label>
                            <textarea name="content" id="content" rows="12"
                                class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-[#0d3b36] focus:border-[#0d3b36]"
                                placeholder="Tulis isi konten di sini..." required>{{ old('content') }}</textarea>
                            @error('content')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex items-center justify-end gap-4">
                            <a href="{{ route('posts.index') }}" class="text-gray-600 hover:text-gray-800 font-medium">Batal</a>
                            <button type="submit" class="px-6 py-2.5 bg-[#0d3b36] text-white font-semibold rounded-lg hover:bg-opacity-90 transition-all">
                                Simpan Konten
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
