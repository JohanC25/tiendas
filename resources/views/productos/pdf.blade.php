<!DOCTYPE html>
<html>
<head>
    <title>Lista de Ofertas</title>
    <style>
        body {
            text-align: center;
            font-family: Arial, sans-serif;
        }
        h1 {
            margin-bottom: 20px;
        }
        table {
            width: 80%;
            margin: 0 auto;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #000;
        }
        th, td {
            padding: 10px;
        }
    </style>
</head>
<body>
    <h1>Lista de Ofertas</h1>

    <table>
        <thead>
            <tr>
                <th>CVE Productos</th>
                <th>Marca</th>
                <th>Tipo</th>
                <th>Precio</th>
                <th>Cantidad</th>
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
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>