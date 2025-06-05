<?php

namespace App\Http\Controllers;

use App\Models\Assunto;
use App\Models\Autor;
use App\Models\Livro;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class LivroController extends Controller
{
    public function index(): View|Application|Factory
    {
        $livros = Livro::with(['autores','assuntos'])->get();

        return view('livros.index', compact('livros'));
    }

    public function create(): View|Application|Factory
    {
        $autores = Autor::all();
        $assuntos = Assunto::all();

        return view('livros.create', compact('autores', 'assuntos'));
    }

    public function store(Request $request): RedirectResponse
    {
        $livro = Livro::create($request->only('titulo', 'editora', 'edicao', 'anopublicacao'));

        $livro->autores()->sync($request->autores);
        $livro->assuntos()->sync($request->assuntos);

        return redirect()->route('livros.index');
    }

    public function show(string $id): View|Application|Factory
    {
        $livro = Livro::with(['autores','assuntos'])->findOrFail($id);

        return view('livros.show', compact('livro'));
    }

    public function edit(string $id): View|Application|Factory
    {
        $livro = Livro::findOrFail($id);
        $autores = Autor::all();
        $assuntos = Assunto::all();

        return view('livros.edit', compact('livro', 'autores', 'assuntos'));
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $livro = Livro::findOrFail($id);

        $livro->update($request->only('titulo', 'editora', 'edicao', 'anopublicacao'));
        $livro->autores()->sync($request->autores);
        $livro->assuntos()->sync($request->assuntos);

        return redirect()->route('livros.index');
    }

    public function destroy(string $id): RedirectResponse
    {
        $livro = Livro::findOrFail($id);

        $livro->autores()->detach();
        $livro->assuntos()->detach();
        $livro->delete();

        return redirect()->route('livros.index');
    }
}
