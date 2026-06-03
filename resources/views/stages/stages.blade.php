@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="{{ route('trips.index') }}" class="btn btn-dark mb-3">Volver</a>
        <div class="row">
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Registrar nueva etapa</h5>
                        <small class="text-muted float-end">Formulario de etapa</small>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('stages.store', $trip_id) }}" method="post" class="formulario-validacion">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="name">Nombre</label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Nombre de la etapa">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="destination">Destino</label>
                                <div class="col-sm-10">
                                    <input type="text" name="destination" id="destination" class="form-control" placeholder="Destino de la etapa">
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
                                    <textarea name="description" id="description" class="form-control" placeholder="Breve descripción de la etapa"></textarea>
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

        <!-- Tabla de etapas con estilo de card y tabla responsive -->
        <div class="card mt-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="card-header">Lista de etapas</h5>
                <a href="{{ route('stages.pdf', $trip_id) }}" class="btn btn-primary btn-sm">
                    <i class="bx bx-file-pdf me-1"></i> Generar PDF de las etapas
                </a>
            </div>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Destino</th>
                            <th>Total</th>
                            <th>Fecha de Inicio</th>
                            <th>Fecha de Fin</th>
                            <th>Descripción</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($stages as $stage)
                            <tr>
                                <td>
                                    <i class="fas fa-route fa-lg text-info me-3"></i>
                                    <strong>{{ $stage->name }}</strong>
                                </td>
                                <td>{{ $stage->destination }}</td>
                                <td>${{ number_format($stage->total_stage, 2) }}</td>
                                <td>{{ $stage->start_date }}</td>
                                <td>{{ $stage->end_date }}</td>
                                <td>{{ $stage->description }}</td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{ route('stages.edit', $stage->id) }}">
                                                <i class="bx bx-edit-alt me-2"></i> Editar
                                            </a>
                                            <form action="{{ route('stages.destroy', [$stage->trip_id, $stage->id]) }}" method="post" style="display:inline;">
                                                @method('delete')
                                                @csrf
                                                <button type="submit" class="dropdown-item">
                                                    <i class="bx bx-trash me-2"></i> Eliminar
                                                </button>
                                            </form>
                                            <a class="dropdown-item" href="{{ route('stages.comments.index', $stage->id) }}">
                                                <i class="bx bx-comment me-2"></i> Ver Comentarios
                                            </a>
                                            <a class="dropdown-item" href="{{ route('activities.index', $stage->id) }}">
                                                <i class="bx bx-list-ul me-2"></i> Ver Actividades
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
                <h5 class="mb-3">Distribución de costos por etapa</h5>
                <div id="stagePieChart" style="width: 100%; height: 400px;"></div>
            </div>
        </div>
    </div>
    <script>
    const stageData = @json($stages->map(fn($s) => ['name' => $s->name, 'total' => (float) $s->total_stage]));
    </script>
    <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
    <script src="{{ asset('js/charts.js') }}"></script>
@endsection