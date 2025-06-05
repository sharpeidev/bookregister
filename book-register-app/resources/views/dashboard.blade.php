@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Dashboard</h1>
        <div class="list-group">
            <a href="{{ route('livros.index') }}" class="list-group-item list-group-item-action">
                &gt; Gerenciar Livros
            </a>
            <a href="{{ route('autores.index') }}" class="list-group-item list-group-item-action">
                &gt; Gerenciar Autores
            </a>
            <a href="{{ route('assuntos.index') }}" class="list-group-item list-group-item-action">
                &gt; Gerenciar Assuntos
            </a>
            <a href="{{ route('relatorio.livros.tela') }}" class="list-group-item list-group-item-action">
                &gt; Relatório de Livros
            </a>
        </div>
    </div>
@endsection
