<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                    @auth
                        @if(auth()->user()->hasRole('admin'))
                            <p>Logged in as <strong>Admin</strong></p>
                        @elseif(auth()->user()->hasRole('customer'))
                            <p>Welcome, <strong>Customer</strong>!</p>
                        @endif
                    @endauth
                </div>

                {{-- Tabs --}}
                <div class="px-6 pb-6">
                    <div class="flex space-x-4 mt-4">
                        <a href="{{ route('products.index') }}"
                           class="px-4 py-2 bg-blue-500 text-black rounded hover:bg-blue-600">
                            Products
                        </a>

                        <a href="{{ route('categories.index') }}"
                           class="px-4 py-2 bg-green-500 text-black rounded hover:bg-green-600">
                            Categories
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
