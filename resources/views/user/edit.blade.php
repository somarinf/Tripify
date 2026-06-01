@extends('layouts.app')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
  <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Configuración de cuenta /</span> Editar Usuario</h4>

  <div class="row">
    <div class="col-md-12">
      <div class="card mb-4">
        <h5 class="card-header">Detalles del Perfil</h5>

        <div class="card-body">
          <form action="{{ route('users.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
              <div class="mb-3 col-md-6">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ $user->name }}" required>
              </div>

              <div class="mb-3 col-md-6">
                <label for="username" class="form-label">Nombre de usuario</label>
                <input type="text" id="username" name="username" class="form-control" value="{{ $user->username }}" required>
              </div>

              <div class="mb-3 col-md-6">
                <label for="email" class="form-label">Correo electrónico</label>
                <input type="email" id="email" name="email" class="form-control" value="{{ $user->email }}" required>
              </div>

              <div class="mb-3 col-md-6">
                <label for="password" class="form-label">Nueva contraseña</label>
                <input type="password" id="password" name="password" class="form-control" placeholder="Dejar vacío para mantener la actual">
              </div>

              
            </div>

            <div class="mt-3">
              <button type="submit" class="btn btn-primary me-2">Guardar Cambios</button>
              <a href="{{ route('trips.index') }}" class="btn btn-outline-secondary">Cancelar</a>
            </div>
          </form>
        </div>
      </div>

      <div class="card">
        <h5 class="card-header">Eliminar Cuenta</h5>
        <div class="card-body">
          <div class="alert alert-warning mb-3">
            <h6 class="alert-heading fw-bold mb-1">¿Estás seguro de eliminar este usuario?</h6>
            <p class="mb-0">Esta acción no se puede deshacer.</p>
          </div>
          <form action="{{ route('users.destroy', $user->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Eliminar Usuario</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
