<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Etapas del Viaje - PDF</title>
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
        .trip-info {
            background-color: #e3f2fd;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
            border-left: 4px solid #7B44E7;
        }
        .trip-info h3 {
            margin-top: 0;
            color: #7B44E7;
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
        .stage-name {
            font-weight: bold;
            color: #7B44E7;
        }
        .cost-amount {
            font-weight: bold;
            color: #28a745;
        }
        .footer {
            margin-top: 30px;
            text-align: center;
            font-size: 12px;
            color: #6c757d;
        }
        .stage-order {
            background-color: #7B44E7;
            color: white;
            border-radius: 50%;
            width: 25px;
            height: 25px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Etapas del Viaje</h1>
        <p>Reporte generado el {{ now('America/Bogota')->format('d/m/Y H:i:s') }}</p>
    </div>

    @if(isset($trip))
        <div class="trip-info">
            <h3>Información del Viaje</h3>
            <p><strong>Nombre:</strong> {{ $trip->name }}</p>
            <p><strong>Presupuesto total del Viaje:</strong> ${{ number_format($trip->total, 2) }}</p>
        </div>
    @endif

 @if($stages->count() > 0)
        <div class="summary">
            <h3>Resumen de Etapas</h3>
            <p><strong>Total de etapas:</strong> {{ $stages->count() }}</p>
            
            <p><strong>Costo total de etapas:</strong> ${{ number_format($stages->sum('total_stage'), 2) }}</p>
            
            <p><strong>Promedio por etapa:</strong> ${{ number_format($stages->avg('total_stage'), 2) }}</p>
        </div>

        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Destino</th>
                    <th>Costo Total</th>
                    <th>Fecha Inicio</th>
                    <th>Fecha Fin</th>
                    <th>Descripción</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($stages as $stage)
                    <tr>
                        <td>{{ $stage->name }}</td>
                        <td>{{ $stage->destination ?? 'N/A' }}</td>
                        <td class="cost-amount">${{ number_format($stage->total_stage, 2) }}</td>
                        <td>{{ $stage->start_date ? date('d/m/Y', strtotime($stage->start_date)) : 'N/A' }}</td>
                        <td>{{ $stage->end_date ? date('d/m/Y', strtotime($stage->end_date)) : 'N/A' }}</td>
                        <td>{{ $stage->description ?? 'Sin descripción' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <div class="summary">
            <h3>No hay etapas registradas para este viaje.</h3>
        </div>
    @endif

    <div class="footer">
        <p>Este reporte fue generado automáticamente por el tripify.</p>
    </div>
    <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
</body>
</html>