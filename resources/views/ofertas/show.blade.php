@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles de la Oferta</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Marca: {{ $oferta->Marca }}</h5>
            <p class="card-text">Tipo: {{ $oferta->Descuento }}</p>
            <p class="card-text">Precio: {{ $oferta->Producto }}</p>
            <p class="card-text">Cantidad: {{ $oferta->Precio_original }}</p>
            <a href="{{ route('ofertas.index') }}" class="btn btn-primary">Regresar a la lista</a>
        </div>
    </div>
</div>
@endsection
