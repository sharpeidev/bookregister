<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class AutorController extends Controller
{
    public function index(): View|Application|Factory
    {
        $autores = Autor::orderBy('nome')->get();

        return view('autores.index', compact('autores'));
    }

    public function create(): View|Application|Factory
    {
        return view('autores.create');
    }

    public function store(Request $request): RedirectResponse
    {
        Autor::create($request->only('nome'));

        return redirect()->route('autores.index');
    }

    public function show(string $id): View|Application|Factory
    {
        $autor = Autor::with('livros')->findOrFail($id);

        return view('autores.show', compact('autor'));
    }

    public function edit(string $id): View|Application|Factory
    {
        $autor = Autor::findOrFail($id);

        return view('autores.edit', compact('autor'));
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $autor = Autor::findOrFail($id);
        $autor->update($request->only('nome'));

        return redirect()->route('autores.index');
    }

    public function destroy(string $id): RedirectResponse
    {
        $autor = Autor::findOrFail($id);

        $autor->livros()->detach();
        $autor->delete();

        return redirect()->route('autores.index');
    }
}
