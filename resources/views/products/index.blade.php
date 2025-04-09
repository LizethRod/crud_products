@extends('layout.app')

@section('content')
    <div class="container mt-5">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show mt-2 mb-2" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <h1>Lista de productos</h1>
        <div class="d-flex justify-content-end mb-3">
            <a href="{{ route('products.create') }}" class="btn btn-primary">Agregar nuevo producto</a>
        </div>
        
        @empty($products)
            <h6>
                No hay productos disponibles
            </h6>
        @endempty
        @if(count($products) > 0) 
            <table class="table table-striped mt-3">
                <thead>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Descripción</th>
                    <th>Acciones</th>
                </thead>
                <tbody>
                    @foreach ($products as $p)
                        <tr>
                            <td>{{ $p->id }}</td>
                            <td>{{ $p->name }}</td>
                            <td>${{ $p->price }}</td>
                            <td>{{ $p->description }}</td>
                            <td class="text-center">
                                <a href="/products/{{ $p->id }}" class="btn btn-info">Mostrar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection