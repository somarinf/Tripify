@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="{{ route('activities.index', $stage_id) }}" class="btn btn-dark mb-3">Volver</a>
        <div class="row">
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Registrar información de costo</h5>
                        <small class="text-muted float-end">Formulario de costo</small>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('costinfos.store', $activity_id) }}" method="post">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="name">Nombre</label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Nombre de la información de costo" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="cost_value">Valor del costo</label>
                                <div class="col-sm-10">
                                    <input type="number" name="cost_value" id="cost_value" class="form-control" placeholder="Valor del costo" />
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

        <!-- Tabla de costos con estilo de card y tabla responsive -->
        <div class="card mt-4">
            <h5 class="card-header">Lista de información de costos</h5>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Valor</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($costinfos as $costinfo)
                            <tr>
                                <td>
                                    <i class="fas fa-money-bill-wave fa-lg text-success me-3"></i>
                                    <strong>{{ $costinfo->name }}</strong>
                                </td>
                                <td>${{ number_format($costinfo->cost_value, 2) }}</td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{ route('costinfos.edit', $costinfo->id) }}">
                                                <i class="bx bx-edit-alt me-2"></i> Editar
                                            </a>
                                            <form action="{{ route('costinfos.destroy', [$costinfo->id, $activity_id]) }}" method="post" style="display:inline;">
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