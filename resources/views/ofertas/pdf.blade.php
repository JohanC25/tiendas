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
                <th>CVE Oferta</th>
                <th>Marca</th>
                <th>Descuento</th>
                <th>Producto</th>
                <th>Precio Original</th>
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
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>