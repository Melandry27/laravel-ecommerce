@extends('layouts.app')

@section('title', $category->name)

@section('content')
    <x-breadcrumb :items="$breadcrumbItems" />

    <h1>{{ $category->name }}</h1>
    <p>{{ $category->description }}</p>

    <div class="row">
        @foreach($category->products as $_product)
            <div class="col-md-4 mb-4">
                <div class="card">
                    @if($_product->images->first())
                        <img src="{{ $_product->images->first()->url }}" class="card-img-top" alt="{{ $_product->name }}">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $_product->name }}</h5>
                        <p class="card-text">{{ Str::limit($_product->description, 100) }}</p>
                        <p class="card-text"><strong>Prix : {{ $_product->price }} €</strong></p>
                        <a href="{{ route('product.show', $_product->slug) }}" class="btn btn-primary">Voir le produit</a>
                        @if($products->categories->isNotEmpty())
                            <p class="mt-3">Catégories :
                                @foreach($product->categories as $category)
                                    <a href="{{ route('category.show', $category->slug) }}" class="badge bg-secondary">{{ $category->name }}</a>
                                @endforeach
                            </p>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
