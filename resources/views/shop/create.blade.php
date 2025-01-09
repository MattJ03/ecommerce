@extends('layouts')

@section('Title', 'Create Product')

@section('content')

  <div class="container">
      <h1>Form to Create a product</h1>
       <!-- Check and show errors which may arrive -->
      @if($errors->any())
          <div class="alert alert-danger">
              @foreach($errors->all())
                  <ul>
                      <li>{{ $errors }}</li>
                  </ul>
              @endforeach
          </div>
      @endif

      <div class="form-group">
          <label for="name">Product Name</label>
          <input
          type="text"
          name="name"
          id="name"
          class="form-control"
          value="{{ old('name') }}"
          required>
      </div>

      <div class="form-group">
          <label for="description">Description</label>
          <textarea
          name="description"
          id="description"
          class="form-control"
          rows="5"
          required>{{ old('description') }}
          </textarea>
      </div>

      <div class="form-group">
          <label for="price">Price</label>
          <input
          type="number"
          name="price"
          id="name"
          step="0.01"
          value="{{ old('price') }}"
          required>
      </div>

      <div class="form-group">
          <label for="category_id">Category</label>
          <select name="category_id" id="category_id" class="form-control">
              <option value="">Category</option>
              @foreach($categories as $category)
                  <option value="{{ $category->id }}"

              @endforeach
          </select>
      </div>


      </div>

@endsection
