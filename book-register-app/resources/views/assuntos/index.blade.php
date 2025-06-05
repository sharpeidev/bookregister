@extends('layouts.app')

@section('title')
    Assuntos
@endsection

@section('content')
    <div class="container mt-4">
        <h2>Assuntos</h2>
        <a href="{{ route('assuntos.create') }}" class="btn btn-primary mb-3">Novo Assunto</a>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Descrição</th>
                <th>Ações</th>
            </tr>
            </thead>
            <tbody>
            @foreach($assuntos as $assunto)
                <tr>
                    <td>{{ $assunto->descricao }}</td>
                    <td>
                        <a href="{{ route('assuntos.edit', $assunto->codas) }}" class="btn btn-sm btn-warning">Editar</a>
                        <form action="{{ route('assuntos.destroy', $assunto->codas) }}" method="POST" style="display:inline;">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Remover assunto?')">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
