@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="{{ route('activities.index', $stage_id) }}" class="btn btn-dark mb-3">Volver</a>
        <div class="row">
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Registrar tipo de actividad</h5>
                        <small class="text-muted float-end">Formulario de tipo de actividad</small>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('activitytypes.store', $activity_id) }}" method="post">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="type">Tipo de actividad</label>
                                <div class="col-sm-10">
                                    <input type="text" name="type" id="type" class="form-control" placeholder="Nombre del tipo de actividad" />
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

        <!-- Tabla de tipos de actividad con estilo de card y tabla responsive -->
        <div class="card mt-4">
            <h5 class="card-header">Lista de tipos de actividad</h5>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Tipo de actividad</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($activitytypes as $activitytype)
                            <tr>
                                <td>
                                    <i class="fas fa-tags fa-lg text-warning me-3"></i>
                                    <strong>{{ $activitytype->type }}</strong>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{ route('activitytypes.edit', [$activitytype->activity_id, $activitytype->type]) }}">
                                                <i class="bx bx-edit-alt me-2"></i> Editar
                                            </a>
                                            <form action="{{ route('activitytypes.destroy', [$activitytype->activity_id, $activitytype->type]) }}" method="post" style="display:inline;">
                                                @method('delete')
                                                @csrf
                                                <button type="submit" class="dropdown-item">
                                                    <i class="bx bx-trash me-2"></i> Eliminar
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection