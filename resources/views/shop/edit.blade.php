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
        <input
            type="text"
            name="name"
            id="name"
            class="form-control"
            value="{{ old('name', $product->name) }}"
            required>
    </div>

   <div class="form-group">
       <label for="description">Description</label>
    <textarea
    name="description"
    id="description"
    class="form-control"
    rows="5"
    required="{{ old('description', $product->description) }}"></textarea>
   </div>

    <div class="form-group">
        <label for="price">Price</label>
    <input
    type="number"
    name="price"
    id="price"
    class="form-control"
    step="0.01"
    value="{{ old('price', $product->price) }}"
    required>
    </div>

    <div class="form-group">
        <label for="category_id">Category</label>
        <select name="category_id" id="category_id" class="form-control" required>
            @foreach($categories as $category)
                <option value="{{ $category->id }}"
            @endforeach
        </select>
    </div>




@endsection
