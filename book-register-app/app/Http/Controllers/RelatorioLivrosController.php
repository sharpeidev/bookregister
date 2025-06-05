<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class RelatorioLivrosController extends Controller
{
    public function tela(): View|Application|Factory
    {
        $autores = DB::table('livros_relatorio_view')->get();

        return view('relatorios.livros_tela', compact('autores'));

    }

    public function pdf(): Response
    {
        $autores = DB::table('livros_relatorio_view')->get();

        $pdf = Pdf::loadView('relatorios.livros_pdf', compact('autores'));

        return $pdf->download('relatorio_livros_por_autor.pdf');
    }

}
