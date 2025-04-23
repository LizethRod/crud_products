@extends('layout.app')

@section('title', 'Mostrar Producto')

@section('content')
    <div class="container mt-3">
        <div class="d-flex justify-content-end mb-3">
            <a href="{{ route('products.index') }}" class="btn btn-secondary">Regresar</a>
        </div>
        <div class="card mb-3" style="max-width: 100%;">
            <div class="card-header">
                <h2>{{ $product->name }}</h2>
            </div>
            <div class="card-body">
                {{ $product->description }}
            </div>
            <div class="card-footer text-body-secondary">
                <h5>Precio: ${{ $product->price }}</h5>
            </div>
        </div>
    </div>
@endsection