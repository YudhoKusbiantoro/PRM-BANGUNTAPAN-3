<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('System Configuration') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @if (session('success'))
                <div class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                    <span class="block sm:inline">{{ session('success') }}</span>
                </div>
            @endif

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('settings.update') }}" method="POST">
                        @csrf
                        @method('PUT')

                        @foreach($settings as $setting)
                            <div class="mb-6">
                                <label for="{{ $setting->key }}" class="block text-sm font-medium text-gray-700 mb-2">
                                    {{ ucwords(str_replace('_', ' ', $setting->key)) }}
                                </label>
                                
                                @if($setting->type == 'textarea')
                                    <textarea name="{{ $setting->key }}" id="{{ $setting->key }}" rows="4"
                                        class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-[#0d3b36] focus:border-[#0d3b36]">{{ $setting->value }}</textarea>
                                @else
                                    <input type="{{ $setting->type }}" name="{{ $setting->key }}" id="{{ $setting->key }}" value="{{ $setting->value }}"
                                        class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-[#0d3b36] focus:border-[#0d3b36]">
                                @endif
                            </div>
                        @endforeach

                        <div class="flex items-center justify-end gap-4 mt-6">
                            <button type="submit" class="px-6 py-2.5 bg-[#0d3b36] text-white font-semibold rounded-lg hover:bg-opacity-90 transition-all">
                                Simpan Konfigurasi
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
