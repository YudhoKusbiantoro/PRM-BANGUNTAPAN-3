<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-blue-900 leading-tight flex items-center gap-2">
            <svg class="w-6 h-6 text-blue-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
            Buat Agenda Baru
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-8">
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
            <div class="p-8">
                <form action="{{ route('agendas.store') }}" method="POST">
                    @csrf
                    
                    <div class="space-y-6">
                        <div>
                            <label for="title" class="block text-sm font-semibold text-gray-700 mb-2">Judul Agenda <span class="text-red-500">*</span></label>
                            <input type="text" name="title" id="title" class="w-full rounded-xl border-gray-300 focus:border-[#0d3b36] focus:ring focus:ring-[#0d3b36] focus:ring-opacity-20 @error('title') border-red-500 @enderror" value="{{ old('title') }}" required>
                            @error('title') <p class="mt-2 text-sm text-red-500">{{ $message }}</p> @enderror
                        </div>

                        <div>
                            <label for="description" class="block text-sm font-semibold text-gray-700 mb-2">Deskripsi</label>
                            <textarea name="description" id="description" rows="3" class="w-full rounded-xl border-gray-300 focus:border-[#0d3b36] focus:ring focus:ring-[#0d3b36] focus:ring-opacity-20 @error('description') border-red-500 @enderror">{{ old('description') }}</textarea>
                            @error('description') <p class="mt-2 text-sm text-red-500">{{ $message }}</p> @enderror
                        </div>
                        
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div>
                                <label for="start_date" class="block text-sm font-semibold text-gray-700 mb-2">Waktu Mulai <span class="text-red-500">*</span></label>
                                <input type="datetime-local" name="start_date" id="start_date" class="w-full rounded-xl border-gray-300 focus:border-[#0d3b36] focus:ring focus:ring-[#0d3b36] focus:ring-opacity-20 @error('start_date') border-red-500 @enderror" value="{{ old('start_date') }}" required>
                                @error('start_date') <p class="mt-2 text-sm text-red-500">{{ $message }}</p> @enderror
                            </div>
                            <div>
                                <label for="end_date" class="block text-sm font-semibold text-gray-700 mb-2">Waktu Selesai</label>
                                <input type="datetime-local" name="end_date" id="end_date" class="w-full rounded-xl border-gray-300 focus:border-[#0d3b36] focus:ring focus:ring-[#0d3b36] focus:ring-opacity-20 @error('end_date') border-red-500 @enderror" value="{{ old('end_date') }}">
                                @error('end_date') <p class="mt-2 text-sm text-red-500">{{ $message }}</p> @enderror
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div>
                                <label for="location" class="block text-sm font-semibold text-gray-700 mb-2">Lokasi</label>
                                <input type="text" name="location" id="location" class="w-full rounded-xl border-gray-300 focus:border-[#0d3b36] focus:ring focus:ring-[#0d3b36] focus:ring-opacity-20 @error('location') border-red-500 @enderror" value="{{ old('location') }}">
                                @error('location') <p class="mt-2 text-sm text-red-500">{{ $message }}</p> @enderror
                            </div>
                            <div>
                                <label for="status" class="block text-sm font-semibold text-gray-700 mb-2">Status <span class="text-red-500">*</span></label>
                                <select name="status" id="status" class="w-full rounded-xl border-gray-300 focus:border-[#0d3b36] focus:ring focus:ring-[#0d3b36] focus:ring-opacity-20 @error('status') border-red-500 @enderror" required>
                                    <option value="upcoming" {{ old('status') == 'upcoming' ? 'selected' : '' }}>Akan Datang</option>
                                    <option value="ongoing" {{ old('status') == 'ongoing' ? 'selected' : '' }}>Berlangsung</option>
                                    <option value="completed" {{ old('status') == 'completed' ? 'selected' : '' }}>Selesai</option>
                                </select>
                                @error('status') <p class="mt-2 text-sm text-red-500">{{ $message }}</p> @enderror
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-6">
                            <div>
                                <label for="visibility" class="block text-sm font-semibold text-gray-700 mb-2">Target Akses (Visibilitas) <span class="text-red-500">*</span></label>
                                <select name="visibility" id="visibility" class="w-full rounded-xl border-gray-300 focus:border-[#0d3b36] focus:ring focus:ring-[#0d3b36] focus:ring-opacity-20 @error('visibility') border-red-500 @enderror" required>
                                    <option value="public" {{ old('visibility') == 'public' ? 'selected' : '' }}>Publik (Tampil di Website Utama & Dashboard)</option>
                                    <option value="private" {{ old('visibility') == 'private' ? 'selected' : '' }}>Internal (Hanya tampil di Dashboard Pengurus/Anggota)</option>
                                </select>
                                <p class="text-xs text-gray-500 mt-1">Gunakan 'Internal' untuk rapat/agenda rahasia pengurus.</p>
                                @error('visibility') <p class="mt-2 text-sm text-red-500">{{ $message }}</p> @enderror
                            </div>
                        </div>

                        <!-- Submit Buttons -->
                        <div class="flex items-center justify-end gap-3 pt-6 border-t border-gray-100">
                            <a href="{{ route('agendas.index') }}" class="px-6 py-2.5 text-sm font-semibold text-gray-600 bg-gray-50 hover:bg-gray-100 rounded-xl transition-colors">
                                Batal
                            </a>
                            <button type="submit" class="px-6 py-2.5 text-sm font-semibold text-white bg-blue-700 hover:bg-blue-800 rounded-xl transition-colors shadow-sm flex items-center gap-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                Simpan Agenda
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
