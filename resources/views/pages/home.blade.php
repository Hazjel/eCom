@extends('layouts.layouts')

@section('title')
    Home
@endsection

@section('content')
    <div style="background-image: url('https://cdn.mos.cms.futurecdn.net/AVEcca7TuDmt8wjaFZPkzj-650-80.jpg.webp');"
         class="bg-no-repeat bg-center bg-cover flex flex-col items-center justify-center h-screen">
        <h1 class="text-4xl font-bold text-gray-800">Welcome to eCommerce</h1>
        <p class="text-lg text-gray-600 mt-4">The best place to shop online</p>
    </div>

    <div class="container mx-auto pt-28" id="products">
        <h1 class="text-3xl font-bold text-center">Products</h1>

        <!-- Container with scrollable content -->
        <div class="overflowx-x-auto">
            <div class="flex gap-10 py-4">
                @foreach ($products as $product)
                    <div class="w-48 p-6 border border-gray-300 rounded-lg shadow-lg">
                        <img src="{{ $product->image }}" alt="{{ $product->name }}" class="w-full h-48 object-cover rounded-lg">
                        <div class="text-lg font-bold mb-2">{{ $product->name }}</div>
                        <div class="text-neutral-900 text-lg">Rp {{ number_format($product->price, 2, ',', '.') }}</div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="flex justify-center">
            <a href="{{ route('products') }}"
               class="px-4 py-2 border border-indigo-500 text-indigo-500 rounded-lg hover:bg-indigo-100">View all products</a>
        </div>
    </div>

    <div class="container mx-auto pt-28" id="category">
        <h1 class="text-3xl font-bold text-center">Category</h1>
    </div>
@endsection

