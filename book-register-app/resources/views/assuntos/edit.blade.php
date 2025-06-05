@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h2>Editar Assunto</h2>
        <form action="{{ route('assuntos.update', $assunto->codas) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Descrição</label>
                <input type="text" name="descricao" class="form-control" value="{{ $assunto->descricao }}" required>
            </div>
            <button type="submit" class="btn btn-success">Atualizar</button>
            <a href="{{ route('assuntos.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection
