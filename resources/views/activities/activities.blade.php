@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="{{ route('stages.index', $trip_id) }}" class="btn btn-dark mb-3">Volver</a>
        <div class="row">
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Registrar nueva actividad</h5>
                        <small class="text-muted float-end">Formulario de actividad</small>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('activities.store', $stage_id) }}" method="post" class="formulario-validacion">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="name">Nombre</label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" id="name" class="form-control"
                                        placeholder="Nombre de la actividad">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="start_date">Fecha de inicio</label>
                                <div class="col-sm-10">
                                    <input type="date" name="start_date" id="start_date" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="end_date">Fecha de fin</label>
                                <div class="col-sm-10">
                                    <input type="date" name="end_date" id="end_date" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="description">Descripción</label>
                                <div class="col-sm-10">
                                    <textarea name="description" id="description" class="form-control"
                                        placeholder="Breve descripción de la actividad"></textarea>
                                </div>
                            </div>
                            <div class="row justify-content-end">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-success">Guardar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tabla de actividades con estilo de card y tabla responsive -->
        <div class="card mt-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="card-header">Lista de Actividades</h5>
                <a href="{{ route('activities.pdf', $stage_id) }}" class="btn btn-primary btn-sm">
                    <i class="bx bx-file-pdf me-1"></i> Generar PDF de las actividades
                </a>
            </div>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Total</th>
                            <th>Fecha de Inicio</th>
                            <th>Fecha de Fin</th>
                            <th>Descripción</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($activities as $activity)
                            <tr>
                                <td>
                                    <i class="fas fa-running fa-lg text-primary me-3"></i>
                                    <strong>{{ $activity->name }}</strong>
                                </td>
                                <td>${{ number_format($activity->total_activity, 2) }}</td>
                                <td>{{ $activity->start_date }}</td>
                                <td>{{ $activity->end_date }}</td>
                                <td>{{ $activity->description }}</td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{ route('activities.edit', $activity->id) }}">
                                                <i class="bx bx-edit-alt me-2"></i> Editar
                                            </a>
                                            <form action="{{ route('activities.destroy', [$activity->stage_id, $activity->id]) }}"
                                                method="post" style="display:inline;">
                                                @method('delete')
                                                @csrf
                                                <button type="submit" class="dropdown-item">
                                                    <i class="bx bx-trash me-2"></i> Eliminar
                                                </button>
                                            </form>
                                            <a class="dropdown-item" href="{{ route('activities.comments.index', $activity->id) }}">
                                                <i class="bx bx-comment me-2"></i> Ver Comentarios
                                            </a>
                                            <a class="dropdown-item" href="{{ route('activitytypes.index', $activity->id) }}">
                                                <i class="bx bx-list-ul me-2"></i> Ver Tipo de Actividad
                                            </a>
                                            <a class="dropdown-item" href="{{ route('costinfos.index', $activity->id) }}">
                                                <i class="bx bx-dollar me-2"></i> Ver Información de Costos
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-body">
                <h5 class="mb-3">Distribución de costos por actividad</h5>
                <div id="activityPieChart" style="width: 100%; height: 400px;"></div>
            </div>
        </div>
    </div>
    <script>
        const activityData = @json($activities->map(fn($a) => ['name' => $a->name, 'total' => (float) $a->total_activity]));
    </script>
    <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
    <script src="{{ asset('js/charts.js') }}"></script>
@endsection