@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1>Relatório de Livros por Autor</h1>
        <a href="{{ route('relatorio.livros.pdf') }}" class="btn btn-primary mb-3" target="_blank">
            Baixar PDF do Relatório
        </a>

        <table class="table table-striped">
            <thead>
            <tr>
                <th>Autor</th>
                <th>Livros</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($autores as $autor)
                <tr>
                    <td>{{ $autor->autor }}</td>
                    <td>{{ $autor->livros }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
