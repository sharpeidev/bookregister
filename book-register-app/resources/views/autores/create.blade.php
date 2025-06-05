@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h2>Novo Autor</h2>
        <form action="{{ route('autores.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Nome</label>
                <input type="text" name="nome" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success">Salvar</button>
            <a href="{{ route('autores.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection
