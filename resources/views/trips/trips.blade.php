@extends('layouts.app')

@section('content')
    <div class="container">
        <!-- Formulario para crear un viaje -->
        <div class="row">
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Registrar nuevo viaje</h5>
                        <small class="text-muted float-end">Formulario de viaje</small>
                    </div>
                    <div class="card-body">  
                        <form action="{{ route('trips.store') }}" method="post" class="formulario-validacion">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="name">Nombre</label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Nombre del viaje" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="start_date">Fecha de inicio</label>
                                <div class="col-sm-10">
                                    <input type="date" name="start_date" id="start_date" class="form-control" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="end_date">Fecha de fin</label>
                                <div class="col-sm-10">
                                    <input type="date" name="end_date" id="end_date" class="form-control" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="description">Descripción</label>
                                <div class="col-sm-10">
                                    <textarea name="description" id="description" class="form-control" placeholder="Breve descripción del viaje"></textarea>
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

        <!-- Tabla de viajes con estilo de card y tabla responsive -->
        <div class="card mt-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Lista de viajes</h5>
                <div class="d-flex gap-2">
                    <a href="{{ route('trips.pdf') }}" class="btn btn-primary btn-sm">
                        <i class="bx bx-file-pdf me-1"></i> Generar PDF de todos mis viajes
                    </a>
                </div>
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
                        @foreach ($trips as $trip)
                            @php
                                // Verificar si el usuario actual es organizador de este viaje
                                $esOrganizador = $trip->planners()->where('user_id', auth()->id())->where('rol', 'organizador')->exists();
                            @endphp
                            <tr>
                                <td>
                                    <i class="fab fa-globe-americas fa-lg text-primary me-3"></i>
                                    <strong>{{ $trip->name }}</strong>
                                </td>
                                <td>${{ number_format($trip->total, 2) }}</td>
                                <td>{{ $trip->start_date }}</td>
                                <td>{{ $trip->end_date }}</td>
                                <td>{{ $trip->description }}</td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            @if($esOrganizador)
                                                <!-- ✅ Solo organizadores pueden editar -->
                                                <a class="dropdown-item" href="{{ route('trips.edit', $trip->id) }}">
                                                    <i class="bx bx-edit-alt me-2"></i> Editar
                                                </a>
                                                <!-- ✅ Solo organizadores pueden eliminar -->
                                                <form action="{{ route('trips.destroy', $trip->id) }}" method="post" style="display:inline;">
                                                    @method('delete')
                                                    @csrf
                                                    <button type="submit" class="dropdown-item">
                                                        <i class="bx bx-trash me-2"></i> Eliminar
                                                    </button>
                                                </form>
                                                <!-- ✅ NUEVO: Solo organizadores pueden gestionar planificadores -->
                                                <a class="dropdown-item" href="{{ route('planners.index', $trip->id) }}">
                                                    <i class="bx bx-group me-2"></i> Gestionar Usuarios
                                                </a>
                                            @endif
                                            
                                            <!-- ✅ Todos los planners pueden ver comentarios y etapas -->
                                            <a class="dropdown-item" href="{{ route('trips.comments.index', $trip->id) }}">
                                                <i class="bx bx-comment me-2"></i> Ver Comentarios
                                            </a>
                                            <a class="dropdown-item" href="{{ route('stages.index', $trip->id) }}">
                                                <i class="bx bx-list-ul me-2"></i> Ver Etapas
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
                <h5 class="mb-3">Distribución de costos por viaje</h5>
                <div id="tripPieChart" style="width: 100%; height: 400px;"></div>
            </div>
        </div>
    </div>
    <script>
        const tripsData = @json($trips->map(fn($trip) => ['name' => $trip->name, 'total' => $trip->total]));
    </script>
    <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
    <script src="{{ asset('js/charts.js') }}"></script>

@endsection