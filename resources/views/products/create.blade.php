@extends('layout.app')
@section('content')
    <div class="container mt-3">
        <div class="card border-secondary" style="max-width: 100%;">
            <div class="card-header">
                <h5>Nuevo Producto</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('products.store') }}" method="post">
                    @csrf
                    <div class="row mb-3">
                        <div class="col">
                            <div class="form-group">
                                <label for="name">Nombre</label>
                                <input type="text" class="form-control" id="name" autocomplete="off" name="name" required>
                              </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="price">Precio</label>
                                <input type="text" class="form-control" id="price" autocomplete="off" name="price" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="description">Descripción</label>
                                <textarea class="form-control" id="description" name="description" required></textarea>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success mt-3">Guardar producto</button>
                    <a href="{{ route('products.index') }}" class="btn btn-secondary mt-3">Regresar</a>
                </form>
            </div>
    
        </div>
    </div>
    
@endsection