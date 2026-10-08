<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-blue-900 leading-tight flex items-center gap-2">
            <svg class="w-6 h-6 text-blue-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
            Edit Dokumen
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-8">
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
            <div class="p-8">
                <form action="{{ route('documents.update', $document) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    
                    <div class="space-y-6">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div>
                                <label for="title" class="block text-sm font-semibold text-gray-700 mb-2">Judul Dokumen <span class="text-red-500">*</span></label>
                                <input type="text" name="title" id="title" class="w-full rounded-xl border-gray-300 focus:border-[#0d3b36] focus:ring focus:ring-[#0d3b36] focus:ring-opacity-20 @error('title') border-red-500 @enderror" value="{{ old('title', $document->title) }}" required>
                                @error('title') <p class="mt-2 text-sm text-red-500">{{ $message }}</p> @enderror
                            </div>
                            <div>
                                <label for="type" class="block text-sm font-semibold text-gray-700 mb-2">Tipe Dokumen</label>
                                <input type="text" name="type" id="type" placeholder="Contoh: Surat Keputusan, Undangan" class="w-full rounded-xl border-gray-300 focus:border-[#0d3b36] focus:ring focus:ring-[#0d3b36] focus:ring-opacity-20 @error('type') border-red-500 @enderror" value="{{ old('type', $document->type) }}">
                                @error('type') <p class="mt-2 text-sm text-red-500">{{ $message }}</p> @enderror
                            </div>
                        </div>

                        <div>
                            <label for="description" class="block text-sm font-semibold text-gray-700 mb-2">Keterangan / Deskripsi</label>
                            <textarea name="description" id="description" rows="3" class="w-full rounded-xl border-gray-300 focus:border-[#0d3b36] focus:ring focus:ring-[#0d3b36] focus:ring-opacity-20 @error('description') border-red-500 @enderror">{{ old('description', $document->description) }}</textarea>
                            @error('description') <p class="mt-2 text-sm text-red-500">{{ $message }}</p> @enderror
                        </div>
                        
                        <div>
                            <label for="file" class="block text-sm font-semibold text-gray-700 mb-2">Ganti File Dokumen (Opsional)</label>
                            <input type="file" name="file" id="file" class="w-full rounded-xl border-gray-300 focus:border-[#0d3b36] focus:ring focus:ring-[#0d3b36] focus:ring-opacity-20 border p-2 @error('file') border-red-500 @enderror">
                            <p class="mt-2 text-xs text-gray-500">Biarkan kosong jika tidak ingin mengubah file. Maksimal 10MB.</p>
                            @error('file') <p class="mt-2 text-sm text-red-500">{{ $message }}</p> @enderror
                        </div>

                        <!-- Submit Buttons -->
                        <div class="flex items-center justify-end gap-3 pt-6 border-t border-gray-100">
                            <a href="{{ route('documents.index') }}" class="px-6 py-2.5 text-sm font-semibold text-gray-600 bg-gray-50 hover:bg-gray-100 rounded-xl transition-colors">
                                Batal
                            </a>
                            <button type="submit" class="px-6 py-2.5 text-sm font-semibold text-white bg-blue-700 hover:bg-blue-800 rounded-xl transition-colors shadow-sm flex items-center gap-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                Simpan Perubahan
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
