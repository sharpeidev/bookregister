<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::statement('DROP VIEW IF EXISTS livros_relatorio_view');
        DB::statement("
            CREATE VIEW livros_relatorio_view AS
            SELECT
                autor.nome AS autor,
                GROUP_CONCAT(DISTINCT livro.titulo ORDER BY livro.titulo SEPARATOR ', ') AS livros
            FROM autor
                INNER JOIN livro_autor ON livro_autor.autor_codau = autor.codau
                INNER JOIN livro ON livro.codl = livro_autor.livro_codl
            GROUP BY
                autor.codau,
                autor.nome
            ORDER BY
                autor.nome;
        ");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement('DROP VIEW IF EXISTS livros_relatorio_view');
    }
};
