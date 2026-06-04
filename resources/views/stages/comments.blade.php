@extends('layouts.app')

@section('content')
    <div class="container">
        <!-- Header con botón de regreso -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <a href="{{ route('stages.index', $stage->trip_id) }}" class="btn btn-outline-primary">
                            <i class="bx bx-arrow-back me-1"></i> Regresar a Etapas
                        </a>
                    </div>
                    <div>
                        <h4 class="mb-0 text-primary">
                            <i class="bx bx-comment me-2"></i>Comentarios de la Etapa: {{ $stage->name }}
                        </h4>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mensaje de éxito -->
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bx bx-check-circle me-2"></i>
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <!-- Mensaje de error -->
        @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <i class="bx bx-error-circle me-2"></i>
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <!-- Formulario para agregar nuevo comentario -->
        <div class="row mb-4">
            <div class="col-xxl">
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Agregar nuevo comentario</h5>
                        <small class="text-muted float-end">Comparte tu experiencia</small>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('stages.comments.store', $stage->id) }}" method="post">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="content">Comentario</label>
                                <div class="col-sm-10">
                                    <textarea name="content" id="content" class="form-control @error('content') is-invalid @enderror" rows="3" 
                                              placeholder="Escribe tu comentario sobre esta etapa..." required>{{ old('content') }}</textarea>
                                    @error('content')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row justify-content-end">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-success">
                                        <i class="bx bx-plus-circle me-1"></i> Publicar Comentario
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Lista de comentarios -->
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">
                    <i class="bx bx-message-square-dots me-2"></i>Comentarios ({{ count($comments) }})
                </h5>
            </div>
            <div class="card-body">
                @if(count($comments) > 0)
                    <div class="list-group list-group-flush">
                        @foreach($comments as $comment)
                            <div class="list-group-item border-0 px-0">
                                <div class="d-flex align-items-start">
                                    <div class="avatar avatar-sm me-3">
                                        <div class="avatar-initial bg-label-primary rounded-circle">
                                            <i class="bx bx-user"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <div class="d-flex justify-content-between align-items-start mb-2">
                                            <h6 class="mb-0 text-primary">
                                                {{ $comment->user->name ?? 'Usuario Desconocido' }}
                                            </h6>
                                            <small class="text-muted">
                                                <i class="bx bx-time-five me-1"></i>
                                                {{ $comment->created_at->diffForHumans() }}
                                            </small>
                                        </div>
                                        <p class="mb-0 text-body">{{ $comment->content }}</p>
                                    </div>
                                </div>
                            </div>
                            @if(!$loop->last)
                                <hr class="my-3">
                            @endif
                        @endforeach
                    </div>
                @else
                    <div class="text-center py-4">
                        <div class="avatar avatar-xl mx-auto mb-3">
                            <div class="avatar-initial bg-label-secondary rounded-circle">
                                <i class="bx bx-message-square-x text-muted"></i>
                            </div>
                        </div>
                        <h6 class="text-muted">No hay comentarios aún</h6>
                        <p class="text-muted mb-0">Sé el primero en comentar sobre esta etapa</p>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection