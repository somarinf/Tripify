<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis Viajes - PDF</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            font-size: 14px;
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
            border-bottom: 2px solid #7B44E7;
            padding-bottom: 10px;
        }
        .header h1 {
            color: #7B44E7;
            margin: 0;
        }
        .summary {
            background-color: #f8f9fa;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .summary h3 {
            margin-top: 0;
            color: #495057;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #dee2e6;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #7B44E7;
            color: white;
            font-weight: bold;
        }
        tr:nth-child(even) {
            background-color: #f8f9fa;
        }
        .trip-name {
            font-weight: bold;
            color: #7B44E7;
        }
        .total-amount {
            font-weight: bold;
            color: #28a745;
        }
        .footer {
            margin-top: 30px;
            text-align: center;
            font-size: 12px;
            color: #6c757d;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Mis Viajes</h1>
        <p>Reporte generado el {{ now('America/Bogota')->format('d/m/Y H:i:s') }}</p>
    </div>

    @if($trips->count() > 0)
        <div class="summary">
            <h3>Resumen</h3>
            <p><strong>Total de viajes:</strong> {{ $trips->count() }}</p>
            <p><strong>Costo total:</strong> ${{ number_format($trips->sum('total'), 2) }}</p>
            <p><strong>Promedio por viaje:</strong> ${{ number_format($trips->avg('total'), 2) }}</p>
        </div>

        <table>
            <thead>
                <tr>
                    <th>Nombre del Viaje</th>
                    <th>Total</th>
                    <th>Fecha de Inicio</th>
                    <th>Fecha de Fin</th>
                    <th>Descripción</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($trips as $trip)
                    <tr>
                        <td class="trip-name">{{ $trip->name }}</td>
                        <td class="total-amount">${{ number_format($trip->total, 2) }}</td>
                        <td>{{ date('d/m/Y', strtotime($trip->start_date)) }}</td>
                        <td>{{ date('d/m/Y', strtotime($trip->end_date)) }}</td>
                        <td>{{ $trip->description ?? 'Sin descripción' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <div class="summary">
            <h3>No hay viajes registrados...</h3>
            <p>Aún no tienes viajes en tu lista. ¡Comienza a planificar tu próxima aventura!</p>
        </div>
    @endif

    <div class="footer">
        <p>Este reporte fue generado automáticamente por tripify.</p>
    </div>
</body>
</html>