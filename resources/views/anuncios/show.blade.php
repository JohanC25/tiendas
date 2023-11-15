@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles del Anuncio</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">M2: {{ $anuncio->m2 }}</h5>
            <p class="card-text">Piso: {{ $anuncio->piso }}</p>
            <p class="card-text">Número: {{ $anuncio->numero }}</p>
            <p class="card-text">Renta: {{ $anuncio->renta }}</p>
            <a href="{{ route('anuncios.index') }}" class="btn btn-primary">Regresar a la lista</a>
        </div>
    </div>
</div>
@endsection
