@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('activitytypes.update', [$activitytype->activity_id, $activitytype->type]) }}" method="post" class="formulario-validacion">
            @method('put')
            @csrf
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="type">Tipo de actividad</label>
                <div class="col-sm-10">
                    <input type="text" name="type" id="type" class="form-control" placeholder="Nombre del tipo de actividad" value="{{ $activitytype->type }}" />
                </div>
            </div>

            <div class="row justify-content-end">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-success">Guardar</button>
                </div>
            </div>
        </form>

    </div>
@endsection