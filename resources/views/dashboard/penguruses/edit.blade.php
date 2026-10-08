<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-blue-900 leading-tight">
            {{ __('Edit Pengurus') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-2xl border border-gray-100 p-8">
                <form action="{{ route('penguruses.update', $pengurus) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label for="name" class="block text-sm font-bold text-gray-700 mb-2">Nama Lengkap</label>
                            <input type="text" name="name" id="name" value="{{ old('name', $pengurus->name) }}" required class="w-full rounded-xl border-gray-300 focus:border-blue-500 focus:ring-blue-500 shadow-sm transition-colors">
                            @error('name')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="position" class="block text-sm font-bold text-gray-700 mb-2">Jabatan</label>
                            <input type="text" name="position" id="position" value="{{ old('position', $pengurus->position) }}" required class="w-full rounded-xl border-gray-300 focus:border-blue-500 focus:ring-blue-500 shadow-sm transition-colors">
                            @error('position')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label for="division_id" class="block text-sm font-bold text-gray-700 mb-2">Divisi / Majelis <span class="text-red-500">*</span></label>
                            <select name="division_id" id="division_id" required class="w-full rounded-xl border-gray-300 focus:border-blue-500 focus:ring-blue-500 shadow-sm transition-colors">
                                <option value="" disabled>-- Pilih Divisi --</option>
                                @foreach($divisions as $div)
                                    <option value="{{ $div->id }}" {{ old('division_id', $pengurus->division_id) == $div->id ? 'selected' : '' }}>{{ $div->name }}</option>
                                @endforeach
                            </select>
                            @error('division_id')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="level" class="block text-sm font-bold text-gray-700 mb-2">Tingkat Jabatan <span class="text-red-500">*</span></label>
                            <select name="level" id="level" required class="w-full rounded-xl border-gray-300 focus:border-blue-500 focus:ring-blue-500 shadow-sm transition-colors">
                                <option value="1" {{ old('level', $pengurus->level) == 1 ? 'selected' : '' }}>Ketua (Tampil paling atas)</option>
                                <option value="2" {{ old('level', $pengurus->level) == 2 ? 'selected' : '' }}>Wakil Ketua</option>
                                <option value="3" {{ old('level', $pengurus->level) == 3 ? 'selected' : '' }}>Sekretaris</option>
                                <option value="4" {{ old('level', $pengurus->level) == 4 ? 'selected' : '' }}>Bendahara</option>
                                <option value="5" {{ old('level', $pengurus->level) == 5 ? 'selected' : '' }}>Anggota</option>
                            </select>
                            @error('level')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-8">
                        <label for="image" class="block text-sm font-bold text-gray-700 mb-2">Foto Profil Baru (Opsional)</label>
                        @if($pengurus->image_path)
                        <div class="mb-4">
                            <img src="{{ asset('storage/' . $pengurus->image_path) }}" class="w-24 h-24 rounded-full object-cover border border-gray-200">
                        </div>
                        @endif
                        <input type="file" name="image" id="image" class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" accept="image/*">
                        @error('image')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex items-center justify-end gap-4 mt-8 pt-6 border-t border-gray-100">
                        <a href="{{ route('penguruses.index') }}" class="text-gray-600 hover:text-gray-800 font-medium">Batal</a>
                        <button type="submit" class="px-6 py-2.5 bg-blue-700 text-white font-semibold rounded-lg hover:bg-blue-800 transition-all shadow-sm">
                            Perbarui Pengurus
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
