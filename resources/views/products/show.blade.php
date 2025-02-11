@extends('products.layout')

@section('content')

<div class="container mt-4">
  <div class="row justify-content-between align-items-center mb-4">
    <div class="col-md-6">
      <h2 class="text-primary">Product Details</h2>
    </div>
    <div class="col-md-6 text-md-end">
      <a class="btn btn-secondary btn-lg" href="{{ route('products.index') }}">
        <i class="fas fa-arrow-left"></i> Back to Products
      </a>
    </div>
  </div>

  <div class="card shadow-lg p-4">
    <div class="card-body">
      <h4 class="card-title text-dark"><strong>Name:</strong></h4>
      <p class="card-text text-muted fs-5">{{ $product->name }}</p>

      <h4 class="card-title text-dark mt-3"><strong>Details:</strong></h4>
      <p class="card-text text-muted fs-5">{{ $product->details }}</p>
    </div>
  </div>
</div>

@endsection
