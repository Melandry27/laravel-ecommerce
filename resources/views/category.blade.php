@extends('layouts.app')

@section('title', $category->name)

@section('content')
    <h1>{{ $category->name }}</h1>
    <p>{{ $category->description }}</p>

    <div class="row">
        @foreach($category->products as $product)
            <div class="col-md-4 mb-4">
                <div class="card">
                    @if($product->images->first())
                        <img src="{{ $product->images->first()->url }}" class="card-img-top" alt="{{ $product->name }}">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">{{ Str::limit($product->description, 100) }}</p>
                        <p class="card-text"><strong>Prix : {{ $product->price }} €</strong></p>
                        <a href="{{ route('product.show', $product->id) }}" class="btn btn-primary">Voir le produit</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
