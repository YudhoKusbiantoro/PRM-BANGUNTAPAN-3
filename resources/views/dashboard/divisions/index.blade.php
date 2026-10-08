<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-blue-900 leading-tight flex items-center gap-2">
                <svg class="w-6 h-6 text-blue-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 002-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                Kelola Divisi / Majelis
            </h2>
        </div>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-8">
        @if(session('success'))
            <div class="mb-6 p-4 bg-green-50 border border-green-200 text-green-700 rounded-xl flex items-center gap-3">
                <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                {{ session('success') }}
            </div>
        @endif
        @if(session('error'))
            <div class="mb-6 p-4 bg-red-50 border border-red-200 text-red-700 rounded-xl flex items-center gap-3">
                {{ session('error') }}
            </div>
        @endif

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Form Tambah Divisi -->
            <div class="md:col-span-1">
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
                    <h3 class="font-bold text-gray-900 mb-4 flex items-center gap-2">
                        <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                        Tambah Divisi Baru
                    </h3>
                    <form action="{{ route('divisions.store') }}" method="POST">
                        @csrf
                        <div class="space-y-4">
                            <div>
                                <label for="name" class="block text-sm font-semibold text-gray-700 mb-1">Nama Divisi/Majelis</label>
                                <input type="text" name="name" id="name" class="w-full rounded-xl border-gray-300 focus:ring focus:ring-blue-200 focus:border-blue-500" required placeholder="Contoh: Majelis Tabligh">
                            </div>
                            <div>
                                <label for="order" class="block text-sm font-semibold text-gray-700 mb-1">Nomor Urut Tampil</label>
                                <input type="number" name="order" id="order" class="w-full rounded-xl border-gray-300 focus:ring focus:ring-blue-200 focus:border-blue-500" required value="1">
                                <p class="text-xs text-gray-500 mt-1">Untuk mengurutkan posisi divisi ini di website.</p>
                            </div>
                            <button type="submit" class="w-full py-2 bg-blue-700 text-white rounded-xl font-bold hover:bg-blue-800 transition-colors">Simpan Divisi</button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Daftar Divisi -->
            <div class="md:col-span-2">
                <div class="bg-white shadow-sm sm:rounded-2xl border border-gray-100 overflow-hidden">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="w-12 px-6 py-4"></th>
                                <th class="px-6 py-4 text-left text-xs font-bold text-gray-500 uppercase">Urutan</th>
                                <th class="px-6 py-4 text-left text-xs font-bold text-gray-500 uppercase">Nama Divisi</th>
                                <th class="px-6 py-4 text-right text-xs font-bold text-gray-500 uppercase">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-100" id="sortable-divisions">
                            @forelse($divisions as $div)
                            <tr class="hover:bg-gray-50 transition-colors" data-id="{{ $div->id }}">
                                <td class="px-6 py-4 text-gray-400 cursor-move text-center handle">
                                    <svg class="w-6 h-6 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h16M4 16h16"></path></svg>
                                </td>
                                <td class="px-6 py-4 font-mono font-bold text-gray-600 order-text">{{ $div->order }}</td>
                                <td class="px-6 py-4 font-bold text-gray-900">{{ $div->name }}</td>
                                <td class="px-6 py-4 text-right">
                                    <form action="{{ route('divisions.destroy', $div) }}" method="POST" class="inline" onsubmit="return confirm('Yakin ingin menghapus Divisi ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-900 bg-red-50 px-3 py-1.5 rounded-lg text-sm font-medium">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="3" class="px-6 py-8 text-center text-gray-500">Belum ada divisi yang dibuat.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Include SortableJS -->
    <script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var el = document.getElementById('sortable-divisions');
            if (el) {
                var sortable = Sortable.create(el, {
                    handle: '.handle',
                    animation: 150,
                    onEnd: function () {
                        var order = [];
                        el.querySelectorAll('tr').forEach(function (row, index) {
                            order.push(row.getAttribute('data-id'));
                            // Update the UI immediately
                            var orderText = row.querySelector('.order-text');
                            if (orderText) {
                                orderText.innerText = index + 1;
                            }
                        });

                        fetch('{{ route("divisions.reorder") }}', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                            },
                            body: JSON.stringify({ order: order })
                        }).then(response => response.json())
                          .then(data => {
                              if(data.success) {
                                  console.log('Urutan divisi berhasil diperbarui');
                              }
                          });
                    }
                });
            }
        });
    </script>
</x-app-layout>
