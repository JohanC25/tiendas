@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles del Producto</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Marca: {{ $producto->Marca }}</h5>
            <p class="card-text">Tipo: {{ $producto->tipo }}</p>
            <p class="card-text">Precio: {{ $producto->Precio }}</p>
            <p class="card-text">Cantidad: {{ $producto->Cantidad }}</p>
            <a href="{{ route('productos.index') }}" class="btn btn-primary">Regresar a la lista</a>
        </div>
    </div>
</div>
@endsection
