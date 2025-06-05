<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AssuntoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $assuntos = [
            ['descricao' => 'Romance'],
            ['descricao' => 'Fantasia'],
            ['descricao' => 'Infantil'],
            ['descricao' => 'Distopia'],
            ['descricao' => 'Aventura'],
            ['descricao' => 'Clássico'],
            ['descricao' => 'Mistério'],
            ['descricao' => 'Drama'],
            ['descricao' => 'Realismo mágico'],
            ['descricao' => 'Terror'],
            ['descricao' => 'Sátira'],
            ['descricao' => 'Ficção Científica'],
            ['descricao' => 'Policial'],
            ['descricao' => 'História'],
            ['descricao' => 'Psicologia'],
        ];

        foreach ($assuntos as $assunto) {
            DB::table('assunto')->updateOrInsert($assunto, $assunto);
        }
    }
}
