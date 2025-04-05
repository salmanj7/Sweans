<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold">{{ $category->name }}</h2>
    </x-slot>

    <div class="p-6">
        @if ($category->children->count())
            <h3 class="font-bold mb-2">Subcategories</h3>
            <ul class="list-disc ml-4">
                @foreach ($category->children as $child)
                    <li>
                        <a href="{{ route('categories.show', $child) }}" class="text-blue-500">
                            {{ $child->name }}
                        </a>
                    </li>
                @endforeach
            </ul>
        @elseif ($category->products->count())
            <h3 class="font-bold mb-2">Products</h3>
            <ul class="list-disc ml-4">
                @foreach ($category->products as $product)
                    <li>
                        <strong>{{ $product->name }}</strong> - ${{ number_format($product->price, 2) }}<br>
                        <small>{{ $product->description }}</small>
                    </li>
                @endforeach
            </ul>
        @else
            <p>No products or subcategories found in this category.</p>
        @endif
    </div>
</x-app-layout>
