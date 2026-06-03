@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Editar actividad</h5>
                        <small class="text-muted float-end">Formulario de edición</small>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('activities.update', $activity->id) }}" method="post" class="formulario-validacion">
                            @method('put')
                            @csrf
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="name">Nombre</label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" id="name" class="form-control" value="{{ $activity->name }}" placeholder="Nombre de la actividad">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="start_date">Fecha de inicio</label>
                                <div class="col-sm-10">
                                    <input type="date" name="start_date" id="start_date" class="form-control" value="{{ $activity->start_date }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="end_date">Fecha de fin</label>
                                <div class="col-sm-10">
                                    <input type="date" name="end_date" id="end_date" class="form-control" value="{{ $activity->end_date }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="description">Descripción</label>
                                <div class="col-sm-10">
                                    <textarea name="description" id="description" class="form-control" placeholder="Breve descripción de la actividad">{{ $activity->description }}</textarea>
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
    </div>
@endsection