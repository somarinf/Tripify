@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <div>
                <h5 class="mb-0">
                    <i class="bx bx-group me-2"></i>
                    Gestionar Usuarios del Viaje
                </h5>
                <small class="text-muted">{{ $trip->name }}</small>
            </div>
            <a href="{{ route('trips.index') }}" class="btn btn-outline-secondary">
                <i class="bx bx-arrow-back me-1"></i> Regresar a Viajes
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">
                        <i class="bx bx-user-plus me-2"></i>
                        Agregar Usuario al Viaje
                    </h5>
                    <small class="text-muted">Formulario de invitación</small>
                </div>
                <div class="card-body">
                    <form action="{{ route('planners.store', $trip->id) }}" method="POST">
                        @csrf
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="email">Email del Usuario</label>
                            <div class="col-sm-10">
                                <input 
                                    type="email" 
                                    name="email" 
                                    id="email" 
                                    class="form-control @error('email') is-invalid @enderror" 
                                    placeholder="usuario@ejemplo.com"
                                    value="{{ old('email') }}"
                                    required
                                />
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="rol">Rol en el Viaje</label>
                            <div class="col-sm-10">
                                <select name="rol" id="rol" class="form-select @error('rol') is-invalid @enderror" required>
                                    <option value="">Seleccionar rol</option>
                                    <option value="organizador" {{ old('rol') == 'organizador' ? 'selected' : '' }}>
                                        Organizador
                                    </option>
                                    <option value="participante" {{ old('rol') == 'participante' ? 'selected' : '' }}>
                                        Participante
                                    </option>
                                </select>
                                @error('rol')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-success">
                                    <i class="bx bx-plus me-1"></i> Agregar Usuario
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">
                <i class="bx bx-list-ul me-2"></i>
                Usuarios en el Viaje ({{ $planners->count() }})
            </h5>
        </div>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>Usuario</th>
                        <th>Email</th>
                        <th>Rol</th>
                        <th>Fecha de Agregado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @forelse ($planners as $planner)
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar avatar-sm me-3">
                                        <span class="avatar-initial bg-label-primary rounded-circle">
                                            {{ strtoupper(substr($planner->user->name, 0, 2)) }}
                                        </span>
                                    </div>
                                    <strong>{{ $planner->user->name }}</strong>
                                </div>
                            </td>
                            <td>{{ $planner->user->email }}</td>
                            <td>
                                @if($planner->rol == 'organizador')
                                    <span class="badge bg-label-success">
                                        <i class="bx bx-crown me-1"></i> Organizador
                                    </span>
                                @else
                                    <span class="badge bg-label-info">
                                        <i class="bx bx-user me-1"></i> Participante
                                    </span>
                                @endif
                            </td>
                            <td>{{ $planner->created_at->format('d/m/Y H:i') }}</td>
                            <td>
                                @if($planner->user_id != auth()->id())
                                    <form action="{{ route('planners.destroy', [$trip->id, $planner->user_id]) }}" 
                                          method="POST" 
                                          style="display: inline;"
                                          onsubmit="return confirm('¿Estás seguro de eliminar a este usuario del viaje?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger">
                                            <i class="bx bx-trash me-1"></i> Eliminar
                                        </button>
                                    </form>
                                @else
                                    <span class="text-muted">
                                        <i class="bx bx-lock me-1"></i> No puedes eliminarte
                                    </span>
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center py-4">
                                <div class="empty-state">
                                    <i class="bx bx-group bx-lg text-muted"></i>
                                    <p class="text-muted mt-2">No hay usuarios en este viaje</p>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

@if(session('success'))
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            toastr.success('{{ session('success') }}');
        });
    </script>
@endif

@if(session('error'))
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            toastr.error('{{ session('error') }}');
        });
    </script>
@endif

@endsection