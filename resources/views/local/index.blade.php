@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Locales</h1>

    <!-- Formulario de Búsqueda -->
    <form action="{{ route('locales.index') }}" method="GET">
        <div class="form-group">
            <input type="text" name="search" class="form-control" placeholder="Buscar por Número" value="{{ request('search') }}">
        </div>
        <button type="submit" class="btn btn-primary">Buscar</button>
        <!-- Botón para abrir el popup -->
        <a href="javascript:void(0);" class="btn btn-primary" onclick="openPopup()">Mandar Solicitud</a>
        <a href="{{ route('home') }}" class="btn btn-primary">Regresar al Home</a>
    </form>

    <table class="table">
        <thead>
            <tr>
                <th>CVE Locales</th>
                <th>Número</th>
                <th>M3</th>
                <th>Piso</th>
                <th>Renta</th>
                <th colspan="2">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($locales as $local)
            <tr>
                <td>{{ $local->cve_locales }}</td>
                <td>{{ $local->numero }}</td>
                <td>{{ $local->m3 }}</td>
                <td>{{ $local->piso }}</td>
                <td>{{ $local->renta }}</td>
                <td>
                    <a href="{{ route('locales.show', $local->cve_locales) }}" class="btn btn-info btn-sm">Detalles</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Popup para enviar solicitud -->
<div id="solicitudPopup" style="display:none; position:fixed; left:50%; top:50%; transform:translate(-50%, -50%); background-color:white; padding:20px; border-radius:10px; box-shadow:0px 0px 10px gray; z-index:100;">
    <h3>Enviar Solicitud</h3>
    <form id="solicitudForm">
        <div class="form-group">
            <label for="correo">Correo Electrónico:</label>
            <input type="email" id="correo" name="correo" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="numeroLocal">Número de Local:</label>
            <select id="numeroLocal" name="numeroLocal" class="form-control" required>
                @foreach ($locales as $local)
                <option value="{{ $local->numero }}">{{ $local->numero }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
        <button type="button" class="btn btn-secondary" onclick="closePopup()">Cerrar</button>
    </form>
</div>

<script>
    function openPopup() {
        document.getElementById('solicitudPopup').style.display = 'block';
    }

    function closePopup() {
        document.getElementById('solicitudPopup').style.display = 'none';
    }
</script>
@endsection
