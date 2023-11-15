@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles del Local</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">M2: {{ $local->m2 }}</h5>
            <p class="card-text">Piso: {{ $local->piso }}</p>
            <p class="card-text">Número: {{ $local->numero }}</p>
            <p class="card-text">Renta: {{ $local->renta }}</p>
            <a href="{{ route('locales.index') }}" class="btn btn-primary">Regresar a la lista</a>
        </div>
    </div>
</div>
@endsection
