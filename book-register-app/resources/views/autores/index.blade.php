@extends('layouts.app')

@section('title')
    Autores
@endsection

@section('content')
    <div class="container mt-4">
        <h2>Autores</h2>
        <div class="text-end mb-3">
            <a href="{{ route('autores.create') }}" class="btn btn-primary">Novo Autor</a>
        </div>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Nome</th>
                <th>Ações</th>
            </tr>
            </thead>
            <tbody>
            @foreach($autores as $autor)
                <tr>
                    <td>{{ $autor->nome }}</td>
                    <td>
                        <a href="{{ route('autores.edit', $autor->codau) }}" class="btn btn-sm btn-warning">Editar</a>
                        <form action="{{ route('autores.destroy', $autor->codau) }}" method="POST" style="display:inline;">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Remover autor?')">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
