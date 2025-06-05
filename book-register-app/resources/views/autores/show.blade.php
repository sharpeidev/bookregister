@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h2>Detalhes do Autor</h2>
        <div class="card mb-3">
            <div class="card-body">
                <h4>{{ $autor->nome }}</h4>
                <p><strong>Livros:</strong></p>
                <ul>
                    @foreach($autor->livros as $livro)
                        <li>{{ $livro->titulo }}</li>
                    @endforeach
                </ul>
                <a href="{{ route('autores.index') }}" class="btn btn-secondary mt-2">Voltar</a>
            </div>
        </div>
    </div>
@endsection
