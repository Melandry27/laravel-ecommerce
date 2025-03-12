@extends('layouts.app')

@section('title', $product->name)

@section('content')
    <x-breadcrumb :items="$breadcrumbItems" />
    <div class="row">
        <div class="col-md-6">
            @if($product->image->url)
            <img src="{{ $product->image->url }}" class="img-fluid" alt="{{ $product->name }}" style="width: 500px; height: 500px;">
            @endif
        </div>
        <div class="col-md-6">
            <h1>{{ $product->name }}</h1>
            <p>{{ $product->description }}</p>
            <p><strong>Prix : {{ $product->price }} €</strong></p>
            <p>
                Catégories :
                @foreach($product->categories as $category)
                    <a href="{{ route('category.show', $category->slug) }}" class="badge bg-secondary">{{ $category->name }}</a>
                @endforeach
            </p>
            <button class="btn btn-primary">Ajouter au panier</button>
        </div>
    </div>
@endsection
