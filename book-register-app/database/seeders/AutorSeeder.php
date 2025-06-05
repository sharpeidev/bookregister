<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AutorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $autores = [
            ['nome' => 'Machado de Assis'],
            ['nome' => 'J.R.R. Tolkien'],
            ['nome' => 'J.K. Rowling'],
            ['nome' => 'Antoine de Saint-Exupéry'],
            ['nome' => 'George Orwell'],
            ['nome' => 'Jane Austen'],
            ['nome' => 'Paulo Coelho'],
            ['nome' => 'Dan Brown'],
            ['nome' => 'Emily Brontë'],
            ['nome' => 'José de Alencar'],
            ['nome' => 'Graciliano Ramos'],
            ['nome' => 'Gabriel García Márquez'],
            ['nome' => 'Bram Stoker'],
            ['nome' => 'Franz Kafka'],
            ['nome' => 'Herman Melville'],
            ['nome' => 'Terry Pratchett'],
            ['nome' => 'Neil Gaiman'],
            ['nome' => 'Stephen King'],
            ['nome' => 'Peter Straub'],
            ['nome' => 'Douglas Preston'],
            ['nome' => 'Lincoln Child'],
            ['nome' => 'Agatha Christie'],
        ];

        foreach ($autores as $autor) {
            DB::table('autor')->updateOrInsert($autor, $autor);
        }

    }
}
