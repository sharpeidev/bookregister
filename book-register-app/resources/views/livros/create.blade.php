@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h2>Novo Livro</h2>
        <form action="{{ route('livros.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Título</label>
                <input type="text" name="titulo" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Editora</label>
                <input type="text" name="editora" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Edição</label>
                <input type="number" name="edicao" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Ano de Publicação</label>
                <input type="text" name="anopublicacao" class="form-control" required maxlength="4">
            </div>
            <div class="mb-3">
                <label class="form-label">Autores</label>
                <select name="autores[]" class="form-select" multiple>
                    @foreach($autores as $autor)
                        <option value="{{ $autor->codau }}">{{ $autor->nome }}</option>
                    @endforeach
                </select>
                <small class="form-text text-muted">Use Ctrl ou Command para selecionar vários autores.</small>
            </div>
            <div class="mb-3">
                <label class="form-label">Assuntos</label>
                <select name="assuntos[]" class="form-select" multiple>
                    @foreach($assuntos as $assunto)
                        <option value="{{ $assunto->codas }}">{{ $assunto->descricao }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-success">Salvar</button>
            <a href="{{ route('livros.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection
