@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="header">
            <h2>Todas las Ofertas</h2>
        </div>
        <div class="content">
            {{-- Aquí irá el contenido dinámico, como una lista de ofertas --}}
        </div>
        <div class="footer">
            <button class="button">Buscar</button>
            <button class="button" onclick="window.history.back();">Regresar</button>
        </div>
    </div>
    
@endsection
