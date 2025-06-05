@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h2>Detalhes do Livro</h2>
        <div class="card mb-3">
            <div class="card-body">
                <h4 class="card-title">{{ $livro->titulo }}</h4>
                <p><strong>Editora:</strong> {{ $livro->editora }}</p>
                <p><strong>Edição:</strong> {{ $livro->edicao }}</p>
                <p><strong>Ano de Publicação:</strong> {{ $livro->anopublicacao }}</p>
                <p><strong>Autores:</strong>
                    @foreach($livro->autores as $autor)
                        <span class="badge bg-primary">{{ $autor->nome }}</span>
                    @endforeach
                </p>
                <p><strong>Assuntos:</strong>
                    @foreach($livro->assuntos as $assunto)
                        <span class="badge bg-secondary">{{ $assunto->descricao }}</span>
                    @endforeach
                </p>
                <a href="{{ route('livros.index') }}" class="btn btn-secondary mt-2">Voltar</a>
            </div>
        </div>
    </div>
@endsection
