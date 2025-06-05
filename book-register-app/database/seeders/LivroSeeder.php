<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LivroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $livros = [
            [
                'titulo'         => 'Dom Casmurro',
                'editora'        => 'Editora Principis',
                'edicao'         => '100',
                'anopublicacao'  => 1899,
                'valor'          => 29.90,
                'autores'        => ['Machado de Assis'],
                'assuntos'       => ['Romance'],
            ],
            [
                'titulo'         => 'O Senhor dos Anéis: A Sociedade do Anel',
                'editora'        => 'HarperCollins',
                'edicao'         => '1',
                'anopublicacao'  => 1954,
                'valor'          => 59.90,
                'autores'        => ['J.R.R. Tolkien'],
                'assuntos'       => ['Fantasia'],
            ],
            [
                'titulo'         => 'Harry Potter e a Pedra Filosofal',
                'editora'        => 'Rocco',
                'edicao'         => '1',
                'anopublicacao'  => 1997,
                'valor'          => 39.90,
                'autores'        => ['J.K. Rowling'],
                'assuntos'       => ['Fantasia'],
            ],
            [
                'titulo'         => 'O Pequeno Príncipe',
                'editora'        => 'Agir',
                'edicao'         => '400',
                'anopublicacao'  => 1943,
                'valor'          => 27.50,
                'autores'        => ['Antoine de Saint-Exupéry'],
                'assuntos'       => ['Infantil'],
            ],
            [
                'titulo'         => '1984',
                'editora'        => 'Companhia das Letras',
                'edicao'         => '1',
                'anopublicacao'  => 1949,
                'valor'          => 32.90,
                'autores'        => ['George Orwell'],
                'assuntos'       => ['Distopia'],
            ],
            [
                'titulo'         => 'Orgulho e Preconceito',
                'editora'        => 'Martin Claret',
                'edicao'         => '100',
                'anopublicacao'  => 1813,
                'valor'          => 28.90,
                'autores'        => ['Jane Austen'],
                'assuntos'       => ['Romance'],
            ],
            [
                'titulo'         => 'O Alquimista',
                'editora'        => 'Rocco',
                'edicao'         => '1',
                'anopublicacao'  => 1988,
                'valor'          => 31.00,
                'autores'        => ['Paulo Coelho'],
                'assuntos'       => ['Clássico'],
            ],
            [
                'titulo'         => 'O Código Da Vinci',
                'editora'        => 'Arqueiro',
                'edicao'         => '1',
                'anopublicacao'  => 2003,
                'valor'          => 43.90,
                'autores'        => ['Dan Brown'],
                'assuntos'       => ['Mistério'],
            ],
            [
                'titulo'         => 'O Morro dos Ventos Uivantes',
                'editora'        => 'Autêntica',
                'edicao'         => '50',
                'anopublicacao'  => 1847,
                'valor'          => 24.90,
                'autores'        => ['Emily Brontë'],
                'assuntos'       => ['Drama'],
            ],
            [
                'titulo'         => 'O Guarani',
                'editora'        => 'Principis',
                'edicao'         => '1',
                'anopublicacao'  => 1857,
                'valor'          => 20.90,
                'autores'        => ['José de Alencar'],
                'assuntos'       => ['Romance'],
            ],
            [
                'titulo'         => 'Vidas Secas',
                'editora'        => 'Record',
                'edicao'         => '100',
                'anopublicacao'  => 1938,
                'valor'          => 27.90,
                'autores'        => ['Graciliano Ramos'],
                'assuntos'       => ['Drama'],
            ],
            [
                'titulo'         => 'Cem Anos de Solidão',
                'editora'        => 'Record',
                'edicao'         => '1',
                'anopublicacao'  => 1967,
                'valor'          => 41.00,
                'autores'        => ['Gabriel García Márquez'],
                'assuntos'       => ['Realismo mágico'],
            ],
            [
                'titulo'         => 'Drácula',
                'editora'        => 'Darkside',
                'edicao'         => '67',
                'anopublicacao'  => 1897,
                'valor'          => 49.00,
                'autores'        => ['Bram Stoker'],
                'assuntos'       => ['Terror'],
            ],
            [
                'titulo'         => 'A Metamorfose',
                'editora'        => 'Antofágica',
                'edicao'         => '1',
                'anopublicacao'  => 1915,
                'valor'          => 29.00,
                'autores'        => ['Franz Kafka'],
                'assuntos'       => ['Sátira'],
            ],
            [
                'titulo'         => 'Moby Dick',
                'editora'        => 'Martins Fontes',
                'edicao'         => '50',
                'anopublicacao'  => 1851,
                'valor'          => 35.50,
                'autores'        => ['Herman Melville'],
                'assuntos'       => ['Aventura'],
            ],
            [
                'titulo'         => 'Boa Sorte, Bela Morte',
                'editora'        => 'HarperCollins',
                'edicao'         => '1',
                'anopublicacao'  => 1990,
                'valor'          => 44.90,
                'autores'        => ['Neil Gaiman', 'Terry Pratchett'],
                'assuntos'       => ['Fantasia', 'Satira'],
            ],
            [
                'titulo'         => 'O Talismã',
                'editora'        => 'Suma',
                'edicao'         => '84',
                'anopublicacao'  => 1984,
                'valor'          => 55.00,
                'autores'        => ['Stephen King', 'Peter Straub'],
                'assuntos'       => ['Fantasia', 'Terror'],
            ],
            [
                'titulo'         => 'Relíquia Macabra',
                'editora'        => 'HarperCollins',
                'edicao'         => '1',
                'anopublicacao'  => 2002,
                'valor'          => 48.00,
                'autores'        => ['Douglas Preston', 'Lincoln Child'],
                'assuntos'       => ['Mistério', 'Policial'],
            ],
            [
                'titulo'         => 'O Hobbit',
                'editora'        => 'HarperCollins',
                'edicao'         => '1',
                'anopublicacao'  => 1937,
                'valor'          => 52.00,
                'autores'        => ['J.R.R. Tolkien'],
                'assuntos'       => ['Fantasia'],
            ],
            [
                'titulo'         => 'Os Crimes ABC',
                'editora'        => 'Globo Livros',
                'edicao'         => '1',
                'anopublicacao'  => 1936,
                'valor'          => 38.90,
                'autores'        => ['Agatha Christie'],
                'assuntos'       => ['Policial', 'Mistério'],
            ],
            [
                'titulo'         => 'O Guia do Mochileiro das Galáxias',
                'editora'        => 'Arqueiro',
                'edicao'         => '1',
                'anopublicacao'  => 1980,
                'valor'          => 59.99,
                'autores'        => ['Douglas Preston', 'Lincoln Child'],
                'assuntos'       => ['Ficção Científica', 'Aventura'],
            ],
            [
                'titulo'         => 'Belas Maldições',
                'editora'        => 'Bertrand',
                'edicao'         => '1',
                'anopublicacao'  => 1990,
                'valor'          => 35.90,
                'autores'        => ['Neil Gaiman', 'Terry Pratchett'],
                'assuntos'       => ['Fantasia', 'Satira'],
            ],
            [
                'titulo'         => 'O Talismã Perdido',
                'editora'        => 'Suma',
                'edicao'         => '1',
                'anopublicacao'  => 2006,
                'valor'          => 61.00,
                'autores'        => ['Stephen King', 'Peter Straub'],
                'assuntos'       => ['Terror', 'Ficção Científica'],
            ],
            [
                'titulo'         => 'Os Senhores da Terra',
                'editora'        => 'HarperCollins',
                'edicao'         => '1',
                'anopublicacao'  => 2020,
                'valor'          => 49.00,
                'autores'        => ['J.R.R. Tolkien', 'Jane Austen'],
                'assuntos'       => ['Fantasia', 'Romance'],
            ],
            [
                'titulo'         => 'Autores em Série',
                'editora'        => 'Editora Literária',
                'edicao'         => '1',
                'anopublicacao'  => 2021,
                'valor'          => 45.50,
                'autores'        => ['J.K. Rowling', 'George Orwell'],
                'assuntos'       => ['Mistério', 'Drama'],
            ],
        ];

        foreach ($livros as $livro) {
            $autores = $livro['autores'] ?? [];
            $assuntos = $livro['assuntos'] ?? [];

            unset($livro['autores'], $livro['assuntos']);

            $codl = DB::table('livro')->insertGetId([
                'titulo' => $livro['titulo'],
                'editora' => $livro['editora'],
                'edicao' => $livro['edicao'],
                'anopublicacao' => $livro['anopublicacao'],
                'valor' => $livro['valor'],
            ]);

            foreach ($autores as $autorNome) {
                $codau = DB::table('autor')->where('nome', $autorNome)->value('codau');

                if ($codau) {
                    DB::table('livro_autor')->insert([
                        'livro_codl' => $codl,
                        'autor_codau' => $codau,
                    ]);
                }
            }

            foreach ($assuntos as $assuntoDesc) {
                $codas = DB::table('assunto')->where('descricao', $assuntoDesc)->value('codas');

                if ($codas) {
                    DB::table('livro_assunto')->insert([
                        'livro_codl' => $codl,
                        'assunto_codas' => $codas,
                    ]);
                }
            }
        }
    }
}
