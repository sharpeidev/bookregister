<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Livro extends Model
{
    protected $table = 'livro';
    protected $primaryKey = 'codl';
    public $timestamps = false;

    protected $fillable = [
        'titulo',
        'editora',
        'edicao',
        'anopublicacao'
    ];

    public function autores(): BelongsToMany
    {
        return $this->belongsToMany(
            Autor::class,
            'livro_autor',
            'livro_codl',
            'autor_codau',
        );
    }

    public function assuntos(): BelongsToMany
    {
        return $this->belongsToMany(
            Assunto::class,
            'livro_assunto',
            'livro_codl',
            'assunto_codas'
        );
    }
}
