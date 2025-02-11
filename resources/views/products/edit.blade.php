@extends('products.layout')

@section('content')

<div class="container mt-4">
  <div class="row justify-content-between align-items-center mb-4">
    <div class="col-md-6">
      <h2 class="text-primary">Edit Product</h2>
    </div>
    <div class="col-md-6 text-md-end">
      <a class="btn btn-secondary btn-lg" href="{{ route('products.index') }}">
        <i class="fas fa-arrow-left"></i> Back to Products
      </a>
    </div>
  </div>

  <!-- Display Validation Errors -->
  @if ($errors->any())
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Whoops!</strong> There were some problems with your input.
      <ul class="mb-0">
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif

  <!-- Edit Product Form -->
  <div class="card shadow-lg p-4">
    <div class="card-body">
      <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
          <label for="name" class="form-label"><strong>Product Name:</strong></label>
          <input type="text" name="name" value="{{ $product->name }}" class="form-control form-control-lg" placeholder="Enter product name">
        </div>

        <div class="mb-3">
          <label for="details" class="form-label"><strong>Product Details:</strong></label>
          <textarea class="form-control form-control-lg" name="details" rows="4" placeholder="Enter product details">{{ $product->details }}</textarea>
        </div>

        <div class="text-center mt-4">
          <button type="submit" class="btn btn-success btn-lg">
            <i class="fas fa-save"></i> Update Product
          </button>
        </div>

      </form>
    </div>
  </div>
</div>

@endsection
