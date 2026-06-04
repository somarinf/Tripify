<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividades de la Etapa - PDF</title>
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
        .stage-info {
            background-color: #e8f5e8;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
            border-left: 4px solid #7B44E7;
        }
        .stage-info h3 {
            margin-top: 0;
            color: #7B44E7;
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
        .activity-name {
            font-weight: bold;
            color: #7B44E7;
        }
        .cost-amount {
            font-weight: bold;
            color: #dc3545;
        }
        .footer {
            margin-top: 30px;
            text-align: center;
            font-size: 12px;
            color: #6c757d;
        }
        .activity-order {
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
        .duration-badge {
            background-color: #17a2b8;
            color: white;
            padding: 2px 8px;
            border-radius: 12px;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Actividades de la Etapa</h1>
        <p>Reporte generado el {{ now('America/Bogota')->format('d/m/Y H:i:s') }}</p>
    </div>

    @if(isset($trip))
        <div class="trip-info">
            <h3>Información del Viaje</h3>
            <p><strong>Nombre:</strong> {{ $trip->name }}</p>
            <p><strong>Fecha de inicio:</strong> {{ date('d/m/Y', strtotime($trip->start_date)) }}</p>
            <p><strong>Fecha de fin:</strong> {{ date('d/m/Y', strtotime($trip->end_date)) }}</p>
            <p><strong>Presupuesto total:</strong> ${{ number_format($trip->total, 2) }}</p>
        </div>
    @endif

    @if(isset($stage))
        <div class="stage-info">
            <h3>📍 Información de la Etapa</h3>
            <p><strong>Nombre:</strong> {{ $stage->name }}</p>
            <p><strong>Ubicación:</strong> {{ $stage->location ?? 'No especificada' }}</p>
            <p><strong>Presupuesto:</strong> ${{ number_format($stage->total_stage, 2) }}</p>
            <p><strong>Fecha de inicio:</strong> {{ $stage->start_date ? date('d/m/Y', strtotime($stage->start_date)) : 'N/A' }}</p>
            <p><strong>Fecha de fin:</strong> {{ $stage->end_date ? date('d/m/Y', strtotime($stage->end_date)) : 'N/A' }}</p>
            @if($stage->description)
                <p><strong>Descripción:</strong> {{ $stage->description }}</p>
            @endif
        </div>
    @endif

    @if($activities->count() > 0)
        <div class="summary">
            <h3>Resumen de Actividades</h3>
            <p><strong>Total de actividades:</strong> {{ $activities->count() }}</p>
            <p><strong>Costo total de actividades:</strong> ${{ number_format($activities->sum('total_activity'), 2) }}</p>
            <p><strong>Promedio por actividad:</strong> ${{ number_format($activities->avg('total_activity'), 2) }}</p>
            @php
                $totalDays = $activities->sum(function($activity) {
                    return \Carbon\Carbon::parse($activity->start_date)->diffInDays(\Carbon\Carbon::parse($activity->end_date)) + 1;
                });
            @endphp
            <p><strong>Duración total:</strong> {{ $totalDays }} días</p>
        </div>

        <table>
            <thead>
                <tr>
                    <th>Nombre de la Actividad</th>
                    <th>Costo</th>
                    <th>Fecha de Inicio</th>
                    <th>Fecha de Fin</th>
                    <th>Duración</th>
                    <th>Descripción</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($activities as $index => $activity)
                    @php
                        $duration = \Carbon\Carbon::parse($activity->start_date)->diffInDays(\Carbon\Carbon::parse($activity->end_date)) + 1;
                    @endphp
                    <tr>
                        <td class="activity-name">{{ $activity->name }}</td>
                        <td class="cost-amount">${{ number_format($activity->total_activity, 2) }}</td>
                        <td>{{ date('d/m/Y', strtotime($activity->start_date)) }}</td>
                        <td>{{ date('d/m/Y', strtotime($activity->end_date)) }}</td>
                        <td style="text-align: center;">
                            <span class="duration-badge">{{ $duration }} día{{ $duration > 1 ? 's' : '' }}</span>
                        </td>
                        <td>{{ $activity->description ?? 'Sin descripción' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <div class="summary">
            <h3>No hay actividades registradas...</h3>
            <p>Esta etapa aún no tiene actividades planificadas. ¡Comienza a agregar las actividades que realizarás!</p>
        </div>
    @endif

    <div class="footer">
        <p>Este reporte fue generado automáticamente por el sistema tripify.</p>
    </div>
    <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>

</body>
</html>