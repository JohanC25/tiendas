@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Anuncios</h1>

    <!-- Formulario de Búsqueda -->
    <form action="{{ route('anuncios.index') }}" method="GET">
        <div class="form-group">
            <input type="text" name="search" class="form-control" placeholder="Buscar por Número" value="{{ request('search') }}">
        </div>
        <button type="submit" class="btn btn-primary">Buscar</button>
        <a href="{{ route('locales.index') }}" class="btn btn-primary">Ir a Locales</a>
        <a href="{{ route('home') }}" class="btn btn-primary">Regresar al Home</a>
    </form>

    <table class="table">
        <thead>
            <tr>
                <th>CVE Anuncio</th>
                <th>M2</th>
                <th>Piso</th>
                <th>Número</th>
                <th>Renta</th>
                <th colspan="2">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($anuncios as $anuncio)
            <tr>
                <td>{{ $anuncio->cve_anuncios }}</td>
                <td>{{ $anuncio->m2 }}</td>
                <td>{{ $anuncio->piso }}</td>
                <td>{{ $anuncio->numero }}</td>
                <td>{{ $anuncio->renta }}</td>
                <td>
                    <a href="{{ route('anuncios.show', $anuncio->cve_anuncios) }}" class="btn btn-info btn-sm">Detalles</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
