@extends('layout.app')

@section('title', 'Actualizar Producto')

@section('content')
    <div class="container mt-3">
        <div class="card border-secondary" style="max-width: 100%;">
            <div class="card-header">
                <h5>Editar producto</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('products.update', $product->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <b> ID: {{ $product->id }}</b>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <div class="form-group">
                                <label for="name">Nombre</label>
                                <input type="text" class="form-control" id="name" autocomplete="off" name="name" value="{{ $product->name }}">
                              </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="price">Precio</label>
                                <input type="text" class="form-control" id="price" autocomplete="off" name="price" value="{{ $product->price }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="description">Descripción</label>
                                <textarea class="form-control" id="description" name="description">
                                {{ $product->description }}
                                </textarea>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-warning mt-3">Actualizar producto</button>
                    <a href="{{ route('products.index') }}" class="btn btn-secondary mt-3">Regresar</a>
                </form>
            </div>
    
        </div>
    </div>
    
@endsection