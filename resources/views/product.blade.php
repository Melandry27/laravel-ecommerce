@extends('layouts.app')

@section('title', $product->name)

@section('content')
    <div class="row">
        <div class="col-md-6">
            @if($product->images->first())
                <img src="{{ $product->images->first()->url }}" class="img-fluid" alt="{{ $product->name }}">
            @endif
        </div>
        <div class="col-md-6">
            <h1>{{ $product->name }}</h1>
            <p>{{ $product->description }}</p>
            <p><strong>Prix : {{ $product->price }} €</strong></p>
            <p>
                Catégories :
                @foreach($product->categories as $category)
                    <a href="{{ route('category.show', $category->id) }}" class="badge bg-secondary">{{ $category->name }}</a>
                @endforeach
            </p>
            <button class="btn btn-primary">Ajouter au panier</button>
        </div>
    </div>
@endsection
