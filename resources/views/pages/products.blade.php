@extends('layouts.layouts')

@section('title')
    Products
@endsection

@section('content')
    <div class="container mx-auto">
        <h1 class="text-2x1 font-bold mb-6">Products</h1>

        <!-- Container with scrollable content -->
        <div class="overflowx-x-auto">
            <div class="flex gap-6 py-4">
                @foreach ($products as $product)
                    <div class="w-48 p-6 border border-gray-300 rounded-lg shadow-lg">
                        <div class="text-lg font-bold mb-2">{{ $products->name}}</div>
                        <div class="text-green-600 text-lg">{{ number_format($product->price, 2, ',', '.') }}</div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
