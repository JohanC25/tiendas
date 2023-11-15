@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Productos</h1>

    <!-- Formulario de Búsqueda -->
    <form action="{{ route('productos.index') }}" method="GET">
        <div class="form-group">
            <input type="text" name="search" class="form-control" placeholder="Buscar por Marca" value="{{ request('search') }}">
        </div>
        <button type="submit" class="btn btn-primary">Buscar</button>
        <a href="{{ route('home') }}" class="btn btn-primary">Regresar al Home</a>
    </form>

    <table class="table">
        <thead>
            <tr>
                <th>CVE Producto</th>
                <th>Marca</th>
                <th>Tipo</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th colspan="2">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productos as $producto)
            <tr>
                <td>{{ $producto->cve_productos }}</td>
                <td>{{ $producto->Marca }}</td>
                <td>{{ $producto->tipo }}</td>
                <td>{{ $producto->Precio }}</td>
                <td>{{ $producto->Cantidad }}</td>
                <td>
                    <a href="{{ route('productos.show', $producto->cve_productos) }}" class="btn btn-info btn-sm">Detalles</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
