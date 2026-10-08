<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Buat Konten Baru
        </h2>
        <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
        <script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>
        <style>
            trix-toolbar [data-trix-button-group="file-tools"] {
                display: none;
            }
        </style>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
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

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                            <div>
                                <label for="type" class="block text-sm font-medium text-gray-700 mb-2">Tipe Konten</label>
                                <select name="type" id="type"
                                    class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-[#0d3b36] focus:border-[#0d3b36]">
                                    <option value="berita" {{ old('type') == 'berita' ? 'selected' : '' }}>Berita</option>
                                    <option value="kegiatan" {{ old('type') == 'kegiatan' ? 'selected' : '' }}>Kegiatan</option>
                                    <option value="agenda" {{ old('type') == 'agenda' ? 'selected' : '' }}>Agenda Mendatang</option>
                                </select>
                                <p class="mt-2 text-xs text-gray-500">
                                    <strong>Tips:</strong> Memilih tipe <span class="font-semibold text-[#0d3b36]">Agenda Mendatang</span> akan memunculkan tulisan ini di kolom <strong>"Agenda Mendatang"</strong>. Berita dan Kegiatan akan masuk ke <strong>"Kabar & Kegiatan"</strong>.
                                </p>
                                @error('type')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="category_id" class="block text-sm font-medium text-gray-700 mb-2">Kategori Berita</label>
                                <select name="category_id" id="category_id"
                                    class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-[#0d3b36] focus:border-[#0d3b36]">
                                    <option value="">Pilih Kategori (Opsional)</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
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
                            <label for="image" class="block text-sm font-medium text-gray-700 mb-2">Gambar Sampul</label>
                            <input type="file" name="image" id="image" accept="image/*"
                                class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-[#0d3b36] focus:border-[#0d3b36] p-2 border">
                            @error('image')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label for="content" class="block text-sm font-medium text-gray-700 mb-2">Isi Konten</label>
                            <input id="content" type="hidden" name="content" value="{{ old('content') }}">
                            <trix-editor input="content" class="trix-content min-h-[300px] border-gray-300 rounded-lg shadow-sm focus:ring-[#0d3b36] focus:border-[#0d3b36]"></trix-editor>
                            @error('content')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex items-center justify-end gap-4">
                            <a href="{{ route('posts.index') }}" class="text-gray-600 hover:text-gray-800 font-medium">Batal</a>
                            <button type="submit" name="status" value="draft" class="px-6 py-2.5 bg-yellow-500 text-white font-semibold rounded-lg hover:bg-opacity-90 transition-all">
                                Simpan Draft
                            </button>
                            <button type="submit" name="status" value="published" class="px-6 py-2.5 bg-[#0d3b36] text-white font-semibold rounded-lg hover:bg-opacity-90 transition-all">
                                Publish Sekarang
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
