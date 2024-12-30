@extends('layouts.app')

@section('Title', 'Edit $product->name')

@section('content')

    <div class="container">
        <h1>Edit Product</h1>
        @if ($errors->any())
            <ul>
                @foreach($errors->all as $error)
                    <li>{{ $error}}</li>
                @endforeach
            </ul>
    </div>
        @endif

    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')

    <div class="form-group">
        <label for="name">Product Name</label>
        <input type="text">
        <
    </div>


@endsection
