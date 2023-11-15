@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Oferta</h1>
    <form action="{{ route('ofertas.update', $oferta->cve_ofertas) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="marca">Marca</label>
            <input type="text" class="form-control" id="Marca" name="Marca" value="{{ $oferta->Marca }}" required>
        </div>
        <div class="form-group">
            <label for="tipo">Descuento</label>
            <input type="text" class="form-control" id="Descuento" name="Descuento" value="{{ $oferta->Descuento }}" required>
        </div>
        <div class="form-group">
            <label for="precio">Producto</label>
            <input type="number" class="form-control" id="Producto" name="Producto" value="{{ $oferta->Producto }}" required>
        </div>
        <div class="form-group">
            <label for="cantidad">Precio Original</label>
            <input type="number" class="form-control" id="Precio_original" name="Precio_original" value="{{ $oferta->Precio_original }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
@endsection
