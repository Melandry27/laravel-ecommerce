@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
    <x-breadcrumb :items="[ ['name' => 'Accueil', 'url' => route('home')] ]" />
    <h1>Bienvenue sur notre E-commerce</h1>
    <div class="row">
        @foreach($five_random_products as $product)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ asset($product->image->url) }}" class="card-img-top" alt="{{ $product->name }}">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">{{ $product->description }}</p>
                        <a href="{{ route('product.show', $product->slug) }}" class="btn btn-primary">Voir les produits</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
