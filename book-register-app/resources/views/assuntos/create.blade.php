@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h2>Novo Assunto</h2>
        <form action="{{ route('assuntos.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Descrição</label>
                <input type="text" name="descricao" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success">Salvar</button>
            <a href="{{ route('assuntos.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection
