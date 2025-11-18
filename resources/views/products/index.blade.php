@extends('layouts.app')

@section('title', 'Products - Laravel E-Commerce')

@section('content')
<div class="row">
    <div class="col-12">
        <h1>Our Products</h1>
        
        @if(isset($category))
            <div class="alert alert-info">
                Showing products in category: <strong>{{ $category->name }}</strong>
            </div>
        @endif
    </div>
</div>

<div class="row">
    @forelse($products as $product)
        <div class="col-md-4 mb-4">
            <div class="card product-card h-100">
                <img src="{{ $product->image ?? 'https://via.placeholder.com/300x200?text=No+Image' }}" 
                     class="card-img-top" alt="{{ $product->name }}" style="height: 200px; object-fit: cover;">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text flex-grow-1">{{ Str::limit($product->description, 100) }}</p>
                    <div class="mt-auto">
                        <p class="h5 text-primary">{{ $product->formatted_price }}</p>
                        <span class="badge {{ $product->isInStock() ? 'bg-success' : 'bg-danger' }}">
                            {{ $product->isInStock() ? 'In Stock' : 'Out of Stock' }}
                        </span>
                        @if($product->category)
                            <span class="badge bg-secondary">{{ $product->category->name }}</span>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    @empty
        <div class="col-12">
            <div class="alert alert-warning">
                No products found.
            </div>
        </div>
    @endforelse
</div>

@if($products->hasPages())
    <div class="row">
        <div class="col-12">
            {{ $products->links() }}
        </div>
    </div>
@endif
@endsection
