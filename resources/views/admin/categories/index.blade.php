<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold">Categories</h2>
    </x-slot>

    <div class="p-6">
        @foreach ($categories as $category)
            <div>
                <a href="{{ route('categories.show', $category) }}" class="text-blue-600 underline">
                    <strong>{{ $category->name }}</strong>
                </a>
                @if ($category->children->count())
                    <ul class="ml-4 list-disc">
                        @foreach ($category->children as $child)
                            <li>
                                <a href="{{ route('categories.show', $child) }}" class="text-blue-500">
                                    {{ $child->name }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </div>
        @endforeach
    </div>
</x-app-layout>
