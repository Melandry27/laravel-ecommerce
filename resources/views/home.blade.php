@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
    <h1>Bienvenue sur notre E-commerce</h1>
    <div class="row">
        @foreach($categories as $category)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $category->name }}</h5>
                        <p class="card-text">{{ $category->description }}</p>
                        <a href="{{ route('category.show', $category->id) }}" class="btn btn-primary">Voir les produits</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
