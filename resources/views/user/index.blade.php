
@extends('layouts.app')

@section('content')
    <div class="container">
        <!-- Formulario para crear usuario -->
        <div class="row">
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Registrar nuevo usuario</h5>
                        <small class="text-muted float-end">Formulario de usuario</small>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('users.store') }}" method="post">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="name">Nombre</label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Nombre completo" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="username">Usuario</label>
                                <div class="col-sm-10">
                                    <input type="text" name="username" id="username" class="form-control" placeholder="Nombre de usuario" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="email">Correo</label>
                                <div class="col-sm-10">
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Correo electrónico" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="password">Contraseña</label>
                                <div class="col-sm-10">
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Contraseña" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="role">Rol</label>
                                <div class="col-sm-10">
                                    <select name="role" id="role" class="form-select" required>
                                        <option value="" disabled selected>Selecciona un rol</option>
                                        <option value="1">admin</option>
                                        <option value="2">user</option>
                                    </select>
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

        <!-- Tabla de usuarios con estilo de card y tabla responsive -->
        <div class="card mt-4">
            <h5 class="card-header">Lista de usuarios</h5>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Usuario</th>
                            <th>Correo</th>
                            <th>Rol</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($users as $user)
                            <tr>
                                <td>
                                    <i class="fas fa-user fa-lg text-primary me-3"></i>
                                    <strong>{{ $user->name }}</strong>
                                </td>
                                <td>{{ $user->username }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    @if($user->role_id == 1)
                                        <span class="badge bg-label-primary">Admin</span>
                                    @else
                                        <span class="badge bg-label-secondary">User</span>
                                    @endif
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{ route('users.edit', $user->id) }}">
                                                <i class="bx bx-edit-alt me-2"></i> Editar
                                            </a>
                                            <form action="{{ route('users.destroy', $user->id) }}" method="post" style="display:inline;">
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