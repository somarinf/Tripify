@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('costinfos.update', $activity_id) }}" method="post">
            @method('put')
            @csrf
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="name">Nombre</label>
                <div class="col-sm-10">
                    <input type="text" name="name" id="name" class="form-control" placeholder="Nombre de la información de costo" value="{{ $costinfo->name }}" />
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="cost_value">Valor del costo</label>
                <div class="col-sm-10">
                    <input type="number" name="cost_value" id="cost_value" class="form-control" placeholder="Valor del costo" value="{{ $costinfo->cost_value }}" />
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