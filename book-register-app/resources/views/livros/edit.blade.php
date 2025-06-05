@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h2>Editar Livro</h2>
        <form action="{{ route('livros.update', $livro->codl) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Título</label>
                <input type="text" name="titulo" class="form-control" value="{{ $livro->titulo }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Editora</label>
                <input type="text" name="editora" class="form-control" value="{{ $livro->editora }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Edição</label>
                <input type="number" name="edicao" class="form-control" value="{{ $livro->edicao }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Ano de Publicação</label>
                <input type="text" name="anopublicacao" class="form-control" value="{{ $livro->anopublicacao }}" required maxlength="4">
            </div>
            <div class="mb-3">
                <label class="form-label">Autores</label>
                <select name="autores[]" class="form-select" multiple>
                    @foreach($autores as $autor)
                        <option value="{{ $autor->codau }}"
                                @if(in_array($autor->codau, $livro->autores->pluck('codau')->toArray())) selected @endif>
                            {{ $autor->nome }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Assuntos</label>
                <select name="assuntos[]" class="form-select" multiple>
                    @foreach($assuntos as $assunto)
                        <option value="{{ $assunto->codas }}"
                                @if(in_array($assunto->codas, $livro->assuntos->pluck('codas')->toArray())) selected @endif>
                            {{ $assunto->descricao }}
                        </option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-success">Atualizar</button>
            <a href="{{ route('livros.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection
