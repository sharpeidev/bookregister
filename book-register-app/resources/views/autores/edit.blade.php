@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h2>Editar Autor</h2>
        <form action="{{ route('autores.update', $autor->codau) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Nome</label>
                <input type="text" name="nome" class="form-control" value="{{ $autor->nome }}" required>
            </div>
            <button type="submit" class="btn btn-success">Atualizar</button>
            <a href="{{ route('autores.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection
