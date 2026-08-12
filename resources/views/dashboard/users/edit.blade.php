<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Ubah Role: {{ $user->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="mb-6 p-4 bg-gray-50 rounded-lg">
                        <p class="text-sm text-gray-600"><strong>Nama:</strong> {{ $user->name }}</p>
                        <p class="text-sm text-gray-600 mt-1"><strong>Email:</strong> {{ $user->email }}</p>
                        <p class="text-sm text-gray-600 mt-1"><strong>Role Saat Ini:</strong> {{ ucfirst($user->role) }}</p>
                    </div>

                    <form action="{{ route('users.update', $user) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-6">
                            <label for="role" class="block text-sm font-medium text-gray-700 mb-2">Pilih Role Baru</label>
                            <select name="role" id="role"
                                class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-[#0d3b36] focus:border-[#0d3b36]">
                                <option value="anggota" {{ $user->role === 'anggota' ? 'selected' : '' }}>Anggota</option>
                                <option value="pengurus" {{ $user->role === 'pengurus' ? 'selected' : '' }}>Pengurus</option>
                                <option value="admin" {{ $user->role === 'admin' ? 'selected' : '' }}>Admin</option>
                            </select>
                            @error('role')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex items-center justify-end gap-4">
                            <a href="{{ route('users.index') }}" class="text-gray-600 hover:text-gray-800 font-medium">Batal</a>
                            <button type="submit" class="px-6 py-2.5 bg-[#0d3b36] text-white font-semibold rounded-lg hover:bg-opacity-90 transition-all">
                                Simpan Perubahan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
