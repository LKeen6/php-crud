@extends('products.layout')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-between align-items-center mb-4">
        <div class="col-md-6">
            <h2 class="text-primary fw-bold">Add New Product</h2>
        </div>
        <div class="col-md-6 text-end">
            <a href="{{ route('products.index') }}" class="btn btn-outline-secondary">Back</a>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Whoops!</strong> There were some problems with your input.
            <ul class="mt-2 mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card shadow-lg border-0 rounded-4">
        <div class="card-body p-4">
            <form action="{{ route('products.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label fw-bold">Product Name</label>
                    <input id="name" type="text" name="name" class="form-control form-control-lg" placeholder="Enter product name" required>
                </div>

                <div class="mb-3">
                    <label for="details" class="form-label fw-bold">Detail</label>
                    <textarea id="details" class="form-control form-control-lg" name="details" rows="4" placeholder="Enter product details" required></textarea>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-lg px-4">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
