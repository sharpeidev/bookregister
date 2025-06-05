@extends('layouts.app')

@section('title')
    Livros
@endsection

@section('content')
    <div class="container mt-4">
        <h2>Livros</h2>
        <a href="{{ route('livros.create') }}" class="btn btn-primary mb-3">Novo Livro</a>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Título</th>
                <th>Editora</th>
                <th>Edição</th>
                <th>Ano</th>
                <th>Autores</th>
                <th>Assuntos</th>
                <th>Ações</th>
            </tr>
            </thead>
            <tbody>
            @foreach($livros as $livro)
                <tr>
                    <td>{{ $livro->titulo }}</td>
                    <td>{{ $livro->editora }}</td>
                    <td>{{ $livro->edicao }}</td>
                    <td>{{ $livro->anopublicacao }}</td>
                    <td>
                        {{ implode(', ', $livro->autores->pluck('nome')->toArray()) }}
                    </td>
                    <td>
                        {{ implode(', ', $livro->assuntos->pluck('descricao')->toArray()) }}
                    </td>
                    <td>
                        <a href="{{ route('livros.edit', $livro->codl) }}" class="btn btn-sm btn-warning">Editar</a>
                        <form action="{{ route('livros.destroy', $livro->codl) }}" method="POST" style="display:inline;">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Remover livro?')">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
