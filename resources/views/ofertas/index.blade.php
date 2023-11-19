@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Ofertas</h1>

    <!-- Formulario de Búsqueda -->
    <form action="{{ route('ofertas.index') }}" method="GET">
        <div class="form-group">
            <input type="text" name="search" class="form-control" placeholder="Buscar por Producto" value="{{ request('search') }}">
        </div>
        <button type="submit" class="btn btn-primary">Buscar</button>
        <a href="{{ route('ofertas.pdf', ['search' => request('search')]) }}" class="btn btn-success">Generar PDF</a>
        <a href="{{ route('home') }}" class="btn btn-primary">Regresar al Home</a>
    </form>

    <table class="table">
        <thead>
            <tr>
                <th>CVE Oferta</th>
                <th>Marca</th>
                <th>Descuento</th>
                <th>Producto</th>
                <th>Precio Original</th>
                <th colspan="2">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ofertas as $oferta)
            <tr>
                <td>{{ $oferta->cve_ofertas }}</td>
                <td>{{ $oferta->Marca }}</td>
                <td>{{ $oferta->Descuento }}</td>
                <td>{{ $oferta->Producto }}</td>
                <td>{{ $oferta->Precio_original }}</td>
                <td>
                    <a href="{{ route('ofertas.show', $oferta->cve_ofertas) }}" class="btn btn-info btn-sm">Detalles</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
