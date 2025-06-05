<?php

namespace App\Http\Controllers;

use App\Models\Assunto;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class AssuntoController extends Controller
{
    public function index(): View|Application|Factory
    {
        $assuntos = Assunto::orderBy('descricao')->get();

        return view('assuntos.index', compact('assuntos'));
    }

    public function create(): View|Application|Factory
    {
        return view('assuntos.create');
    }

    public function store(Request $request): RedirectResponse
    {
        Assunto::create($request->only('descricao'));

        return redirect()->route('assuntos.index');
    }

    public function show(string $id): View|Application|Factory
    {
        $assunto = Assunto::with('livros')->findOrFail($id);

        return view('assuntos.show', compact('assunto'));
    }

    public function edit(string $id): View|Application|Factory
    {
        $assunto = Assunto::findOrFail($id);

        return view('assuntos.edit', compact('assunto'));
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $assunto = Assunto::findOrFail($id);

        $assunto->update($request->only('descricao'));

        return redirect()->route('assuntos.index');
    }

    public function destroy(string $id): RedirectResponse
    {
        $assunto = Assunto::findOrFail($id);

        $assunto->livros()->detach();
        $assunto->delete();

        return redirect()->route('assuntos.index');
    }
}
