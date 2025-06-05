@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h2>Detalhes do Assunto</h2>
        <div class="card mb-3">
            <div class="card-body">
                <h4>{{ $assunto->descricao }}</h4>
                <p><strong>Livros:</strong></p>
                <ul>
                    @foreach($assunto->livros as $livro)
                        <li>{{ $livro->titulo }}</li>
                    @endforeach
                </ul>
                <a href="{{ route('assuntos.index') }}" class="btn btn-secondary mt-2">Voltar</a>
            </div>
        </div>
    </div>
@endsection
