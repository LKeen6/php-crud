@extends('products.layout')

@section('content')

<div class="container mt-4">
  <div class="row justify-content-between align-items-center mb-4">
    <div class="col-md-6">
      <h2 class="text-primary">Laravel 8 CRUD Example</h2>
    </div>
    <div class="col-md-6 text-md-end">
      <a class="btn btn-success btn-lg" href="{{ route('products.create') }}">
        <i class="fas fa-plus"></i> Create New Product
      </a>
    </div>
  </div>

  @if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Success!</strong> {{ $message }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif

  <div class="table-responsive">
    <table class="table table-striped table-hover">
      <thead class="table-dark">
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Details</th>
          <th class="text-center" width="280px">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($products as $product)
          <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->details }}</td>
            <td class="text-center">
              <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                <a class="btn btn-info btn-sm" href="{{ route('products.show', $product->id) }}">
                  <i class="fas fa-eye"></i> Show
                </a>
                <a class="btn btn-primary btn-sm" href="{{ route('products.edit', $product->id) }}">
                  <i class="fas fa-edit"></i> Edit
                </a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm">
                  <i class="fas fa-trash"></i> Delete
                </button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>

  <!-- Pagination Links -->
  <div class="d-flex justify-content-center mt-4">
    {{ $products->links() }}
  </div>

</div>

@endsection
