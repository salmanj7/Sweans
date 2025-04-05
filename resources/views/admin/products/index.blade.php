<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Products') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach ($products as $product)
                    <div class="bg-white dark:bg-gray-800 rounded-xl shadow p-4 flex flex-col items-center text-center">
                    <img src="{{ $product->image }}"
                        onerror="this.onerror=null;this.src='https://via.placeholder.com/150';"
                        alt="{{ $product->name }}"
                        class="w-40 h-40 object-cover rounded-md mb-3">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100">{{ $product->name }}</h3>
                        <p class="text-sm text-gray-600 dark:text-gray-400 mt-1 mb-2">{{ Str::limit($product->description, 50) }}</p>
                        <span class="text-blue-600 dark:text-blue-400 font-bold text-md">${{ number_format($product->price, 2) }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
