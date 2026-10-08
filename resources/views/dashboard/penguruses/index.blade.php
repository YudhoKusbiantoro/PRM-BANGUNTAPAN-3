<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-blue-900 leading-tight flex items-center gap-2">
                <svg class="w-6 h-6 text-blue-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                Susunan Pengurus
            </h2>
            <a href="{{ route('penguruses.create') }}" class="inline-flex items-center gap-2 px-4 py-2 bg-blue-700 text-white text-sm font-semibold rounded-xl hover:bg-blue-800 transition-colors shadow-sm">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                Tambah Pengurus
            </a>
        </div>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        @if(session('success'))
            <div class="mb-6 p-4 bg-green-50 border border-green-200 text-green-700 rounded-xl flex items-center gap-3">
                <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                {{ session('success') }}
            </div>
        @endif

        <div class="mb-6 bg-white p-4 rounded-xl shadow-sm border border-gray-100 flex flex-col sm:flex-row justify-between items-center gap-4">
            <form action="{{ route('penguruses.index') }}" method="GET" class="w-full sm:w-1/2 relative">
                <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari nama atau jabatan..." class="w-full pl-10 pr-4 py-2 border border-gray-200 rounded-lg focus:ring-[#0d3b36] focus:border-[#0d3b36] transition-colors">
                <svg class="w-5 h-5 text-gray-400 absolute left-3 top-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
            </form>
        </div>

        <div class="space-y-12">
            @forelse ($groups as $groupName => $members)
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                    <div class="bg-gray-50 border-b border-gray-100 px-8 py-4">
                        <h3 class="font-extrabold text-lg text-blue-900">{{ $groupName }}</h3>
                    </div>
                    
                    <div class="p-8">
                        <div class="sortable-list grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6" data-division="{{ $groupName }}">
                            @foreach ($members as $pengurus)
                            <div class="bg-white rounded-2xl border border-gray-100 shadow-sm hover:shadow-md transition-shadow relative group flex flex-col items-center p-6" data-id="{{ $pengurus->id }}">
                                
                                <!-- Drag Handle -->
                                <div class="absolute top-3 left-3 text-gray-300 hover:text-gray-500 cursor-move handle p-1">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h16M4 16h16"></path></svg>
                                </div>
                                
                                <!-- Action Buttons -->
                                <div class="absolute top-3 right-3 flex gap-1 opacity-0 group-hover:opacity-100 transition-opacity">
                                    <a href="{{ route('penguruses.edit', $pengurus) }}" class="text-indigo-600 bg-indigo-50 p-1.5 rounded-lg hover:bg-indigo-100" title="Edit">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                                    </a>
                                    <form action="{{ route('penguruses.destroy', $pengurus) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data pengurus ini?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 bg-red-50 p-1.5 rounded-lg hover:bg-red-100" title="Hapus">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                        </button>
                                    </form>
                                </div>

                                <!-- Photo -->
                                @if($pengurus->image_path)
                                    <img src="{{ asset('storage/' . $pengurus->image_path) }}" alt="{{ $pengurus->name }}" class="w-24 h-24 rounded-full object-cover shadow-md mb-4 border-2 border-gray-50">
                                @else
                                    <div class="w-24 h-24 rounded-full bg-blue-50 text-blue-600 flex items-center justify-center text-3xl font-bold shadow-sm mb-4 border-2 border-white">
                                        {{ substr($pengurus->name, 0, 1) }}
                                    </div>
                                @endif
                                
                                <!-- Info -->
                                <h4 class="font-bold text-gray-900 text-center mb-1 text-sm">{{ $pengurus->name }}</h4>
                                <span class="inline-block px-3 py-1 bg-yellow-100 text-yellow-800 text-xs font-bold rounded-full text-center">
                                    {{ $pengurus->position }}
                                </span>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @empty
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-16 text-center">
                    <svg class="w-16 h-16 text-gray-300 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    <p class="text-gray-500 font-medium text-lg">Belum ada data pengurus.</p>
                    <a href="{{ route('penguruses.create') }}" class="mt-4 inline-block text-blue-600 hover:text-blue-800 font-bold">Tambah Pengurus Pertama</a>
                </div>
            @endforelse
        </div>
    </div>

    <!-- Include SortableJS -->
    <script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var lists = document.querySelectorAll('.sortable-list');
            lists.forEach(function(el) {
                Sortable.create(el, {
                    handle: '.handle',
                    animation: 150,
                    ghostClass: 'opacity-50',
                    onEnd: function () {
                        var order = [];
                        el.querySelectorAll('[data-id]').forEach(function (card) {
                            order.push(card.getAttribute('data-id'));
                        });

                        fetch('{{ route("penguruses.reorder") }}', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                            },
                            body: JSON.stringify({ order: order })
                        }).then(response => response.json())
                          .then(data => {
                              if(data.success) {
                                  console.log('Urutan pengurus berhasil diperbarui');
                              }
                          });
                    }
                });
            });
        });
    </script>
</x-app-layout>
