<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Buat Amal Usaha Baru
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
                    <form action="{{ route('aums.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-6">
                            <label for="title" class="block text-sm font-medium text-gray-700 mb-2">Judul</label>
                            <input type="text" name="title" id="title" value="{{ old('title') }}"
                                class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-[#0d3b36] focus:border-[#0d3b36]"
                                placeholder="Masukkan judul Amal Usaha..." required>
                            @error('title')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <div>
                                <label for="category" class="block text-sm font-medium text-gray-700 mb-2">Kategori Amal Usaha</label>
                                <input type="text" name="category" id="category" value="{{ old('category') }}"
                                    class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-[#0d3b36] focus:border-[#0d3b36]"
                                    placeholder="Contoh: Pendidikan, Masjid, Klinik..." required>
                                @error('category')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="short_description" class="block text-sm font-medium text-gray-700 mb-2">Deskripsi Singkat</label>
                                <textarea name="short_description" id="short_description" rows="2"
                                    class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-[#0d3b36] focus:border-[#0d3b36]"
                                    placeholder="Deskripsi singkat yang muncul di kartu halaman utama..." required>{{ old('short_description') }}</textarea>
                                @error('short_description')
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
                            <label for="content" class="block text-sm font-medium text-gray-700 mb-2">Isi Amal Usaha</label>
                            <input id="content" type="hidden" name="content" value="{{ old('content') }}">
                            <trix-editor input="content" class="trix-content min-h-[300px] border-gray-300 rounded-lg shadow-sm focus:ring-[#0d3b36] focus:border-[#0d3b36]"></trix-editor>
                            @error('content')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex items-center justify-end gap-4">
                            <a href="{{ route('aums.index') }}" class="text-gray-600 hover:text-gray-800 font-medium">Batal</a>
                            <button type="submit" class="px-6 py-2.5 bg-[#0d3b36] text-white font-semibold rounded-lg hover:bg-opacity-90 transition-all">
                                Simpan Amal Usaha
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
