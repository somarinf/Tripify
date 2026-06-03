@extends('layouts.app')

@section('content')
 <div class="container">
        <form action="{{ route('stages.update', $stage->id) }}" method="post" class="formulario-validacion">
            @method('put')
            @csrf
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="name">Nombre</label>
                <div class="col-sm-10">
                    <input type="text" name="name" id="name" class="form-control" placeholder="Nombre de la etapa" value="{{ $stage->name }}" />
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="destination">Destino</label>
                <div class="col-sm-10">
                    <input type="text" name="destination" id="destination" class="form-control" placeholder="Destino de la etapa" value="{{ $stage->destination }}" />
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="start_date">Fecha de inicio</label>
                <div class="col-sm-10">
                    <input type="date" name="start_date" id="start_date" class="form-control" value="{{ $stage->start_date }}" />
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="end_date">Fecha de fin</label>
                <div class="col-sm-10">
                    <input type="date" name="end_date" id="end_date" class="form-control" value="{{ $stage->end_date }}" />
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="description">Descripción</label>
                <div class="col-sm-10">
                    <textarea name="description" id="description" class="form-control" placeholder="Breve descripción de la etapa">{{ $stage->description }}</textarea>
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

