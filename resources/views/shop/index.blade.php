@extends('layouts.app')


@section('title', 'Shop')

@section('content')

    <h1>Welcome to the Shop</h1>
    <div class="products-container">
        @if($products->isEmpty())
            <p>No Products Currently available</p>
        @else
            @foreach($products as $product)
                <h2>{{ $product->name }}</h2>
                <p1>{{ $product->description }}</p1>
                <p2>Price: $ {{$product->price}}</p2>
                <a href="{{ route('products.show', $product->id) }}" class="btn-show">Show</a>
            @endforeach


        @endif

    </div>

@endsection
