@extends('layouts.app')

@section('Title', '$product->name')

@section('content')
    <div class="container">
        <div class="product-details">
            <h1>{{ $product->name }}</h1>
            <p class="description">{{ $product->description }}</p>
            <p class="price">Price: £{{number_format($product->price, 2 )}}</p>

            <a href="{{ route('shop.index') }}" class="btn">Back to Shop</a>
        </div>
    </div>
@endsection
